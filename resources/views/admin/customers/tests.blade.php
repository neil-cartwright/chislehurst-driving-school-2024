@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Test bookings')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Test bookings</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-admin.columns>

            <x-card>
                <x-slot:title>
                    Test bookings
                </x-slot:title>
                <x-slot:content>
                    <div class="table-scroll-x">
                        <table class="is-striped is-fullwidth has-text-left table">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Test Time</td>
                                    <td>Test Date</td>
                                    <td>Test Centre</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="has-background-warning has-text-weight-bold">

                                </tr>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td><a href="/admin/customer/{{ $customer->id }}">{{ $customer->name }}</a></td>
                                        <td>{{ $customer->test_time }}</td>
                                        <td>{{ $carbon->parse($customer->test_date)->format('D jS M Y') }}</td>
                                        <td>{{ $customer->test_center }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </x-slot:content>
            </x-card>
        </x-admin.columns></x-wrapper>

@endsection
