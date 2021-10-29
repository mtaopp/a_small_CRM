<x-header pageTitle="Reset Password"/>
<main class="w-100 text-lightblue">


    <div class="container m-auto py-5 h-full flex">
        <div class="w-full place-self-center">
            <x-card>
                <x-card-left>
                    <x-logo class="m-auto" width="100"/>
                </x-card-left>
                <x-card-right>
                    <x-form method="POST" action="{{ route('password.update') }}">
                        <input type="hidden" name="token" value="{{$request->route('token')}}">

                        <x-input class="w-full text-black" id="email" type="text" label="E-Mail" value="{{ $request->email }}"/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        <x-input class="w-full text-black" id="password" type="password" label="Password"/><br>
                        <x-input class="w-full text-black" id="password_confirmation" type="password" label="Password confirmation"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>

                        <br>
                        <div class="text-center">
                            <x-button type="submit" text="Reset"/>
                        </div>
                    </x-form>
                </x-card-right>
            </x-card>
        </div>
    </div>
</main>
<x-footer/>
