@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Progress report')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active"><a>Progress report</a></li>
            <li><a></a></li>
        </ul>
    </nav>

    <x-wrapper>

        <x-admin.columns>
        </x-admin.columns>
    </x-wrapper>

@endsection
