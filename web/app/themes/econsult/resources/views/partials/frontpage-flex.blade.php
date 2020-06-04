@if( have_rows('flex_elements') )
@while ( have_rows('flex_elements') )
@php
the_row()
@endphp
@if( get_row_layout() == 'section_bullets' )
<div class="container">
	<div class="section-bullets fadeUp">
		<div class="section-bullets__col section-bullets__col--left">
			@if( have_rows('repeater_bullets_left'))
			<ul class="list list-bullets list-bullets--left">
				@while ( have_rows('repeater_bullets_left') )
				@php
				the_row()
				@endphp
				<li class="list-bullets__item">
					<h3 class="list-bullets__header">
						{{ the_sub_field('txt_header') }}
					</h3>
					<p>{{ the_sub_field('txt_summary') }}</p>
				</li>
				@endwhile
			</ul>
			@endif
		</div>


		@php
		$image = get_sub_field('img_picture');
		$size = 'full;'
		@endphp

		<div class="section-bullets__illu">
			{!! wp_get_attachment_image( $image, $size, "") !!}
		</div>


		<div class="section-bullets__col">

			@if( have_rows('repeater_bullets_right') )

			<ul class="list list-bullets list-bullets--right">

				@while ( have_rows('repeater_bullets_right') )
				@php
				the_row()
				@endphp

				<li class="list-bullets__item">
					<h3 class="list-bullets__header">
						{{ the_sub_field('txt_header') }}
					</h3>
					<p>{{ the_sub_field('txt_summary') }}</p>
				</li>

				@endwhile

			</ul>

			@endif
		</div>
	</div>
</div>



@elseif( get_row_layout() == 'section_quote' )
@php
$image = get_sub_field('img_quote');
$size = 'full;'
@endphp

<div class="section-illu fadeUp mb-10 ">
	<div class="container flex">
		<div class="section-illu__col section-illu__col--left">
			<h3 class="section-illu__header">{{ the_sub_field('txt_quote') }}</h3>
		</div>
		<div class="section-illu__col section-illu__col--right">
			{!! wp_get_attachment_image( $image, $size, "") !!}
		</div>
	</div>
</div>

@endif

@endwhile

@else

// no layouts found

@endif
