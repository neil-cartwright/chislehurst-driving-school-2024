@inject('carbon', 'Carbon\Carbon')

@php
    $years = range('2021', $carbon::now()->year);
    $totalIncome = [];
    $totalCosts = [];
    $totalNet = [];
@endphp

@extends('layouts.app')

@section('title', 'montly averages')

@section('main')
    <x-wrapper>
        <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
            <ul>

                <li><a href="{{ route('admin') }}">Admin</a></li>
                <li class="is-active"><a>Monthly averages</a></li>

                @foreach ($years as $year)
                    <li class="{{ $year == last(request()->segments()) ? 'is-active has-text-weight-bold' : '' }}">
                        <a href="/admin/costs/averages/{{ $year }}">{{ $year }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <x-admin.columns>
            <x-card>
                <x-slot:title>Monthly averages Tax Year {{ $the_year }}
                </x-slot:title>
                <x-slot:content>
                    <table class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Charges</th>
                                <th>Discount</th>
                                <th>Income</th>
                                <th>Costs</th>
                                <th>Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessons as $month => $lesson)
                                @php

                                    $sumIncome = $lesson->sum('lesson_charge');
                                    $sumCosts = $costs[$month]->sum('amount');
                                    $sumNet = round($sumIncome - $sumCosts);

                                    array_push($totalIncome, $sumIncome);
                                    array_push($totalCosts, $sumCosts);
                                    array_push($totalNet, $sumNet);

                                    $monthNum = $carbon::parse($lesson[0]->lesson_date)->format('m');
                                    $yearNum = $carbon::parse($lesson[0]->lesson_date)->format('Y');
                                @endphp
                                <tr>
                                    <td>
                                        <a
                                            href="/admin/lessons/find/{{ $carbon::parse($month)->format('m') }}/{{ $carbon::parse($lesson[0]->lesson_date)->format('Y') }}">
                                            {{ $month }}
                                            {{ $carbon::parse($lesson[0]->lesson_date)->format('y') }}
                                        </a>

                                    </td>
                                    <td>&pound;{{ round($sumIncome, 2) }}
                                    </td>
                                    <td>£{{ $lesson->sum('discountGiven') }}</td>
                                    <td>£{{ round($sumIncome, 2) - $lesson->sum('discountGiven') }}</td>
                                    <td><a
                                            href="/admin/costs/show/{{ $monthNum }}/{{ $yearNum }}">&pound;{{ round($sumCosts, 2) }}</a>
                                    </td>
                                    <td>&pound;{{ round($sumNet, 2) }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>

                            <tr class="has-background-warning">
                                <th>Totals</th>
                                <th>
                                    &pound;{{ roundArraySum($totalIncome) }}
                                </th>
                                <th></th>
                                <th></th>
                                <th>&pound;{{ roundArraySum($totalCosts) }}</th>
                                <th>&pound;{{ roundArraySum($totalNet) }}</th>
                            </tr>
                            <tr>
                                <th>Average</th>
                                <th>
                                    &pound;{{ getAverage($totalIncome) }}
                                </th>
                                <th></th>
                                <th></th>
                                <th>&pound;{{ getAverage($totalCosts) }}</th>
                                <th>&pound;{{ getAverage($totalNet) }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
