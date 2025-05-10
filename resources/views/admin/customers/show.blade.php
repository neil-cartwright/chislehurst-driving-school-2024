@inject('carbon', 'Carbon\Carbon')
@php
    $balance =
        $customer->lessons->sum('amountPaymentTaken') +
        $customer->lessons->sum('discountGiven') -
        $customer->lessons->sum('lesson_charge');
@endphp

@extends('layouts.app')

@section('title', 'Customer')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li><a href="/admin/customers">Customers</a></li>
            <li class="active"><a>{{ $customer->name }}</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-admin.columns>

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <div class="level">
                <a class="button is-text level-item" href="/admin/homework/create/{{ $customer->id }}">Send homework</a>
                <a href="/admin/notes/{{ $customer->id }}" class="level-item button is-text">View all notes</a>
                <a href="/admin/lesson/create?id={{ $customer->id }}" class="level-item button is-text">Save
                    lesson</a>
                <add-test-date :customer="{{ $customer }}"></add-test-date>
            </div>

            <hr>

            <x-card>
                <x-slot:title> {{ $customer->name }} &nbsp;<a href="mailto:  {{ $customer->email }}"
                        class="has-text-weight-light is-hidden-mobile"> | {{ $customer->email }}</a></x-slot:title>
                <x-slot:icon>
                    Balance:
                    <span class="has-text-weight-bold ml-1"> £{{ $balance }}
                    </span></x-slot:icon>
                <x-slot:content>

                    @unless ($customer->lessons->isEmpty())
                        <table class="is-striped is-fullwidth has-text-centered table">
                            <thead class="has-text-centered has-text-weight-semibold">
                                <tr>
                                    <td>Date</td>
                                    <td>Duration</td>
                                    <td>Lesson Charge</td>
                                    <td>Payment Taken</td>
                                    <td>Discounts</td>
                                    <td>Cancelled</td>
                                    <td>Notes</td>
                                    <td>Report</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="has-background-warning has-text-weight-bold">
                                    <td>Started:
                                        {{ $carbon::parse($customer->lessons->first()->lesson_date)->format('jS F Y') }}
                                    </td>
                                    <td>
                                        {{ toHoursMins($customer->lessons->sum('lesson_duration')) }}
                                    </td>
                                    <td>£{{ $customer->lessons->sum('lesson_charge') - $customer->lessons->sum('discountGiven') }}
                                    </td>
                                    <td>
                                        £{{ $customer->lessons->sum('amountPaymentTaken') }}
                                    </td>
                                    <td>£{{ $customer->lessons->sum('discountGiven') }}</td>
                                    <td>{{ $customer->lessons->sum('lesson_cancelled') }}</td>
                                    <td colspan="2"></td>

                                </tr>
                                @foreach ($customer->lessons->reverse() as $lesson)
                                    <tr>
                                        <td>
                                            {{ $carbon::parse($lesson->lesson_date)->format('l jS M Y') }}
                                        </td>
                                        <td>{{ toHoursMins($lesson->lesson_duration) }}</td>
                                        <td>£{{ $lesson->lesson_charge }}</td>
                                        <td>
                                            @if ($lesson->amountPaymentTaken)
                                                £{{ $lesson->amountPaymentTaken }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($lesson->discountGiven)
                                                £{{ $lesson->discountGiven }}
                                            @endif
                                        </td>
                                        <td>{{ $lesson->lesson_cancelled }}</td>
                                        <td>
                                            @if ($lesson->lesson_notes != '')
                                                <notes-modal note="{{ $lesson->lesson_notes }}"
                                                    date="{{ $carbon::parse($lesson->lesson_date)->format('l jS M Y') }}" />
                                            @endif
                                        </td>
                                        <td>
                                            @if ($lesson->report)
                                                <a class="button is-small"
                                                    href="/admin/report/show/{{ $lesson->report->id }}">View</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    @else
                        <div class="notification">No lessons recorded</div>
                    @endunless

                </x-slot:content>
                <x-slot:footer>
                    <div class="card-footer-item overflow-x-scroll">
                        <archive-customer :customer="{{ $customer }}"></archive-customer>
                    </div>

                    @if ($customer->test_details)
                        <div class="card-footer-item is-hidden-mobile">
                            <span class="tag">Test:
                                {{ $customer->test_date_readable }}, {{ $customer->test_center }},
                                {{ $customer->test_time }}, {{ floor($carbon->diffInWeeks($customer->test_date)) }}
                                weeks to go
                            </span>
                        </div>
                    @else
                        <div class="card-footer-item">
                            <span class="tag">No test booked yet</span>
                        </div>
                    @endif
                </x-slot:footer>
            </x-card>

        </x-admin.columns>
    </x-wrapper>
@endsection
