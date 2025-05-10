@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Show lesson report')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="is-active"><a>Show report</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <x-card>
                <x-slot:title>
                    Report for&nbsp;<a
                        href="/admin/customer/{{ $report->lesson->customer_id }}">{{ $report->lesson->customer->name }}</a>&nbsp;-
                    {{ $carbon::parse($report->lesson->lesson_date)->format('l jS M Y') }}
                </x-slot:title>
                <x-slot:content>
                    <div class="notification">
                        Notes:
                        <p>{{ $report->lesson->lesson_notes }}</p>
                    </div>

                    <form action="/admin/report/update/{{ $report->id }}" method="POST">

                        @csrf

                        <input class="input" type="hidden" value="{{ $report->lesson->id }}" name="lesson_id">
                        <input class="input" type="hidden" value="{{ $report->lesson->customer->id }}" name="customer_id">

                        <div class="field">
                            <div class="control">
                                <label class="label">Areas</label>
                                <input class="input" name="areas" value="{{ $report->areas }}">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">Conditions</label>
                                <textarea class="textarea" name="conditions">{{ $report->conditions }}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">What happened</label>
                                <textarea class="textarea" name="what_happened"> {{ $report->what_happened }}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">What's next</label>
                                <textarea class="textarea" name="whats_next">{{ $report->whats_next }}</textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="control">
                            <button class="button" type="submit">Update report</button>
                        </div>
                    </form>
                </x-slot:content>
            </x-card>

        </x-admin.columns>
    </x-wrapper>
@endsection
