<x-header pageTitle="Reset Password"/>
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

                        <x-form method="POST" action="{{ route('password.request') }}">
                            <x-input class="w-full text-black" id="email" type="text" label="E-Mail"/><br>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <br>
                            <div class="text-center">
                                <x-button type="submit" text="Send E-mail"/>
                            </div>
                        </x-form>
                    </div>
                </x-card-right>
            </x-card>
        </div>
    </div>
</main>
<x-footer/>
