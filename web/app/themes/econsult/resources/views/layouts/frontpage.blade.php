<!doctype html>
<html {!! get_language_attributes() !!} class="no-js">
  @include('partials.head')
  <body @php body_class('dark') @endphp>
    @php do_action('get_header') @endphp

    @yield('content')

		@include('partials.contact')
    @include('partials.footer')
    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp
  </body>
</html>
