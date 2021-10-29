<x-header pageTitle="Home"/>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center">
            @if(session('message'))
                <div class="bg-comp text-black text-center rounded-lg">
                    {{ session('message') }}
                </div>
            @endif

           You're logged in!
           {{-- {{ dd(Auth::user()); }} --}}
            <div class="flex">
                <a class="flex-grow w-full whitespace-nowrap hover:bg-comp bg-second mx-4 px-4 py-2 rounded-lg hover:text-second text-lightblue " href="{{ route ('contacts') }}">Contacts</a>
                <a class="flex-grow w-full whitespace-nowrap hover:bg-comp bg-second mx-4 px-4 py-2 rounded-lg hover:text-second text-lightblue" href="{{ route ('create.contact') }}">New Contact</a>
            </div>
        </div>
    </div>
</main>
<x-footer/>
