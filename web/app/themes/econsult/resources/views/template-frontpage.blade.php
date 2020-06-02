{{--
  Template Name: Forside
--}}

@extends('layouts.frontpage')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-frontpage')
  @endwhile
@endsection
