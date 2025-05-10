@extends('layouts.app')

@section('title', 'Edit a cost')


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
                <x-slot:title>Edit a cost</x-slot:title>
                <x-slot:icon>
                    <form action="{{ url('/admin/cost/destroy') . '/' . $cost->id }}" method="POST" id="cost-form"
                        onsubmit="return confirm('Do you really want to delete this record?');">
                        {{ csrf_field() }}
                        <button class="button is-white has-text-danger" type="submit">
                            <span class="icon mr-2">
                                <div class="fa fa-trash"></div>
                            </span>
                            Delete
                        </button>
                    </form>
                </x-slot:icon>
                <x-slot:content>
                    <form action="/admin/cost/update/{{ $cost->id }}" method="POST">

                        @csrf

                        <div class="field w-half">
                            <label for="date" class="label is-flex-grow-0 mr-3">Date</label>
                            <div class="control is-flex-grow-0">
                                <input type="date" name="date" class="input" id="date"
                                    value="{{ $cost->date_of_purchase }}" />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="category" class="label is-flex-grow-0 mr-3">Category</label>
                            <div class="control ">
                                <div class="select">
                                    <select name="category">
                                        <option>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category }}" @selected($category == $cost->category)>
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
                                <input class="input" value="{{ $cost->description }}" type="text" id="description"
                                    name="description" />
                            </div>
                        </div>

                        <!-- amount -->

                        <div class="field w-half">
                            <label for="amount" class="label">Amount</label>
                            <div class="control">
                                <input type="number" step=".01" class="input" id="amount" name="amount"
                                    value="{{ $cost->amount }}" />
                            </div>
                            <hr>
                        </div>

                        <div class="field">
                            <label for="monthly_recurring" class="checkbox">
                                <input type="checkbox" value="{{ $cost->monthly_recurring }}" name="monthly_recurring"
                                    class="mr-2" @checked($cost->monthly_recurring) />
                                Monthly recurring
                            </label>
                        </div>

                        <hr>

                        <!-- submit -->
                        <div class="is-flex is-align-items-center">
                            <div class="control">
                                <button class="button is-info mr-2" name="submitted">
                                    <span class="icon mr-1">
                                        <i class="fas fa-save"></i>
                                    </span>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>

                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
