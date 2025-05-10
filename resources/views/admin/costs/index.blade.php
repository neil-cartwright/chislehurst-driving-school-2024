@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'All costs')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumb">
        <ul>
            <li>
                <a href="/admin" aria-current="page">Admin</a>
            </li>
            @if (Route::currentRouteAction() == 'App\Http\Controllers\CostController@category')
                <li>
                    <a href="/admin/costs">All costs</a>
                </li>
                <li class="is-active">
                    <a href="#">{{ $category }}</a>
                </li>
            @else
                <li class="is-active">
                    <a href="#">All costs</a>
                </li>
            @endif
            @isset($month_name)
                <li>
                    <a> {{ $month_name }} {{ $year }}</a>
                </li>

                @endif
            </ul>
        </nav>

        <x-wrapper>
            <x-admin.columns>

                @if (Session::has('message'))
                    <div class="notification has-background-warning">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif
                @if ($costs->isNotEmpty())

                    <x-card>
                        <x-slot:title>All costs - {{ $carbon::now()->format('F') }}</x-slot:title>
                        <x-slot:content>
                            <div class="overflow-scroll-x">
                                <table class="is-fullwidth has-text-centered table">
                                    <thead>
                                        <tr>
                                            <td>Date</td>
                                            <td>Category</td>
                                            <td>Description</td>
                                            <td>Amount</td>
                                            <td>Monthly</td>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- totals -->
                                        <tr class="has-background-warning has-text-weight-bold">
                                            <td colspan="3"></td>
                                            <td>&pound;{{ $costs->sum('amount') }}</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        @foreach ($costs as $cost)
                                            <tr>
                                                <td>
                                                    @php
                                                        $month = $carbon::parse($cost->date_of_purchase)->format('m');
                                                        $year = $carbon::parse($cost->date_of_purchase)->format('Y');
                                                    @endphp
                                                    <a
                                                        href="{{ url('admin/costs/show') . '/' . $month . '/' . $year }}">{{ $carbon::parse($cost->date_of_purchase)->format('d/m/y') }}</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url('admin/costs/show/') . '/' . $cost->category }}">{{ $cost->category }}</a>
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{ url('admin/costs/show/description') . '/' . $cost->description }}">{{ $cost->description }}</a>
                                                </td>
                                                <td>&pound;{{ $cost->amount }}</td>
                                                <td>
                                                    {{ $cost->monthly_recurring ? 'Yes' : 'No' }}
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/cost/edit') . '/' . $cost->id }}"><span
                                                            class="icon">
                                                            <i class="fas fa-edit has-text-info"></i> </span></a>
                                                </td>
                                                <td>
                                                    <form action="{{ url('/admin/cost/destroy') . '/' . $cost->id }}"
                                                        method="POST" id="cost-form"
                                                        onsubmit="return confirm('Do you really want to delete this record?');">
                                                        {{ csrf_field() }}
                                                        <button class="button is-white" type="submit">
                                                            <span class="icon is-small">
                                                                <i class="fas fa-trash-alt has-text-black-ter"></i>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            {{ $costs->links() }}
                        </x-slot:content>
                    </x-card>
                @else
                    <div class="notification">No costs this month</div>
                @endif


            </x-admin.columns>
        </x-wrapper>
    @endsection
