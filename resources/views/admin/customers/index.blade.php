@extends('layouts.app')

@section('title', 'All customers')

@php
    $sorted = collect(request()->segments())->last() == 'sort';
    $prepayments =
        $lessons->sum('amountPaymentTaken') + $lessons->sum('discountGiven') - $lessons->sum('lesson_charge');
@endphp

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>All customers</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns :col-1="3" :col-2="9">

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <x-card>
                <x-slot:title>
                    All customers ({{ $sorted ? 'sorted' : 'latest' }})
                </x-slot:title>
                <x-slot:content>
                    <div class="table-scroll-x">
                        <table class="is-striped is-fullwidth has-text-left table">
                            <thead>
                                <tr>

                                    <th><a href="/admin/customers/{{ $sorted ? null : 'sort' }}">Name <span class="icon"><i
                                                    class="fa fa-caret-down"></i></span></a>
                                    </th>
                                    <th>Email</th>
                                    <th>Hours</th>
                                    <th>Charges</th>
                                    <th>Payments</th>
                                    <th>Cancelled</th>
                                    <th>Discounts</th>
                                    <th>Balance</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="has-background-warning has-text-weight-bold">
                                    <td>Total: {{ count($customers) }}</td>
                                    <td colspan="6">

                                    </td>

                                    <td>£{{ $prepayments }}
                                    </td>
                                    <td></td>
                                </tr>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>
                                            <a
                                                href="{{ url('/admin/customer/' . $customer->id) }}">{{ $customer->name }}</a>
                                            @if ($customer->test_details)
                                                <span class="icon has-text-grey-lighter is-clickable"
                                                    title="{{ $customer->test_details }}"><i
                                                        class="fa-solid fa-square"></i></span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a>
                                        </td>
                                        <td>
                                            {{ toHoursMins($customer->lessons->sum('lesson_duration')) }}
                                        </td>
                                        <td>
                                            £{{ $customer->lessons->sum('lesson_charge') }}
                                        </td>
                                        <td>
                                            £{{ $customer->lessons->sum('amountPaymentTaken') }}
                                        </td>
                                        <td>
                                            {{ $customer->lessons->sum('lesson_cancelled') }}
                                        </td>
                                        <td>£{{ $customer->lessons->sum('discountGiven') }}</td>
                                        <td class="balance">
                                            £{{ $customer->lessons->sum('amountPaymentTaken') + $customer->lessons->sum('discountGiven') - $customer->lessons->sum('lesson_charge') }}
                                        </td>

                                        <td>
                                            <form action="/admin/customer/destroy/{{ $customer->id }}" method="POST"
                                                onsubmit="return confirm('You sure you want to delete this customer from the database?')">
                                                @csrf
                                                <!-- name="_method" relates to 'delete' method which is not supported in html -->
                                                <button class="button is-small">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </x-slot:content>
            </x-card>


        </x-admin.columns>
    </x-wrapper>
@endsection
