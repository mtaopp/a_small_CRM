<x-header pageTitle="Jobs"/>
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
                    <a href="{{ route('create.job') }}"><x-icons.edit-icon width="4rem"/></a>
                </div>
                <x-card2 twWidth="w-full block">
                    <table class="w-full">
                        <tr>
                            <td class="pl-2">Job-ID</td>
                            <td class="pl-2">Type</td>
                            <td class="pl-2">Date</td>
                            <td class="pl-2">Customer-ID</td>
                            <td class="pl-2">Name</td>
                            <td class="pl-2">Adress</td>
                            <td class="px-2">E-Mail</td>
                            <td class="px-2">Phone</td>
                            <td class="px-2">More</td>
                        </tr>
                        <tr>
                            <td class="pl-2"><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td class="pr-2"><hr></td>
                        </tr>

                        @foreach ($jobs as $job)
                        <tr>
                            <td class="pl-2">{{ $job->job_id}}</td>
                            <td class="pl-2 py-1">
                                @if ($job->has_cleaning && $job->has_moving)
                                    Combo
                                @elseif($job->has_cleaning)
                                    Cleaning
                                @elseif ($job->has_moving)
                                    Moving
                                @else
                                    Choose
                                @endif
                            </td>
                            <td class="pl-2 py-1">DATUM (UC)</td>
                            <td class="pl-2 py-1">{{ $contacts[$job->contact_id]->cid }}</td>
                            <td class="pl-2 py-1">{{ $contacts[$job->contact_id]->firstname }} {{ $contacts[$job->contact_id]->lastname }}</td>
                            <td class="pl-2 py-1">{{ $contacts[$job->contact_id]->adress }} {{ $contacts[$job->contact_id]->house }}, {{ $contacts[$job->contact_id]->postcode }} {{ $contacts[$job->contact_id]->city }}</td>
                            <td class="pl-2 py-1">{{ $contacts[$job->contact_id]->email }}</td>
                            <td class="pl-2 py-1">{{ $contacts[$job->contact_id]->tel }}</td>
                            <td class="px-2"><a href=""><x-icons.clipboard-icon width="1.2rem"/></a></td>
                            {{--

                            --}}
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
