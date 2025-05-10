@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Add a cost')

@section('main')
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/admin/costs">All costs</a></li>
            <li class="is-active"><a>Add a cost</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-admin.columns :col2="6">

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <x-card>
                <x-slot:title>Add a cost &nbsp; <span
                        class="has-text-weight-light">{{ $carbon::parse($date)->format('M Y') }}</span></x-slot:title>
                <x-slot:content>
                    <form action="/admin/cost" method="POST">

                        @csrf

                        <input type="hidden" name="month" value={{ $carbon::parse($date)->format('m') }}>
                        <input type="hidden" name="year" value={{ $carbon::parse($date)->format('Y') }}>

                        <div class="field w-half">
                            <label for="date" class="label is-flex-grow-0 mr-3">Date</label>
                            <div class="control is-flex-grow-0">

                                <input type="date" name="date" class="input" id="date"
                                    value="{{ $date ? $date : $carbon::now()->format('Y-m-d') }}" />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="category" class="label is-flex-grow-0 mr-3">Category</label>
                            <div class="control ">
                                <div class="select">
                                    <select name="category">
                                        <option>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category }}" @selected($category == $the_category)>
                                                {{ $category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- description -->

                        <div class="field">
                            <label for="description" class="label mr-2">Description</label>
                            <div class="control">
                                <input class="input" type="text" id="description" name="description" />
                            </div>
                        </div>

                        <!-- amount -->

                        <div class="field w-half">
                            <label for="amount" class="label">Amount</label>
                            <div class="control">
                                <input type="number" step=".01" class="input" id="amount" name="amount" />
                            </div>
                            <hr>
                            <div class="px-3">
                                <label for="monthly_recurring" class="checkbox is-flex is-align-items-center">
                                    <input type="checkbox" value="1" name="monthly_recurring" class="mr-2" />
                                    Monthly recurring
                                </label>
                            </div>
                        </div>

                        <hr>

                        <!-- submit -->
                        <div class="control mt-2">
                            <button class="button is-info mr-2" name="submitted">
                                <span class="icon mr-1">
                                    <i class="fas fa-save"></i>
                                </span>
                                Save
                            </button>
                        </div>
                    </form>
                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
