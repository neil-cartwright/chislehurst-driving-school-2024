@inject('carbon', 'Carbon\Carbon')

@extends('layouts.app')

@section('title', 'Enquiries')

@section('main')
    <!-- breadcrumbs -->
    <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/admin/enquiries">Enquiries</a></li>
            <li class="is-active"><a>Log an enquiry</a></li>
        </ul>
    </nav>
    <x-wrapper>
        <!-- columns -->
        <x-admin.columns>
            @if (session()->has('message'))
                <div class="notification is-warning has-text-centered">
                    {{ Session::get('message') }}
                </div>
            @endif
            <x-card>
                <x-slot:title>Save enquiry
                </x-slot:title>
                <x-slot:content>
                    <form action="/admin/enquiries/store" method="POST">
                        @csrf
                        <div class="field w-half">
                            <label for="date" class="label is-flex-grow-0 mr-3">Date of Enquiry</label>
                            <div class="control is-flex-grow-0">

                                <input type="date" name="date" class="input" id="date"
                                    value="{{ $carbon::now()->format('Y-m-d') }}" />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="name" class="label is-flex-grow-0 mr-3">Name
                                @error('name')
                                    <span class="has-text-danger">!! {{ $message }}</span>
                                @enderror
                            </label>
                            <div class="control is-flex-grow-0">
                                <input type="text" name="name" class="input" id="name" placeholder="Dave Fisher"
                                    value="{{ old('name') }}" required />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="email" class="label is-flex-grow-0 mr-3">Email</label>
                            <div class="control is-flex-grow-0">
                                <input type="email" name="email" class="input" id="email"
                                    placeholder="davefisher@dave.com" value="{{ old('email') }}" />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="tel" class="label is-flex-grow-0 mr-3">Tel</label>
                            <div class="control is-flex-grow-0">
                                <input type="tel" name="tel" class="input" id="tel"
                                    placeholder="07917 042 740" />
                            </div>
                        </div>

                        <div class="field w-half">
                            <label for="address" class="label is-flex-grow-0 mr-3">Address</label>
                            <div class="control is-flex-grow-0">
                                <input type="text" name="address" class="input" id="address"
                                    placeholder="10 Dacre Park BR7 5FP" />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Message" name="message" value="{{ old('message') }}"></textarea>
                            </div>
                        </div>

                        <hr>

                        <div class="is-flex">
                            <div class="field w-half">
                                <label class="label is-flex-grow-0 mr-3" for="type">Enquiry origin</label>
                                <div class="control">
                                    <div class="select">
                                        <select name="type" value="email">
                                            <option value="email">Direct email</option>
                                            <option value="form">Contact form</option>
                                            <option value="tel">Phone</option>
                                            <option value="text">Text message</option>
                                            <option value="whatsapp">WhatsApp</option>
                                            <option value="in-person">In person</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field w-half">
                                <label class="label is-flex-grow-0 mr-3" for="outcome">Enquiry outcome</label>
                                <div class="control">
                                    <div class="select">
                                        <select name="outcome" value="rejected">
                                            <option value="accepted">Accepted</option>
                                            <option value="rejected">Rejected</option>
                                            <option value="ongoing">Ongoing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="field">
                            <input type="submit" value="Log enquiry" class="button is-info">
                        </div>


                    </form>
                </x-slot:content>
            </x-card>
        </x-admin.columns>
    </x-wrapper>
@endsection
