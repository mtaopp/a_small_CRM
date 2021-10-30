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
                    <a href="{{ route('contacts') }}"><x-icons.back-icon width="4rem"/></a>
                    <a href="{{ route('edit.contact', ['id' => $contact->id]) }}"><x-icons.edit-icon width="4rem"/></a>
                </div>
            </div>
            <x-card2 twWidth="w-full">
                <div class="px-32 py-3">
                    Customer-ID: {{ $contact->cid }} <br>
                    Name: {{ $contact->firstname }} {{ $contact->lastname }}<br>
                    Adress: {{ $contact->adress }} {{ $contact->house }}, {{ $contact->postcode }} {{ $contact->city }} <br>
                    Phone: {{ $contact->tel }} <br>
                    E-Mail: {{ $contact->email }} <br>
                </div>

            </x-card2>

            {{-- {{ dd(Auth::user()); }} --}}
        </div>
    </div>
</main>
<x-footer/>
