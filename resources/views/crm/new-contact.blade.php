<x-header pageTitle="New Contact"/>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center">
            @if(session('message'))
                <div class="bg-comp text-black text-center rounded-lg">
                    {{ session('message') }}
                </div>
            @endif
            <div class="block w-full text-lightblue">
                <div class="flex justify-between mb-4">
                    <a href="{{ route('home') }}"><x-icons.back-icon width="4rem"/></a>
                </div>
            </div>
            <x-card2 twWidth="w-full">
                <div class="px-32 py-3">


                    <x-form method="POST" action="{{ route('store.contact') }}">
                        @csrf

                        <x-input type="text" class="text-black" required="required" id="firstname" label="First Name"/>
                        @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="text" class="text-black" required="required" id="lastname" label="Last Name"/>
                        @error('last-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="text" class="text-black" required="required" id="adress" label="Street"/>
                        @error('adress')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="text" class="text-black" required="required" id="house" label="House"/>
                        @error('house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="number" class="text-black" required="required" id="postcode" label="Postcode"/>
                        @error('postcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="text" class="text-black" required="required" id="city" label="City"/>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="email" class="text-black" required="required" id="email" label="E-Mail"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <x-input type="tel" class="text-black" id="tel" label="Phone"/>
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
