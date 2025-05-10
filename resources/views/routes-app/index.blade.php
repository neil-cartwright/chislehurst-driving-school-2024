@extends('layouts.app')

@section('title', 'Routes App')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @auth
            <li class="is-active"><a href="user/lessons">{{ auth()->user()->name }}</a></li>@endauth
        </ul>
    </nav>
    <x-wrapper>

        <x-user.columns>
            <h1 class="has-text-weight-bold">Test routes app</h1>
            <section class="section px-0">
                <sidcup-roundabouts-tabs></sidcup-roundabouts-tabs>
            </section>
        </x-user.columns>
    </x-wrapper>
@endsection
