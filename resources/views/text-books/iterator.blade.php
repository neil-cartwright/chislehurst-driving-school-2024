@extends('laravel-bulma-starter::layouts/bulma')

@section('content')

  @foreach($files as $file)
    <p><a href="/text-books/{{ basename($file, '.pdf') }}">{{ $file }}</a></p>
  @endforeach

@endsection
