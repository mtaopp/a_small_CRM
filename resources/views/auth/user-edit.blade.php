<x-header pageTitle="Registration"/>
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
                        @if(session('status') == "profile-information-updated")
                            <div class="bg-comp text-black text-center rounded-lg">
                                <p>Profile has been updated</p>
                            </div>
                        @endif

                        <form class="w-full" action="{{ route('user-profile-information.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-input class="w-full text-black" value="{{ old('name') ?? auth()->user()->name }}" id="name" type="text" label="Name:"/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <x-input class="w-full text-black" value="{{ old('email') ?? auth()->user()->email }}" id="email" type="text" label="E-Mail:"/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
</main>
<x-footer/>
