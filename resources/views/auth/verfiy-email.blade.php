<x-header pageTitle="E-Mail Verification"/>
<main class="w-100 text-prime">



    <div class="container m-auto py-5 h-full flex">
        <div class="w-full place-self-center">
            <x-card>
                <x-card-left>
                    <x-logo class="m-auto" width="100"/>
                </x-card-left>
                <x-card-right>
                    <div class="w-full my-12">


                        @if (session('status') == 'verification-link-sent')
                            <div class="bg-comp text-black text-center rounded-lg">
                                A new email verification link has been emailed to you!
                            </div>
                        @endif
                        <h1 class="text-center text-2xl">You must verify your email adress, please check your email for a verification link.</h1>
                        <x-form method="POST" action="{{ route('verification.send') }}">
                            <br>
                            <br>
                            <div class="text-center">
                                <x-button type="submit" text="Resend E-mail"/>
                            </div>
                        </x-form>
                    </div>
                </x-card-right>
            </x-card>
        </div>
    </div>
</main>
<x-footer/>
