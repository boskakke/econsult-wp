
<div class="section--gray section--padding">
	<div class="container">
		<div class="row pt-5 pb-5">
			<div class="col-12 col-xl-10 ml-auto mr-auto">

				<div class="contact">
					<div class="contact__col flex-center">
						<div class="contact__content text-center mb-4">
							{{ the_field('txt_contact','options') }}
						</div>
					</div>

					<div class="contact__col">
						<div class="contact__content">
							@php
								$form = get_field('form', 'options')
							@endphp
							@php
								echo do_shortcode( $form ); 
							@endphp
						</div>
					</div>
				</div>
				
				
			</div>

		</div>
	</div>	
</div>