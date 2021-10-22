<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CRM | {{ $pageTitle }}</title>
</head>
<body class="bg-prime flex flex-col">

    <header class="bg-second text-prime w-100 z-1">
        <div class="container m-auto flex items-center">
            <div class="flex-none">
                <x-logo width="2rem"/>
            </div>
            <div class="flex-grow text-center my-2">
                <p>{{ $pageTitle }}</p>
            </div>
            <div class="flex-none">
                @auth
                    <x-exit-icon width="1.5rem"/>

                    @else
                    <div class="w-2">
                    </div>

                @endauth
            </div>
        </div>
    </header>
