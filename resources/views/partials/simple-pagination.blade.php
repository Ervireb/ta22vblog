@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-6">
        <div class="join">
            @if ($paginator->onFirstPage())
                <span class="btn join-item" disabled>◅</span>
            @else
                <a class="btn join-item" href="{{ $paginator->previousPageUrl() }}" rel="prev">◅</a>
            @endif
            
            <span class="btn join-item">Page {{ $paginator->currentPage() }}</span>

            @if ($paginator->hasMorePages())
                <a class="btn join-item" href="{{ $paginator->nextPageUrl() }}" rel="next">▻</a>
            @else
                <span class="btn join-item" disabled>▻</span>
            @endif
        </div>

<!-- <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav> -->
    </nav>
@endif