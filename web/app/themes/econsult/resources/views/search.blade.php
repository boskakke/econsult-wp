@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Vi fandt desværre ikke nogen resultater.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
