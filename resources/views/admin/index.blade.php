@extends('layouts.app')

@section('title', 'Admin')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li class="is-active"><a>Admin</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <div class="columns is-centered">
            <div class="column">

                @if (session()->has('message'))
                    <div class="notification is-warning has-text-centered">
                        {{ Session::get('message') }}
                    </div>
                @endif

                @include('admin.menu')
            </div>
        </div>
    </x-wrapper>
@endsection
