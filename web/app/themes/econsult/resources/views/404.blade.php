@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Undskyld. Vi kunne ikke finde den side, du leder efter...', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
