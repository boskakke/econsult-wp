<!doctype html>
<html {!! get_language_attributes() !!} class="no-js">
@include('partials.head')
<body @php body_class() @endphp>
	@php do_action('get_header') @endphp

	@include('partials.header')


	<main class="main"  role="document">
		@yield('content')
	</main>
	@include('partials.contact')
	@include('partials.footer')
	@php do_action('get_footer') @endphp
	@php wp_footer() @endphp
</body>
</html>
