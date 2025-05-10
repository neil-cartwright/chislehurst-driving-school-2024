@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'has-text-black-ter has-text-weight-bold']) }}>
        {{ $status }}
    </div>
@endif
