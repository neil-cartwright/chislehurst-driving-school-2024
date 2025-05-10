<div {{ $attributes->merge(['class' => 'card']) }}>
    @if (isset($title))
        <div class="card-header">
            <div class="card-header-title">
                {{ $title }}
            </div>
            @if (isset($icon))
                <div class="card-header-icon">
                    {{ $icon }}
                </div>
            @endisset
    </div>
@endif
<div class="card-content overflow-x-scroll">
    {{ $content }}
</div>
@if (isset($footer))
    <div class="card-footer">
        {{ $footer }}
    </div>
@endif
</div>
