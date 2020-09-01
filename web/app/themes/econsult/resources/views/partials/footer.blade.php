
<footer class="section--footer">

		<div class="footer">
			<div class="footer__col">
				<div class="footer__content">
					@php dynamic_sidebar('sidebar-footer-1') @endphp
				</div>
			</div>
			<div class="footer__col">
				<div class="footer__content">
					@php dynamic_sidebar('sidebar-footer-2') @endphp
				</div>
			</div>
			<div class="footer__col">
				<div class="footer__content">
					@php dynamic_sidebar('sidebar-footer-3') @endphp
				</div>
			</div>
			<div class="footer__col">
				<div class="footer__content">
					@php dynamic_sidebar('sidebar-footer-4') @endphp
				</div>
			</div>


			<div class="footer__wide">
				<p>{!! the_field( 'footer_content', 'options' ) !!}</p>
			</div>
		</div>
</footer>
