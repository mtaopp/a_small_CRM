<x-header pageTitle="Login"/>
<main>
    <div>
        @if(session('message'))
            <div class="bg-comp text-black text-center rounded-lg">
                {{ session('message') }}
                @php

                   // dd( session());

                @endphp

            </div>
        @endif

       You're logged in!<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
       {{-- {{ dd(Auth::user()); }} --}}
    </div>
</main>


<x-footer/>
