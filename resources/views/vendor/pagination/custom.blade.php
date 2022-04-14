<nav aria-label="Page navigation example">
    @if ($paginator->hasPages())
    <ul class="pagination">

        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link bg-dark" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true" class="text-light">&laquo;</span>
                <span class="sr-only text-light">Previous</span>
            </a>
        </li>
        @endif



        @foreach ($elements as $element)

        @if (is_string($element))
        <li class="disabled"><span>{{ $element }}</span></li>
        @endif



        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active"><a class="page-link text-light bg-dark" href="{{ $url }}">{{ $page }}</a>
        </li>
        @else
        <li class="page-item"><a class="page-link text-dark" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach



        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link bg-dark" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true" class="text-light">&raquo;</span>
                <span class="sr-only text-light">Next</span>
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
        @endif
    </ul>
    @endif
</nav>
