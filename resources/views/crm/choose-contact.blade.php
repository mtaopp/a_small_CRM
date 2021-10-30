<x-header pageTitle="Choose Contact"/>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center w-full">
            @if(session('message'))
                <div class="bg-comp text-black text-center rounded-lg">
                    {{ session('message') }}
                </div>
            @endif

            <div class="block w-full text-lightblue">
                <div class="flex justify-between mb-4">
                    <a href="{{ route('home') }}"><x-icons.back-icon width="4rem"/></a>
                    <h1>HIER KOMMT NOCH EIN FORMULAR FÜR DIE SUCHFUNTKON HINZU</h1>
                    <a href="{{ route('create.contact') }}"><x-icons.user-plus-icon class="my-auto" width="4rem"/></a>
                </div>
                <x-card2 twWidth="w-full block">
                    <table class="w-full">
                        <tr>
                            <td class="pl-2">ID</td>
                            <td class="pl-2">Name</td>
                            <td class="pl-2">Adress</td>
                            <td class="pl-2">Phone</td>
                            <td class="pl-2">E-Mail</td>
                            <td class="px-2">More</td>
                        </tr>
                        <tr>
                            <td class="pl-2"><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td class="pr-2"><hr></td>
                        </tr>

                        @foreach ($contacts as $contact)

                            <tr class="">
                                <td class="pl-2 py-1">{{ $contact->cid }}</td>
                                <td class="pl-2">{{ $contact->firstname }} {{ $contact->lastname }}</td>
                                <td class="pl-2">{{ $contact->adress }} {{ $contact->house }}, {{ $contact->postcode }} {{ $contact->city }}</td>
                                <td class="pl-2">{{ $contact->tel }}</td>
                                <td class="pl-2">{{ $contact->email }}</td>
                                <td class="px-2"><a href="{{ route('create.job', ['id' => $contact->id]) }}"><x-icons.check-icon width="1.5rem"/></a></td>
                            </tr>


                        @endforeach
                    </table>

                </x-card2>


            {{-- strftime('%V', $timestamp) --}}

            {{-- {{ dd(Auth::user()); }} --}}
            </div>

























        </div>
    </div>
</main>
<x-footer/>
