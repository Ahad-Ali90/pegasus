@props([
    'id' => 'dynamicModal',
    'heading' => 'Modal Heading',
    'url' => '#',
    'method' => 'POST',
    'fields' => [],
    'submitText' => 'Save'
])

<div id="{{ $id }}" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center modal-bg-color">
    <div class="modal-box w-full max-w-lg">
        <h3 id="{{ $id }}Heading" class="text-lg font-bold mb-4">{{ $heading }}</h3>

        <form id="{{ $id }}Form" action="{{ $url }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(in_array(strtoupper($method), ['PUT', 'PATCH', 'DELETE']))
                @method($method)
            @endif

            @foreach($fields as $field)
                <div class="mb-4">
                    @if(($field['type'] ?? 'text') !== 'hidden')
                        <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700">
                            {{ $field['label'] ?? ucfirst($field['name']) }}
                        </label>
                    @endif

                    @if($field['type'] === 'select')
                        <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full border-gray-300 rounded mt-1">
                            @foreach($field['options'] as $val => $label)
                                <option value="{{ $val }}">{{ $label }}</option>
                            @endforeach
                        </select>

                    @elseif($field['type'] === 'textarea')
                        <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full border-gray-300 rounded mt-1" rows="4">{{ $field['value'] ?? '' }}</textarea>

                    @elseif($field['type'] === 'radio')
                        @foreach($field['options'] as $val => $label)
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" name="{{ $field['name'] }}" value="{{ $val }}" class="border-gray-300">
                                <span class="ml-2">{{ $label }}</span>
                            </label>
                        @endforeach

                    @elseif($field['type'] === 'checkbox')
                        @foreach($field['options'] as $val => $label)
                            <label class="inline-flex items-center mr-4">
                                <input type="checkbox" name="{{ $field['name'] }}[]" value="{{ $val }}" class="border-gray-300">
                                <span class="ml-2">{{ $label }}</span>
                            </label>
                        @endforeach

                    @else
                        <input type="{{ $field['type'] ?? 'text' }}" 
                               name="{{ $field['name'] }}" 
                               id="{{ $field['name'] }}" 
                               value="{{ $field['value'] ?? '' }}"
                               class="w-full border-gray-300 rounded mt-1" 
                               {{ $field['required'] ?? false ? 'required' : '' }}>
                    @endif
                </div>
            @endforeach

            <div class="flex justify-end">
                <button type="button" onclick="closeModal('{{ $id }}')" class="px-4 py-2 bg-gray-300 rounded danger-btn mr-2">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600" style="margin-left:5px">
                    {{ $submitText }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }
    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>

<script>
    const modalId = 'skillModal';
    const modal = document.getElementById(modalId);
    const form = modal.querySelector('form');
    const heading = document.getElementById(modalId + 'Heading');

    function openAddModal() {
        form.reset();
        heading.innerText = heading;
        form.action = "{{ route('skills.store') }}";
        form.method = 'POST';

        // Remove any existing _method input (not needed since same store route)
        let methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) methodInput.remove();

        openModal(modalId);
    }

    function openEditModal(id, name) {
        form.reset();
        heading.innerText = 'Edit Skill';
        form.action = "{{ route('skills.store') }}";  // same store route
        form.method = 'POST';  // always POST

        // Remove any _method input since not needed
        let methodInput = form.querySelector('input[name="_method"]');
        if (methodInput) methodInput.remove();

        // Fill inputs
        form.querySelector('input[name="id"]').value = id;
        form.querySelector('input[name="name"]').value = name;

        openModal(modalId);
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            console.log(JSON.stringify())
            if (data.success) {
                showToast(data.message,'success');
                playSound('success');
                refreshCurrentPage();
                closeModal(modalId);
            } else {
                showToast('Error saving', 'error');
                playSound('error');
            }
        })
        .catch(() => {
            showToast('Error saving', 'error');
            playSound('error');
        });
    });
</script>