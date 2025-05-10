@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-block px-6 py-3 font-semibold rounded']) }}>
    {{ $slot }} </a>
