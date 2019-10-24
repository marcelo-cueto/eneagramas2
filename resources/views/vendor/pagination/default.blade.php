@if ($paginator->hasPages())
    <div class="ui right floated pagination menu">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a class="icon item disabled">
          <i class="left chevron icon"></i>
        </a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="icon item">
          <i class="left chevron icon"></i>
        </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="item disabled"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item active"><span>{{ $page }}</span></a>
                    @else
                        <a class="item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"  class="icon item">
          <i class="right chevron icon"></i>
        </a>
        @else
        <a class="icon item disabled">
          <i class="right chevron icon"></i>
        </a>

        @endif
    </div>
@endif
