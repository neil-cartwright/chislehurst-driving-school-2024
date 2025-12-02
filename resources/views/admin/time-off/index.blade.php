@extends('layouts.app')

@section('title', 'All lessons')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Weekly Records and time off</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div>

        </div>
    </x-wrapper>
@endsection
