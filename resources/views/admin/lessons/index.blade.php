@extends('layouts.app')

@section('title', 'All lessons')


@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('admin') }}">Admin</a></li>
            <li class="active"><a>All lessons</a></li>
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
                    All lessons
                </x-slot:title>
                <x-slot:content>
                    <table class="table-striped is-fullwidth table">
                        <thead>
                            <tr>
                                <td>Notes</td>
                                <td>Date and Log</td>
                                <td>Customer</td>
                                <td>Duration</td>
                                <td>Rate</td>
                                <td>Charge</td>
                                <td>Payment Taken</td>
                                <td>Discount</td>
                                <td>Update</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessons as $lesson)
                                <tr>
                                    <td>
                                        <add-lesson-note :lesson="{{ $lesson }}"
                                            :report="{{ json_encode($lesson->report) }}" />
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($lesson->lesson_date)->format('l jS M Y') }}</td>
                                    <td>
                                        <a href="/admin/customer/{{ $lesson->customer->id }}">
                                            {{ $lesson->customer->name }}
                                        </a>
                                    </td>
                                    <td>
                                        @if ($lesson->lesson_duration == '1.66667')
                                            1hr 40
                                        @elseif($lesson->lesson_duration == '0.833335')
                                            50
                                        @else
                                            {{ $lesson->lesson_duration }}
                                        @endif
                                        @if ($lesson->lesson_duration == '1.66667' || $lesson->lesson_duration == '0.833335')
                                            mins
                                        @else
                                            hr
                                        @endif
                                    </td>
                                    <td>
                                        @if ($lesson->lesson_cancelled)
                                            <span class="has-text-danger">Cancelled</span>
                                        @else
                                            {{ $lesson->lesson_rate }}
                                        @endif
                                    </td>
                                    <td>&pound;{{ $lesson->lesson_charge }}</td>
                                    <td>
                                        @unless ($lesson->amountPaymentTaken == 0)
                                            <span
                                                @if ($lesson->paid_cash) class="is-underlined" @endif>&pound;{{ $lesson->amountPaymentTaken }}</span>
                                        @endunless
                                    </td>
                                    <td>
                                        @unless ($lesson->discountGiven == 0)
                                            &pound;{{ $lesson->discountGiven }}
                                        @endunless
                                    </td>
                                    <td>
                                        <a href="/admin/lesson/{{ $lesson->id }}/edit/" class="button is-small">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form action="/admin/lesson/destroy/{{ $lesson->id }}" method="POST"
                                            onsubmit="return confirm('You sure you want to delete this lesson from the database?')">
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
                        {{ $lessons->links() }}
                    </div>
                </x-slot:footer>
            </x-card>


        </x-admin.columns>

    </x-wrapper>
@endsection
