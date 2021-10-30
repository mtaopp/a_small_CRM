<x-header pageTitle="Home"/>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center">
            @if(session('message'))
                <div class="bg-comp text-black text-center rounded-lg">
                    {{ session('message') }}
                </div>
            @endif

           {{-- You're logged in! --}}
           {{-- {{ dd(Auth::user()); }} --}}
            <div class="flex flex-col">
                <div class="flex flex-row w-96">
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="{{ route ('contacts') }}">Contacts</a>
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="{{ route ('create.contact') }}">New Contact</a>
                </div>
                <div class="flex flex-row py-3 w-96 mt-5">
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="{{ route ('jobs') }}">Jobs</a>
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="{{ route ('create.job') }}">New Job</a>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer/>
