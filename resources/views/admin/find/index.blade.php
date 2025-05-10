@extends('layouts.app')

@section('title', 'Find lessons')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li class="is-active"><a>Find lessons</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <!-- columns -->
        <x-admin.columns>
            <find-lessons></find-lessons>
        </x-admin.columns>
    </x-wrapper>
@endsection
