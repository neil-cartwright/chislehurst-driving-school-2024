@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Lessons')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active"><a>Lessons</a></li>
            <li><a>{{ $customer->first()->name }}</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-user.columns :col2="8">
            @unless ($lessons->isEmpty())
                @if ($customer->first()->test_details)
                    <div class="is-flex is-justify-content-start overflow-x-scroll mb-4">
                        <div class="tag is-medium">
                            <a target="_blank" href="https://www.gov.uk/check-driving-test">
                                Driving Test:
                                {{ $customer->first()->test_date_readable }}, {{ $customer->first()->test_time }}, at
                                {{ $customer->first()->test_center }}&nbsp;

                                <span class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </span>
                            </a>
                            <span class="ml-4">In about
                                {{ floor($carbon->diffInWeeks($customer->first()->test_date)) }}
                                weeks
                            </span>
                        </div>
                    </div>
                @endif
                <x-card>
                    <x-slot:title>{{ $customer->first()->name }}</x-slot:title>
                    <x-slot:icon>Balance:&nbsp;<span
                            class="has-text-weight-bold">£{{ $customer->first()->lessons->sum('amountPaymentTaken') + $customer->first()->lessons->sum('discountGiven') - $customer->first()->lessons->sum('lesson_charge') }}</span></x-slot:icon>
                    <x-slot:content>
                        <table class="is-fullwidth has-text-centered table">
                            <thead>
                                <tr>
                                    <td>Date of lesson</td>
                                    <td>Duration</td>
                                    <td>Rate</td>
                                    <td>Charge</td>
                                    <td>Discounts</td>
                                    <td>Payment</td>
                                    <td>Notes</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="has-background-warning has-text-weight-bold">
                                    <td>Totals: {{ count($customer->first()->lessons) }} Lessons</td>
                                    <td> {{ toHoursMins($customer->first()->lessons->sum('lesson_duration')) }}</td>
                                    <td></td>
                                    <td>£{{ $customer->first()->lessons->sum('lesson_charge') }}</td>
                                    <td></td>
                                    <td> £{{ $customer->first()->lessons->sum('amountPaymentTaken') }}</td>
                                    <td></td>
                                </tr>
                                @foreach ($lessons as $lesson)
                                    <tr>
                                        <td>
                                            {{ $carbon::parse($lesson->lesson_date)->format('l jS M Y') }}
                                        </td>
                                        <td>
                                            {{ $lesson->lesson_duration }}
                                        </td>
                                        <td>
                                            @if ($lesson->lesson_cancelled > 0)
                                                <span class="has-text-danger">Cancelled</span>
                                            @else
                                                {{ $lesson->lesson_rate }}
                                            @endif
                                        </td>
                                        <td>£{{ $lesson->lesson_charge }}</td>
                                        <td>
                                            @if ($lesson->discountGiven != null)
                                                £{{ $lesson->discountGiven }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($lesson->amountPaymentTaken != '')
                                                £{{ $lesson->amountPaymentTaken }}
                                            @endif

                                        </td>
                                        <td>
                                            @if ($lesson->lesson_notes != '')
                                                <notes-modal note="{{ $lesson->lesson_notes }}" />
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </x-slot:content>

                </x-card>
            @else
                <div class="notification">
                    <p>No lessons recorded</p>
                </div>
            @endunless

        </x-user.columns>
    </x-wrapper>
@endsection
