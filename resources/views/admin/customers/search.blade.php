@extends('layouts.app')

@section('title', 'Search for a customer')


@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li class="is-active"><a>Search customers</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns :col2="6">
            <customer-search />
        </x-admin.columns>
    </x-wrapper>
@endsection
