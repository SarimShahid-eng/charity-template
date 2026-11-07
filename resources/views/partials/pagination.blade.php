@if ($paginator->hasPages())
<ul class="d-flex align-items-center justify-content-center style-none">
	@for ($i = 1; $i <= $paginator->lastPage(); $i++)
	<li><a href="{{ $paginator->url($i) }}" class="{{ $i === $paginator->currentPage() ? 'active' : '' }}">{{ $i }}</a></li>
	@endfor
	@if ($paginator->hasMorePages())
	<li><a href="{{ $paginator->nextPageUrl() }}"><i class="bi bi-arrow-right"></i></a></li>
	@endif
</ul>
@endif
