@props(['value'])

<label {{ $attributes->merge(['class' => 'input']) }}>
    {{ $value ?? $slot }}
</label>
