@extends('layouts.app')

@section('page-description', 'Page detailing different driving lesson subjects')

@section('title', 'Driving lessons')

@section('main')

    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="is-active">
                <a>Driving lessons</a>
            </li>
        </ul>
    </nav>

    <x-wrapper>

        <div class="message is-light">
            <div class="message-header">
                Driving lesson framework
            </div>
            <div class="message-body">
                <p>Here are some of the common subjects you'll cover during your lessons.</p>

            </div>
        </div>

        <modules-component></modules-component>

    </x-wrapper>
@endsection
