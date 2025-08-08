<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars') }}
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

    {{-- Right side Add Car button --}}
    <div>
        <button onclick="openAddModal()"
            class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
            + Add Car
        </button>
    </div>
</div>


                    {{-- Cars Table --}}
                    <div class="overflow-x-auto bg-white shadow-sm sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 border"  style="width:100%">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Price On Way</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Price BY Hour</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Slug</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-center" id="sortableBody">
                                @foreach($cars as $index => $car)
                                    <tr class="text-center" data-id="{{ $car->id }}">
                                        <td class="px-6 py-2">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-2">{{ $car->name }}</td>
                                        <td class="px-6 py-2">{{ $car->price }}</td>
                                        <td class="px-6 py-2">{{ $car->price_per_hour }}</td>
                                        <td class="px-6 py-2">{{ $car->slug }}</td>
                                        <td class="px-6 py-2">
                                        <img src="{{ asset('storage/'.$car->main_image) }}" alt="Car Image" class="w-40 h-20 object-cover align-middle">
                                        </td>
                                        <td class="px-6 py-2">
                                        <div class="flex gap-2 justify-center">
                                        {{-- Edit Button --}}
                                        <button 
                                            type="button"
                                            onclick='openEditModal(@json($car))'
                                            class="px-3 py-1 text-sm text-black bg-green-500 rounded hover:bg-green-600">
                                            Edit
                                        </button>
                                        {{-- Delete Button --}}
                                        <form action="{{route('car.destroy',$car->id)}}" 
                                            method="post" 
                                            class="inline-block ajax-delete-form"
                                            data-id="{{ $car->id }}">
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

                                @if($cars->isEmpty())
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                            No records found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    @if ($cars->hasPages())
                        <div class="mt-4 bg-white p-4 rounded shadow">
                            {{ $cars->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div id="createCarModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center modal-bg-color" >
    <div class="bg-white rounded-lg shadow-lg w-3/5 p-6" style="width:700px;height:620px"> {{-- Medium size modal --}}
        <h3 id="modalTitle" class="text-lg font-bold mb-4">Add Car</h3>
        <form id="createCarForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="car_id">

            {{-- Name & Slug in same row --}}
            {{-- 4 Fields, 2 per row --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Car Name</label>
        <input type="text" name="name" id="name" class="w-full border-gray-300 rounded mt-1">
    </div>
    <div>
        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
        <input type="text" name="slug" id="slug" class="w-full border-gray-300 rounded mt-1">
    </div>
    <div>
        <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
        <input type="text" name="model" id="model" class="w-full border-gray-300 rounded mt-1">
    </div>
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price per KM</label>
        <input type="number" name="price" id="price" class="w-full border-gray-300 rounded mt-1">
    </div>
    <div>
        <label for="price_per_hour" class="block text-sm font-medium text-gray-700">Price per Hour</label>
        <input type="number" name="price_per_hour" id="price_per_hour" class="w-full border-gray-300 rounded mt-1">
    </div>
</div>


            {{-- Long Description --}}
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Short Description</label>
                <textarea name="short_description" id="short_description" rows="4" class="w-full border-gray-300 rounded mt-1" ></textarea>
            </div>

            {{-- Image --}}
            <div class="mb-4">
                <label for="main_image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="main_image" id="main_image" class="w-full border-gray-300 rounded mt-1">
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end">
                <button type="button" onclick="closeModal('createCarModal')" class="px-4 py-2 bg-gray-300 rounded mr-2 danger-btn">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-500  rounded hover:bg-blue-600" style="margin-left:10px">
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
    const currentPage = {{ $cars->currentPage() }};
    const perPage = {{ $cars->perPage() }};

    if (!tbody) return;

    sortableInstance = new Sortable(tbody, {
        animation: 150,
        onEnd: function () {
            const order = Array.from(tbody.querySelectorAll('tr')).map((row, index) => ({
                id: row.dataset.id,
                position: index + 1 + ((currentPage - 1) * perPage)
            }));

            fetch("{{ route('car.sort') }}", {
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
    const modal = document.getElementById('createCarModal');
    function openEditModal(car) {
    const modal = document.getElementById('createCarModal');
    const form = modal.querySelector('form');

    // Set form values from the car object
    form.querySelector("input[name='id']").value = car.id;
    form.querySelector("input[name='name']").value = car.name;
    form.querySelector("input[name='slug']").value = car.slug;
    form.querySelector("input[name='model']").value = car.model;
    form.querySelector("input[name='price']").value = car.price;
    form.querySelector("input[name='price_per_hour']").value = car.price_per_hour;
    form.querySelector("textarea[name='short_description']").value = car.short_description ?? "";

    // Image field is file input — cannot prefill due to browser restrictions
    form.querySelector("input[name='main_image']").value = "";

    // Change modal title
    modal.querySelector("h3").innerText = "Edit Car";

    openModal('createCarModal');
}
function openAddModal() {
    const modal = document.getElementById('createCarModal');
    const form = modal.querySelector('form');

    // Reset form completely
    form.reset();
    form.querySelector("input[name='id']").value = "";

    // Change modal title
    modal.querySelector("h3").innerText = "Add Car";

    openModal('createCarModal');
}


function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
}
function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
}


document.querySelector("#createCarForm").addEventListener("submit", function(e) {
    e.preventDefault();

    clearErrors();  // <-- add this here to clear old errors

    const formData = new FormData(this);
    const id = formData.get('id');

    let url = "{{ route('car.store') }}";

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
                closeModal('createCarModal');
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
