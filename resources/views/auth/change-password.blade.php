<x-header pageTitle="Change Password"/>
<main class="w-100 text-prime">

    <div class="container m-auto py-5 h-full flex ">
        <div class="w-full place-self-center -mt-3">
            <div class="w-8/12 m-auto px-5 mb-3 flex justify-between">
                <a href="/user-control"><x-icons.back-icon width="2rem"/></a>
            </div>
            <x-card>
                <x-card-left>
                    <x-logo class="m-auto" width="100"/>
                </x-card-left>
                <x-card-right>
                    <div class="w-full">
                        @if(session('status') == "password-updated")
                            <div class="bg-comp text-black text-center rounded-lg">
                                <p>Password has been updated</p>
                            </div>
                        @endif

                        <form class="w-full" action="{{ route('user-password.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-input class="w-full text-black" id="current_password" type="password" label="Current Password:"/>

                            @if(array_key_exists('current_password', $errors->updatePassword->messages()))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $errors->updatePassword->messages()['current_password'][0] }}
                                    </strong>
                                </span>
                            @endif
                            <br>
                            <x-input class="w-full text-black" id="password" type="password" label="New Password:"/>
                            <br>
                            <x-input class="w-full text-black" id="password_confirmation" type="password" label="Password confirmation:"/>


                            @if(array_key_exists('password', $errors->updatePassword->messages()))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $errors->updatePassword->messages()['password'][0] }}
                                    </strong>
                                </span>
                            @endif
                            <br>
                            <div class="text-center">
                                <x-button type="submit" text="Update"/>
                            </div>
                        </form>
                    </div>
                </x-card-right>
            </x-card>
        </div>
    </div>

    @error('current_password')
        <p>xxxx</p>
    @enderror


    @php

        if(array_key_exists('password', $errors->updatePassword->messages())) {
            dd($errors->updatePassword->messages()['password']);
        }



        dd($errors->updatePassword->messages());
    @endphp


    @php
    dd(session());
    @endphp

</main>
<x-footer/>

