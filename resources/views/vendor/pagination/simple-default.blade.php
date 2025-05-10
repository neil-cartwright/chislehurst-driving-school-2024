@if ($paginator->hasPages())
    <nav class="menu">
        <ul class="pagination menu-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><button class="button is-small"
                        disabled>@lang('pagination.previous')</button>
                </li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="button is-small">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="button is-small">@lang('pagination.next')</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true"><button class="button is-small"
                        disabled>@lang('pagination.next')</button></li>
            @endif
        </ul>
    </nav>
@endif
