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
        </div>
    </main>


    <x-footer/>
    </div>
