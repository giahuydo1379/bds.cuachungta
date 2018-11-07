{{--<div class="pagination">--}}
    {{--<a href="#" class="prev"></a>--}}
    {{--<span class="current">1</span>--}}
    {{--<a href="#" class="page">2</a>--}}
    {{--<a href="#" class="page">3</a>--}}
    {{--<a href="#" class="page">4</a>--}}
    {{--<a href="#" class="page">5</a>--}}
    {{--<a href="#" class="next"></a>--}}
{{--</div>--}}


@if ($paginator->hasPages())
    <div class="col-xs-12" xmlns="http://www.w3.org/1999/html">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())

                    <a class="prev" href="#" aria-label="Previous">

                    </a>

            @else
               <a href="{{ $paginator->previousPageUrl() }}" class="prev"</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <a href="#"   class="page">{{ $element }} </a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())

                        <span  class="curent"> {{ $page }}</span>

                        @else

                                <a href="{{ $url }}" class="page">{{ $page }}</a>

                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
               <a href="{{ $paginator->nextPageUrl() }}" class="next" rel="next">&raquo;</a>
            @else

                    <a class="next" href="#" aria-label="Next">

                    </a>

            @endif

    </div>
@endif