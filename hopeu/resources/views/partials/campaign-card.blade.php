<div class="card-style-two {{ $extra ?? '' }}">
	<div class="media-bg" style="background-image: url({{ $campaign->image_url }});"></div>
	<div class="info-meta position-relative z-1">
		<div class="tags">{{ $campaign->category }}</div>
		<h4><a href="{{ route('contact') }}" class="line-bg">{{ $campaign->title }}</a></h4>
		<p class="fs-16">{{ $campaign->excerpt }}</p>
		<div class="fs-16 fund-goal"><span>${{ number_format($campaign->raised) }}</span> raised of {{ number_format($campaign->goal) }} goal</div>
		<div class="progress-bar position-relative">
			<div class="progress position-relative" style="width: {{ $campaign->percent }}%;">
				<span>{{ $campaign->percent }}%</span>
			</div>
		</div>
		<div class="supporters fs-16">Our active {{ number_format($campaign->supporters) }} supporters </div>
		<img src="{{ asset('images/shape/shape_07.png') }}" alt="shape" class="shapes shape_01">
	</div>
</div>
