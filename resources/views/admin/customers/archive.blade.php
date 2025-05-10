@extends('layouts.app')

@section('title', 'Archive')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>Customer archive</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>
            <x-card>
                <x-slot:title>
                    {{ collect(request()->segments())->last() }} ({{ count($customers) }})
                </x-slot:title>
                <x-slot:content>
                    <table class="is-striped is-fullwidth table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Lessons</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>

                                    <td><a href="/admin/customer/{{ $customer->id }}">{{ $customer->name }} </a></td>

                                    <td>{{ $customer->email }}</td>
                                    <td> {{ toHoursMins($customer->lessons->sum('lesson_duration')) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
