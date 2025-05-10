@if (Session::has('message'))
    <div class="notification has-background-warning">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif

<x-card>
    <x-slot:title>Get in touch</x-slot:title>
    <x-slot:content>
        <form action="/contact" method="post">

            {{ csrf_field() }}

            <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-left">
                    <input class="input" type="text" placeholder="Name" name="name" value="{{ old('name') }}"
                        autofocus required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>

                @if ($errors->first('name'))
                    <p class="has-text-danger">* Please let me know your name</p>
                @endif

            </div>

            <div class="field">
                <label class="label">Address</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" value="{{ old('address') }}" type="text" placeholder="Address"
                        name="address">
                    <span class="icon is-small is-left">
                        <i class="fas fa-home"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Telephone</label>
                <div class="control has-icons-left">
                    <input class="input" type="tel" placeholder="Telephone" name="telephone"
                        value="{{ old('telephone') }}" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-phone"></i>
                    </span>
                </div>


                @if ($errors->first('telephone'))
                    <p class="has-text-danger">* Please supply a contact number</p>
                @endif
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                        required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                @if ($errors->first('email'))
                    <p class="has-text-danger">* Please supply an email address</p>
                @endif
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Message" value="{{ old('enquiry') }}" name="enquiry">
           </textarea>

                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button" name="submit" value="submitted">Send message</button>
                </div>
                <div class="control">
                    <button class="button is-text">Cancel</button>
                </div>
            </div>
        </form>
    </x-slot:content>
</x-card>
