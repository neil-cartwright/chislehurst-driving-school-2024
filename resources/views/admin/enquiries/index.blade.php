@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Enquiries')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li class="is-active"><a>Enquiries</a></li>
            <li><a href="/admin/enquiries/create">Log enquiry</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>
            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            <x-card>
                <x-slot:title>
                    All enquiries
                </x-slot:title>
                <x-slot:content>
                    <table class="table-striped is-fullwidth table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td><a href="/admin/enquiry/edit/{{ $enquiry->id }}">
                                            @if ($enquiry->outcome == 'accepted')
                                                <span class="tag is-small is-success"><span class="fa fa-check"></span></span>
                                            @elseif ($enquiry->outcome == 'rejected')
                                                <span class="tag is-small is-danger"><span
                                                        class="fa fa-times"></span></span>
                                            @else
                                                <span class="tag is-small is-info"><span
                                                        class="fa fa-question"></span></span>
                                            @endif
                                        </a>
                                    </td>
                                    <td>{{ $carbon->parse($enquiry->date)->format('d/m/y') }}</td>
                                    <td>{{ $enquiry->type ?? '' }}</td>
                                    <td title="{{ $enquiry->tel }}">{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->address ?? '' }}</td>
                                    <td>{{ $enquiry->tel ?? '' }}</td>
                                    <td>{{ $enquiry->email ?? '' }}</td>
                                    <td><enquiry-message message="{{ $enquiry->message }}"></enquiry-message></td>
                                    <td>
                                        <form action="/admin/enquiry/destroy/{{ $enquiry->id }}" method="POST"
                                            onsubmit="return confirm('You sure you want to delete this record?')">
                                            @csrf
                                            <!-- name="_method" relates to 'delete' method which is not supported in html -->
                                            <button class="button is-small">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </x-slot:content>
                <x-slot:footer>
                    <div class="card-footer-item">
                        {{ $enquiries->links() }}
                    </div>
                </x-slot:footer>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
