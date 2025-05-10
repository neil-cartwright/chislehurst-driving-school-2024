@extends ('layouts.app')

@section('title', 'Monthly costs')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a>Admin</a></li>
            <li><a href="/admin/costs">All costs</a></li>
            <li class="is-active"><a href="">Categories</a></li>
            <li><a>{{ $month_name }} {{ $year }}</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <x-admin.columns>

            <div class="level is-mobile overflow-x-scroll mb-0">

                @foreach ($categories as $category)
                    <a href="#{{ $category }}"
                        class="level-item has-text-centered has-text-weight-light has-text-info">{{ $category }}
                    </a>
                @endforeach

            </div>

            <hr>

            <aside>
                <cost-select month="{{ $month_name }}" :months="{{ json_encode($months) }}" year="{{ $year }}" />
            </aside>

            <hr>

            <button class="button is-light" onclick="printDiv('print-area')">Print</button>

            <hr>

            @if (Session::has('message'))
                <div class="notification has-background-warning">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <section id="print-area">
                <div class="columns is-multiline">
                    @foreach ($categories as $category)
                        <div class="column is-6" id="{{ $category }}" id="{{ $category }}">
                            <x-card class="has-background-white-bis h-full">
                                <x-slot:title><a
                                        href="/admin/cost/create/{{ $category }}/{{ strtolower($month_name) }}/{{ $year }}">{{ $category }}</a></x-slot:title>
                                <x-slot:content>
                                    <table
                                        class="is-bordered is-striped is-narrow is-hoverable is-fullwidth has-text-centered table">
                                        <thead>
                                            <tr>
                                                <th class="has-text-centered">Date</th>
                                                <th class="has-text-centered">Description</th>
                                                <th class="has-text-centered">Cost</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="3" class="py-4"></td>
                                            </tr>
                                            @foreach ($costs as $cost)
                                                @if ($cost->category == $category)
                                                    <!-- if there are entries -->
                                                    <tr>
                                                        <td><a href="/admin/costs">{{ $cost->date_of_purchase }}</a>
                                                        </td>
                                                        <td class="description"><span>{{ $cost->description }}</span></td>
                                                        <td>
                                                            <a href="/admin/cost/edit/{{ $cost->id }}">&pound;
                                                                {{ number_format($cost->amount, 2) }}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <!-- else output empty tr -->
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <tfoot
                                            style="border-top-style:
                                                                double;">
                                            <tr>
                                                <th class="has-text-centered">Total</th>
                                                <th class="has-text-centered"></th>
                                                <th class="has-text-centered">
                                                    @if (isset($total_category_costs[$category]))
                                                        £{{ $total_category_costs[$category] }}
                                                    @else
                                                        0.00
                                                    @endif
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </x-slot:content>
                            </x-card>
                        </div>
                    @endforeach
                    <div class="column is-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-title">
                                    Totals for {{ $month_name }} - {{ $year }}
                                </div>
                            </div>
                            <div class="card-content">
                                <table class="has-text-centered is-bordered is-striped is-fullwidth table">
                                    <tfoot style="border-style-top: double;">
                                        <tr>
                                            <th colspan="2">Total for {{ $month_name }}</th>
                                            <th>
                                                &pound;{{ number_format($costs->sum('amount'), 2) }}
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </x-admin.columns>
    </x-wrapper>
@endsection

@push('scripts-after')
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush
