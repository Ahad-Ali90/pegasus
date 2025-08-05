@props([
    'columns' => [],
    'data' => [],
    'sortable' => false,
    'deleteRoute' => null,  {{-- callback: fn($id) => route('skills.destroy', $id) --}}
    'actionView' => null,   {{-- path to custom action buttons partial --}}
    'sortRoute' => null,
])

@php
    $start = 0;
    if (method_exists($data, 'currentPage') && method_exists($data, 'perPage')) {
        $start = ($data->currentPage() - 1) * $data->perPage();
    }
@endphp

<div class="overflow-x-auto bg-white shadow-sm sm:rounded-lg">
    <table id="sortableTable" class="min-w-full divide-y divide-gray-200 border" style="width:100%">
        <thead class="bg-gray-50">
            <tr>
                @foreach($columns as $column)
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase">
                        {{ $column['label'] }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-center"
            @if(collect($columns)->where('sortable', true)->isNotEmpty())
                id="sortableBody"
            @endif>
            @forelse ($data as $row)
                <tr id="row-{{ $row->id }}" data-id="{{ $row->id }}" class="text-center cursor-move">
                    @foreach($columns as $column)
                        <td class="px-6 py-2">
                         @if($column['field'] === 'actions')
                                @if($actionView)
                                    {{-- Use custom action view --}}
                                    @include($actionView, [
                                        'id' => $row->id,
                                        'name' => $row,
                                        'deleteRoute' => $deleteRoute ? $deleteRoute($row->id) : '#',
                                    ])
                                @else
                                    {{-- Default action buttons --}}
                                    @include('partials.action-buttons', [
                                        'id' => $row->id,
                                        'name' => $row,
                                        'deleteRoute' => $deleteRoute ? $deleteRoute($row->id) : '#',
                                    ])
                                @endif
                            @elseif($column['field'] === 'index')
                                {{ $start + $loop->parent->iteration }}
                            @else
                                {{ data_get($row, $column['field']) }}
                            @endif

                        </td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) }}" class="px-6 py-4 text-center text-gray-500">
                        No records found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
 @if ($data->hasPages())
    <!-- Pagination Links -->
    <div class="mt-4 bg-white p-4 rounded shadow">
        {{ $data->links() }}
    </div>
@endif

@if(collect($columns)->where('sortable', true)->isNotEmpty())
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
    const currentPage = {{ $data->currentPage() }};
    const perPage = {{ $data->perPage() }};
    document.addEventListener("DOMContentLoaded", function () {
        new Sortable(document.getElementById('sortableBody'), {
            animation: 150,
            onEnd: function () {
                const order = Array.from(document.querySelectorAll('#sortableBody tr'))
                    .map((row, index) => ({
                        id: row.dataset.id,
                        position: index + 1 + ((currentPage - 1) * perPage)
                    }));
                fetch("{{ route($sortRoute)}}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ order, page: currentPage, perPage: 10 })
                });
            }
        });
    });
    </script>
@endif
