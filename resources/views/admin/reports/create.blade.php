@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Add lesson report')

@section('main')

    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="is-active"><a>Create report for {{ $lesson->customer->name }}</a></li>
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
                    Lesson report for {{ $lesson->customer->name }}
                </x-slot:title>
                <x-slot:icon>{{ $carbon->parse($lesson->lesson_date)->format('l jS M Y') }}</x-slot:icon>
                <x-slot:content>
                    <div class="notification">
                        Notes:
                        <p>{{ $lesson->lesson_notes }}</p>
                    </div>

                    <form action="/admin/report/store/{{ $lesson->id }}" method="POST">

                        @csrf

                        <input class="input" type="hidden" value="{{ $lesson->id }}" name="lesson_id">
                        <input class="input" type="hidden" value="{{ $lesson->customer->id }}" name="customer_id">

                        <div class="field">
                            <div class="control">
                                <label class="label">Areas</label>
                                <input class="input" placeholder="Sidcup..." name="areas"></input>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">Conditions</label>
                                <textarea class="textarea" placeholder="Busy, rain..." name="conditions"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">What happened</label>
                                <textarea class="textarea" placeholder="What happened" name="what_happened"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="label">What's next</label>
                                <textarea class="textarea" placeholder="Worked on ..." name="whats_next"></textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="control">
                            <button class="button" type="submit">Submit report</button>
                        </div>
                    </form>
                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
