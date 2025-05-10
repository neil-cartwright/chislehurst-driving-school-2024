@props(['col1' => 3, 'col2' => 9])
<div class="columns mb-4">
    <div class="column is-{{ $col1 }} user-col-1">
        @include('user.menu')
    </div>
    <div class="column is-{{ $col2 }} user-col-2">
        {{ $slot }}
    </div>
</div>
