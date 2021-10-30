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
            <x-card2>
                <div class="px-32 py-3">
                    Customer-ID: {{ $contact->cid }} <br>
                    Name: {{ $contact->firstname }} {{ $contact->lastname }}<br>
                    Adress: {{ $contact->adress }} {{ $contact->house }}, {{ $contact->postcode }} {{ $contact->city }} <br>
                    Phone: {{ $contact->tel }} <br>
                    E-Mail: {{ $contact->email }} <br>
                </div>

            </x-card2>


            <div class="block w-full text-lightblue mt-12">
                <div class="flex flex-row-reverse justify-between mb-2">
                    <a href="{{ route('create.job', ['id' => $contact->id]) }}"><x-icons.plus-icon width="2.5rem"/></a>
                </div>
            </div>
            <x-card2>
                <h1>Jobs:</h1>
                @if (count($jobs))
                    @foreach ($jobs as $job)
                        {{ $job->id }}
                        @if ($job->has_cleaning && $job->has_moving)
                            Combo
                        @elseif ($job->has_cleaning)
                            Cleaning
                        @elseif ($job->has_moving)
                            Moving
                        @else
                            not set yet
                        @endif
                        <br>
                    @endforeach
                @endif
            </x-card2>

            {{-- {{ dd(Auth::user()); }} --}}
        </div>
    </div>
</main>
<x-footer/>
