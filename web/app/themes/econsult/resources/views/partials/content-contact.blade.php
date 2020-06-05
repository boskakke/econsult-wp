@php
	$email = get_field( 'email' );
	$phone = get_field( 'phone' );
	$address = get_field( 'address' );
@endphp
<main class="main">
	@include('partials.header')
	@include('partials.hero')
	<div class="container">
	<div class="page-contact">
		<div class="grid__item">
			<div class="page-content">
				<h1 class="page-title">
					@php
						the_title();
					@endphp

				</h1>
				@php
					$page_summary = get_field( 'page_summary' );
				@endphp


				@if ($page_summary)
				<div class="page-summary">
					{!! $page_summary !!}
				</div>
				@endif


				@php the_content() @endphp

				<div class="section-contact">
					@if ($address)
					<div class="section-contact__item">
						<div class="section-contact__icon">
						<svg class="section-contact__svg" viewBox="0 0 28 40"	xmlns="http://www.w3.org/2000/svg"><use xlink:href="@asset('images/sprite.svg')#location"></use></svg>
					</div>
					<div class="section-contact__body">
						{!! $address !!}
					</div>
					</div>
					@endif

					@if ($email)
					<div class="section-contact__item">
						<div class="section-contact__icon">
						<svg class="section-contact__svg" viewBox="0 0 43 32"	xmlns="http://www.w3.org/2000/svg"><use xlink:href="@asset('images/sprite.svg')#mail"></use></svg>
					</div>
					<div class="section-contact__body">
						<a href="mailto:{!! $email !!}">{!! $email !!}</a>
					</div>
				</div>
					@endif

					@if ($phone)
					<div class="section-contact__item">
						<div class="section-contact__icon">
						<svg class="section-contact__svg" viewBox="0 0 43 32"	xmlns="http://www.w3.org/2000/svg"><use xlink:href="@asset('images/sprite.svg')#phone"></use></svg>
					</div>
					<div class="section-contact__body">
						{!! $phone !!}
					</div>
				</div>
					@endif
				</div>
			</div>
		</div>

	</div>
</div>

@include('partials.contact-staff')

</main>
