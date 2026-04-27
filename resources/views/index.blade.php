@extends('layouts.app')

@section('title', 'Enjoyable driving lessons in South East London')

@section('main')
    {{-- <nav class="breadcrumb has-bullet-separator mb-0" aria-label="breadcrumbs">
        <ul>
            <li>Driving lessons in Bromley, Bexley, Greenwich and Lewisham
            </li>
        </ul>
    </nav> --}}
    <x-hero></x-hero>
    <x-home.main></x-home.main>
@endsection
