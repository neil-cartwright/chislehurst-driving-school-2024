@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Lessons')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Lessons by month</a></li>
            <li class="active"><a>{{ $results['month'] }}/{{ $results['year'] }}</a></li>
        </ul>
    </nav>
    <x-wrapper>

        <x-admin.columns>

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <x-card id="selected-el" class="is-clickable">
                <x-slot:title>
                    {{ $results['month'] }}/{{ $results['year'] }}
                </x-slot:title>
                <x-slot:content>
                    <table class="table-striped is-fullwidth table">
                        <thead class="has-text-weight-bold">
                            <tr>
                                <td>Date </td>
                                <td>Customer</td>
                                <td>Charge</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="has-background-warning has-text-weight-bold">
                                <td>{{ $results['count'] }} lessons</td>
                                <td>{{ $results['distinct_customers'] }} customers</td>
                                <td>£{{ $results['total_charges'] }}</td>

                            </tr>
                            @foreach ($results['lessons'] as $lesson)
                                <tr>
                                    <td>{{ $carbon::parse($lesson->lesson_date)->format('D jS M y') }}</td>
                                    <td>{{ $lesson->cust_name }}</td>
                                    <td>&pound;{{ $lesson->lesson_charge }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </x-slot:content>

            </x-card>


        </x-admin.columns>

    </x-wrapper>
@endsection
