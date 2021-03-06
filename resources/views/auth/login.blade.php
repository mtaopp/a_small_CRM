<x-header pageTitle="Login"/>
<main class="w-100 text-prime">


    <div class="container m-auto py-5 h-full flex">
        <div class="w-full place-self-center">
            <x-card>
                <x-card-left>
                    <x-logo class="m-auto" width="100"/>
                </x-card-left>
                <x-card-right>
                    <div class="w-full my-12">
                        @if(session('status'))
                            <div class="bg-comp text-black text-center rounded-lg">
                                {{ session('status') }}
                            </div>
                        @endif
                        <x-form method="post" action="{{ route('login') }}">
                            <x-input class="w-full text-black" id="email" type="text" label="E-Mail"/><br>
                            <x-input class="w-full text-black" id="password" type="password" label="Password"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <a href="/forgot-password">Forgot password?</a>
                            <br>
                            <br>
                            <div class="text-center">
                                <x-button type="submit" text="Login"/>
                            </div>
                        </x-form>
                    </div>
                </x-card-right>
            </x-card>
        </div>
    </div>
</main>
<x-footer/>
