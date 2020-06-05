{{--
  Template Name: Kontakt
--}}

@extends('layouts.frontpage')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-contact')
  @endwhile
@endsection
