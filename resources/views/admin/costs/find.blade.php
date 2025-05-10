@extends('layouts.app')

@section('title', 'Find costs')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li><a href="/admin/costs">All costs</a></li>
            <li class="active"><a>Find costs</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>
            <find-costs :months="{{ json_encode($months) }}" :categories="{{ json_encode($categories) }}" />
        </x-admin.columns>
    </x-wrapper>
@endsection
