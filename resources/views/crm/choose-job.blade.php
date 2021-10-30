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


                    <x-form method="POST" action="{{ route('store.job') }}">
                        @csrf
                        <label for="typ">Choose Typ:</label>
                        <select class="px-2 text-black" id="typ" required="required" name="typ">
                            <option selected disabled hidden>
                                Select an Option
                            </option>
                            <option value="0">cleaning</option>
                            <option value="1">moving</option>
                            <option value="2">combo</option>
                        </select>
                        @error('typ')
                        <br>
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="text-center mt-3">
                            <x-button class="bg-comp" type="submit" text="Next"/>
                        </div>
                        <input type="hidden" name="cid" id="cid" value="{{ $id }}">
                    </x-form>
                </div>

            </x-card2>

            {{-- {{ dd(Auth::user()); }} --}}
        </div>
    </div>
</main>
<x-footer/>
