@extends('layouts.app')

@section('title', 'All lessons')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li><a>Summaries</a></li>
            <li><a href="/admin/lessons/summary/2024">2024</a></li>
            <li><a href="/admin/lessons/summary/2025">2025</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div>
            <summary-component year="{{ $year }}"> </summary-component>
        </div>
    </x-wrapper>
@endsection
