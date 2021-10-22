<x-header pageTitle="Login"/>
@auth
    <x-app-layout/>
@else
    <x-guest-layout></x-guest-layout>
@endauth

<x-footer/>
