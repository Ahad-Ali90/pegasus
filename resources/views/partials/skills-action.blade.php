@props(['id', 'row', 'deleteRoute'])

<div class="flex gap-2 justify-center">
    <button type="button"
        onclick="openEditModal({{ $id }}, '{{ $row->name}}')"
        class="px-3 py-1 text-sm text-black bg-green-500 rounded hover:bg-green-600">
        Edit
    </button>
    <form action="{{ $deleteRoute }}" 
          method="post" 
          class="inline-block ajax-delete-form"
          data-id="{{ $id }}">
        @csrf
        @method('DELETE') 
        <button type="submit" class="px-3 py-1 text-sm bg-red-500 rounded hover:bg-red-600 danger-btn" style="margin-left:5px">
            Delete
        </button>
    </form>
</div>
