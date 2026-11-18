@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Progress report')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active"><a>Progress report</a></li>
            <li><a>{{ $customer->name }}</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-admin.columns>
            <h1 class="title is-size-6">Progress report</h1>
            <div class="mb-4 is-size-7">
                <p><strong>Introduced</strong> - task has been introduced</p>
                <p><strong>Helped</strong> - plenty of instruction required to complete task</p>
                <p><strong>Prompted</strong> - gentle reminders needed to complete task</p>
                <p><strong>Independent</strong> - driving instruction not needed at all</p>
            </div>


            <progress-report customer="{{ $customer->id }}"></progress-report>
        </x-admin.columns>
    </x-wrapper>

@endsection
