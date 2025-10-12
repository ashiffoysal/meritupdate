@if ($paginator->hasPages())

        <ul class="">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li>
                <a  class="blogs_page_count_prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class='fas fa-arrow-left'></i>
                </a>
            </li>
            @else
              <li>
                    <a  href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers"  rel="prev" aria-label="@lang('pagination.previous')">
                        <i class='fas fa-arrow-left'></i>
                    </a>
                </li>
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                 <li>
                <a  class="prev page-numbers disabled" aria-disabled="true" >
                    {{ $element }}
                </a>
            </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                            <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                            </li>
                        @else
                         <li>
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                         </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
              <li>
                    <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class='fas fa-arrow-right'></i></a>
              </li>
            @else
                <li>
                <a class="next page-numbers" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <i class='fas fa-arrow-right'></i>
                </a>
            </li>
            @endif
@endif

       <!-- <div class="pagination-area">
                <a href="#" class="prev page-numbers">
                    <i class='bx bx-chevron-left'></i>
                </a>

                <a href="#" class="page-numbers">1</a>

                <span class="page-numbers current" aria-current="page">2</span>

                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="next page-numbers">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </div> -->