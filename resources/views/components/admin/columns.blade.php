@props(['col1' => 3, 'col2' => 9])
<div class="columns mb-4" {{ $attributes }}>
    <div class="column is-{{ $col1 }} admin-col-1">
        @include('admin.menu')
    </div>
    <div class="column is-{{ $col2 }} admin-col-2">
        {{ $slot }}
    </div>
</div>
