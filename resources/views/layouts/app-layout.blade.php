<x-header pageTitle="Home"/>
<main>
    <div>
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
