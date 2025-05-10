@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Notes')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="is-active"><a>Notes</a></li>
            <li><a href="/admin/customer/{{ $customer->id }}">{{ $customer->name }}</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>
            <search-notes :lessons="{{ $customer->lessons->reverse()->values() }}"></search-notes>
        </x-admin.columns>
    </x-wrapper>
@endsection
