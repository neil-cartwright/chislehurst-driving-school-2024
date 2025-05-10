@props(['img_url', 'type'])

@php
    $alt = str_replace(['-', '_', 'alt', '(2)'], ' ', pathinfo($img_url, PATHINFO_FILENAME));
@endphp

<figure class="image is-clickable" id="image">
    <flash-card type="{{ $type }}" alt="{{ $alt }}">
        <img src='{{ asset("/img/driving-images/$type/$img_url") }}' alt="{{ $alt }}"
            class="is-centered flashcard-image">
    </flash-card>
</figure>
