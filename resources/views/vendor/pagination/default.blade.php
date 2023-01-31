@if ($paginator->hasPages())
    <div class="ec-pro-pagination">
        <span>
            {!! __('Showing') !!}
            {{ $paginator->firstItem() }}
            {!! __('to') !!}
            {{ $paginator->lastItem() }}
            {!! __('of') !!}
            {{ $paginator->total() }}
            {!! __('results') !!}
        </span>
        <ul class="ec-pro-pagination-inner">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="active" href="#">{{$page}}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a class="next" href="{{ $paginator->nextPageUrl() }}">Next<i class="ecicon eci-angle-right"></i></a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')"><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
