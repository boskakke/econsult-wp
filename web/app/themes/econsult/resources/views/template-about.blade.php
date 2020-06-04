{{--
  Template Name: Om e-consult
--}}

@extends('layouts.frontpage')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-about')
  @endwhile
@endsection
