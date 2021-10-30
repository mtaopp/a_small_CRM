<x-header pageTitle="New Contact"/>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center">
            <div class="block w-full text-lightblue">
                <div class="flex justify-between mb-4">
                    <a href="{{ route('contact', ['id' => $contact->id ]) }}"><x-icons.back-icon width="4rem"/></a>
                </div>
            </div>
            <x-card2 twWidth="w-full block">


                <div class="w-full">
                    @if(session('message'))
                        <div class="w-full bg-comp text-black text-center rounded-lg">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="px-32 py-3">

                    <x-form method="POST" action="{{ route('update.contact', ['id' => $contact->id]) }}">
                        @csrf

                        <x-input value="{{ $contact->firstname }}" type="text" class="text-black" required="required" id="firstname" label="First Name"/>
                        @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->lastname }}" type="text" class="text-black" required="required" id="lastname" label="Last Name"/>
                        @error('last-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->adress }}" type="text" class="text-black" required="required" id="adress" label="Street"/>
                        @error('adress')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->house }}" type="text" class="text-black" required="required" id="house" label="House"/>
                        @error('house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->postcode }}" type="number" class="text-black" required="required" id="postcode" label="Postcode"/>
                        @error('postcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->city }}" type="text" class="text-black" required="required" id="city" label="City"/>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->email }}" type="email" class="text-black" required="required" id="email" label="E-Mail"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input value="{{ $contact->tel }}" type="tel" class="text-black" id="tel" label="Phone"/>
                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="text-center mt-3">
                            <x-button class="bg-comp" type="submit" text="Next"/>
                        </div>
                    </x-form>
                </div>

            </x-card2>

            {{-- {{ dd(Auth::user()); }} --}}
        </div>
    </div>
</main>
<x-footer/>
