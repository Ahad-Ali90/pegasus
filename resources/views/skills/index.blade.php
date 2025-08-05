<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- Add Skill Button --}}
                    <div class="mb-4 flex justify-end">
                        <button onclick="openAddModal()"
                            class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
                        + Add Skill
                        </button>
                    </div>

                    {{-- Skills Table --}}
                        <x-table 
                        :columns="[
                            ['label' => '#', 'field' => 'index', 'sortable' => true],
                            ['label' => 'Name', 'field' => 'name'],
                            ['label' => 'Actions', 'field' => 'actions'],
                        ]"
                        :data="$skills"
                        :deleteRoute="fn($id) => route('skills.destroy', $id)"
                        actionView="partials.skills-action"
                        sortRoute='skills.sort'
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Background
<div id="createSkillModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center modal-bg-color">
    <div class="modal-box">
        <h3 id="modalTitle" class="text-lg font-bold mb-4">Add Skill</h3>
        <form id="createSkillForm">
            @csrf
            <input type="hidden" name="id" id="skill_id">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Skill Name</label>
                <input type="text" name="name" id="name"
                       class="w-full border-gray-300 rounded mt-1" required>
            </div>
          <div class="flex justify-end">
    <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded danger-btn" style="margin-right:5px">
        Cancel
    </button>
    <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
        Save
    </button>
</div>


        </form>
    </div>
</div> -->

    <x-modal 
        id="skillModal"
        heading="Add Skill"
        url="{{ route('skills.store') }}"
        method="POST"
        submitText="Save"
        :fields="[
            ['name' => 'id', 'type' => 'hidden'],
            ['name' => 'name', 'label' => 'Skill Name', 'type' => 'text', 'required' => true],
        ]"
    />

<!-- <script>
    const modal = document.getElementById('createSkillModal');

  function openEditModal(id, name) {
    document.querySelector("#createSkillModal input[name='id']").value = id;
    document.querySelector("#createSkillModal input[name='name']").value = name;
    document.querySelector("#createSkillModal h3").innerText = "Edit Skill";
    openModal('createSkillModal');
}
function openAddModal() {
    const modal = document.getElementById('createSkillModal');
    const form = modal.querySelector('form');

    // Reset form
    form.reset();

    // Clear hidden id field explicitly
    const hiddenId = form.querySelector("input[name='id']");
    if (hiddenId) hiddenId.value = "";

    // Reset heading
    modal.querySelector("h3").innerText = "Add Skill";

    openModal('createSkillModal');
}

function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
}


document.querySelector("#createSkillModal form").addEventListener("submit", function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const id = formData.get('id');

    let url = id ? "{{ route('skills.update') }}" : "{{ route('skills.store') }}";

    fetch(url, {
        method: "POST",
        headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showToast(id ? "Skill updated successfully" : "Skill added successfully", "success");
            playSound("success");
            refreshCurrentPage();
            closeModal('createSkillModal');
        } else {
            showToast("Error saving skill", "error");
            playSound("error");
        }
    });
});


</script> -->

</x-app-layout>
