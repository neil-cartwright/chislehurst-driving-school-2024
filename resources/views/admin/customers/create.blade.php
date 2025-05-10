@extends('layouts.app')

@section('title', 'Add a customer')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Add a customer</a></li>
        </ul>
    </nav>

    <x-wrapper>
        <x-admin.columns :col2="6">
            @if (session('message'))
                <div class="notification is-warning">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <x-card>
                <x-slot:title>Add a customer</x-slot:title>
                <x-slot:content>
                    <form action="/admin/customer/store" method="POST">
                        @csrf
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" name="name" type="text" placeholder="Name" autofocus />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" name="email" type="email" placeholder="Email" />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control">
                                <button type="submit" name="submit" class="button is-success">
                                    <span class="icon">
                                        <i class="fa fa-user-plus"></i>
                                    </span>
                                </button>
                            </p>
                        </div>
                    </form>
                </x-slot:content>
            </x-card>

        </x-admin.columns>
    </x-wrapper>
@endsection
