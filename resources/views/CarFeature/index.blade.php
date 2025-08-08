<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CarFeature Feature') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="mb-4 flex justify-between items-center">
    {{-- Left side toggle --}}
    <div>
    <span class="mr-5  text-gray-700 font-medium" >Enable Sorting</span>

        <label for="sortableToggle" class="inline-flex items-center cursor-pointer select-none">
        <label class="switch">
  <input type="checkbox" id="sortableToggle">
  <span class="slider">
   <svg class="slider-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation"><path fill="none" d="m4 16.5 8 8 16-16"></path></svg> 
  </span>
</label>
        </label>
    </div>

    {{-- Right side Add CarFeature button --}}
    <div>
        <button onclick="openAddModal()"
            class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
            + Add CarFeature
        </button>
    </div>
</div>


                    {{-- CarFeature Feature Table --}}
                    <div class="overflow-x-auto bg-white shadow-sm sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 border"  style="width:100%">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Car</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Icon</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-center" id="sortableBody">
                                @foreach($carFeatures as $index => $carFeature)
                                    <tr class="text-center" data-id="{{ $carFeature->id }}">
                                        <td class="px-6 py-2">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-2">{{ $carFeature->car->name }}</td>
                                        <td class="px-6 py-2">{{ $carFeature->title }}</td>
                                        <td class="px-6 py-2">{{ $carFeature->description }}</td>
                                        <td class="px-6 py-2">
                                        <i class="{{ $carFeature->icon }} text-2xl"></i>                                        </td>
                                        <td class="px-6 py-2">
                                        <div class="flex gap-2 justify-center">
                                        {{-- Edit Button --}}
                                        <button 
                                            type="button"
                                            onclick='openEditModal(@json($carFeature))'
                                            class="px-3 py-1 text-sm text-black bg-green-500 rounded hover:bg-green-600">
                                            Edit
                                        </button>
                                        {{-- Delete Button --}}
                                        <form action="{{route('carFeature.destroy',$carFeature->id)}}" 
                                            method="post" 
                                            class="inline-block ajax-delete-form"
                                            data-id="{{ $carFeature->id }}">
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="px-3 py-1 text-sm bg-red-500 rounded hover:bg-red-600 danger-btn" style="margin-left:5px">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                        </td>
                                    </tr>
                                @endforeach

                                @if($carFeatures->isEmpty())
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                            No records found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    @if ($carFeatures->hasPages())
                        <div class="mt-4 bg-white p-4 rounded shadow">
                            {{ $carFeatures->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div id="createCarFeatureModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center modal-bg-color" >
    <div class="bg-white rounded-lg shadow-lg w-3/5 p-6" style="width:700px;height:450px"> {{-- Medium size modal --}}
        <h3 id="modalTitle" class="text-lg font-bold mb-4">Add Car Feature</h3>
        <form id="createCarFeatureForm">
    @csrf
    <input type="hidden" name="id" id="feature_id">

    <div class="mb-4">
        <label for="car_id" class="block text-sm font-medium text-gray-700">Select Car</label>
        <select name="car_id" id="car_id" class="w-full border-gray-300 rounded mt-1">
            @foreach($cars as $car)
                <option value="{{ $car->id }}">{{ $car->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="icon" class="block text-sm font-medium text-gray-700">Icon (class or image path)</label>
        <input type="text" name="icon" id="icon" class="w-full border-gray-300 rounded mt-1">
    </div>

    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Feature Title</label>
        <input type="text" name="title" id="title" class="w-full border-gray-300 rounded mt-1">
    </div>

    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <input type="text" name="description" id="description" class="w-full border-gray-300 rounded mt-1">
    </div>

    <div class="flex justify-end">
        <button type="button" onclick="closeModal('createCarFeatureModal')" class="px-4 py-2 bg-gray-300 rounded mr-2 danger-btn">
            Cancel
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-500 rounded hover:bg-blue-600" style="margin-left:10px">
            Save
        </button>
    </div>
</form>

    </div>
</div>


        </form>
    </div>
</div> 

{{-- Include SortableJS CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
let sortableInstance = null;

function initSortable() {
    const tbody = document.getElementById('sortableBody');
    const currentPage = {{ $carFeatures->currentPage() }};
    const perPage = {{ $carFeatures->perPage() }};

    if (!tbody) return;

    sortableInstance = new Sortable(tbody, {
        animation: 150,
        onEnd: function () {
            const order = Array.from(tbody.querySelectorAll('tr')).map((row, index) => ({
                id: row.dataset.id,
                position: index + 1 + ((currentPage - 1) * perPage)
            }));

            fetch("{{ route('carFeature.sort') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ order, page: currentPage, perPage })
            })
            .then(res => {
                if (!res.ok) {
                    console.error('Error updating order');
                    showToast("Failed to update order", "error");
                } else {
                    showToast("Order updated successfully", "success");
                }
            })
            .catch(() => {
                showToast("Network error while updating order", "error");
            });
        }
    });
}

function destroySortable() {
    if (sortableInstance) {
        sortableInstance.destroy();
        sortableInstance = null;
    }
}

// Attach event to toggle checkbox
document.getElementById('sortableToggle').addEventListener('change', function() {
    if (this.checked) {
        initSortable();
    } else {
        destroySortable();
    }
});

// Optionally, start with sorting disabled
destroySortable();

</script>

 <script>
    const modal = document.getElementById('createCarFeatureModal');
    function openEditModal(carFeature) {
    const modal = document.getElementById('createCarFeatureModal');
    const form = modal.querySelector('form');

    // Set form values from the car object
    form.querySelector("input[name='id']").value = carFeature.id;
    form.querySelector("input[name='title']").value = carFeature.title;
    form.querySelector("input[name='description']").value = carFeature.description;
    form.querySelector("input[name='icon']").value = carFeature.icon;


    // Change modal title
    modal.querySelector("h3").innerText = "Edit Car Feature";

    openModal('createCarFeatureModal');
}
function openAddModal() {
    const modal = document.getElementById('createCarFeatureModal');
    const form = modal.querySelector('form');

    // Reset form completely
    form.reset();
    form.querySelector("input[name='id']").value = "";

    // Change modal title
    modal.querySelector("h3").innerText = "Add Car Feature";

    openModal('createCarFeatureModal');
}


function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
}


document.querySelector("#createCarFeatureForm").addEventListener("submit", function(e) {
    e.preventDefault();

    clearErrors();  // <-- add this here to clear old errors

    const formData = new FormData(this);
    const id = formData.get('id');

    let url = "{{ route('carFeature.store') }}";

    fetch(url, {
        method: "POST",
        headers: { 
      "X-CSRF-TOKEN": "{{ csrf_token() }}",
      "Accept": "application/json"
    },

        body: formData
    })
    .then(async res => {
        console.log(res);
            if (res.status === 422) {
                let data = await res.json();
                playSound("error");
                // Show each validation error message as a toast
                for (const [field, messages] of Object.entries(data.errors)) {
                    messages.forEach(msg => {
                        showToast(msg, "error");
                    });
                }
                throw new Error('Validation failed');
            }
            return res.json();
        })
        .then(data => {
            if (data.success) {
                showToast(data.message, "success");
                playSound("success");
                closeModal('createCarFeatureModal');
                refreshCurrentPage();
            } else {
                showToast("Error saving car", "error");
                playSound("error");
            }
        })
        .catch(err => {
            if (err.message !== 'Validation failed') {
                showToast("An unexpected error occurred.", "error");
                playSound("error");
            }
            console.error(err);
        });
    });

    function clearErrors() {
        document.querySelectorAll('.error-text').forEach(el => el.remove());
        document.querySelectorAll('input, textarea').forEach(el => {
            el.classList.remove('border-red-600');
        });
    }



</script> 

</x-app-layout>
