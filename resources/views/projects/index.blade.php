<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Add Project Button --}}
                    <div class="mb-4 flex justify-end">
                        <button onclick="openAddModal()"
                            class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600">
                            + Add Project
                        </button>
                    </div>

                    {{-- Projects Table --}}
                    <x-table 
                        :columns="[
                            ['label' => '#', 'field' => 'index','sortable' => true],
                            ['label' => 'Name', 'field' => 'name'],
                            ['label' => 'Actions', 'field' => 'actions'],
                        ]"
                        :data="$project"
                        :deleteRoute="fn($id) => route('project.destroy', $id)"
                        actionView="partials.project-action"
                        sortRoute="project.sort"

                    />
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div id="projectModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 id="modalTitle" class="text-lg font-bold mb-4">Add Project</h3>
            <form id="projectForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="project_id">

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded mt-1" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" class="w-full border-gray-300 rounded mt-1" rows="3"></textarea>
                </div>

               {{-- Key Points --}}
                
    <div class="mb-4">
        <label for="keypoints" class="block text-sm font-medium text-gray-700">
            Key Points <small class="text-gray-500">(comma separated)</small>
        </label>
        <textarea name="keypoints" id="keypoints" class="w-full border-gray-300 rounded mt-1" rows="2"></textarea>
    </div>

                {{-- Technologies --}}
                <div class="mb-4">
                    <label for="techs" class="block text-sm font-medium text-gray-700">
                        Technologies <small class="text-gray-500">(comma separated)</small>
                    </label>
                    <textarea name="techs" id="techs" class="w-full border-gray-300 rounded mt-1" rows="2"></textarea>
                </div>

                {{-- Images --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Project Images</label>
                    <input type="file" name="images[]" id="images" multiple class="w-full border-gray-300 rounded mt-1">
                    <small class="text-gray-500">You can upload multiple images</small>
                </div>

                <div class="flex justify-end">
                    <button type="button" onclick="closeModal('projectModal')" class="px-4 py-2 bg-gray-300 rounded danger-btn mr-2">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-blue-500  rounded hover:bg-blue-600" style="margin-left:5px">
                        Save
                    </button>
                </div>
            </form>


        </div>
    </div>

    <script>
    

        function openAddModal() {
            const modal = document.getElementById('projectModal');
            modal.querySelector('form').reset();
            modal.querySelector("#modalTitle").innerText = "Add Project";
            modal.querySelector("#project_id").value = "";
            openModal('projectModal');
        }
function openProjectEditModal(project) {
    const modal = document.getElementById('projectModal');
    modal.querySelector("#modalTitle").innerText = "Edit Project";
    modal.querySelector("#project_id").value = project.id;
    modal.querySelector("#name").value = project.name;

    // For description, usually plain text:
    modal.querySelector("#description").value = project.description ?? '';

    // For keypoints, if it's JSON string, parse and join
    let keypoints = project.keypoints ?? '';
    try {
        const parsed = JSON.parse(keypoints);
        if (Array.isArray(parsed)) {
            keypoints = parsed.filter(Boolean).join(', ');
        }
    } catch {
        // not JSON, leave as is
    }
    
    modal.querySelector("#keypoints").value = keypoints;
let techs = project.techs ?? '';
    try {
        const parsed = JSON.parse(techs);
        if (Array.isArray(parsed)) {
            techs = parsed.filter(Boolean).join(', ');
        }
    } catch {
        // not JSON, leave as is
    }
    modal.querySelector("#techs").value = techs ?? '';
    openModal('projectModal');
}



        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

      document.querySelector("#projectForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch("{{ route('project.store') }}", {
        method: "POST",
        headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            showToast(data.message, "success");
            playSound("success");
            refreshCurrentPage();
            closeModal('projectModal');
        } else {
            showToast("Error saving project", "error");
            playSound("error");
        }
    });
});

    </script>
</x-app-layout>
