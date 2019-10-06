@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.hero-illu', ['sectionClass' => 'mb-2'])
    @include('partials.content-page')
  @endwhile
@endsection
