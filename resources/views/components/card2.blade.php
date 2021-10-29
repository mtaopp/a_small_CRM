<div class="{{ $twWidth }}">

    <div class="w-full m-auto ">
        <div class="flex text-third">
            <x-corner corner="top-left"/>
            <div class="flex-grow bg-third text-lightblue relative"></div>
            <x-corner corner="top-right"/>
        </div>
    </div>

    <div class="w-full m-auto ">
        <div class="flex text-lightblue bg-third">
            {{ $slot }}
        </div>
    </div>

    <div class="w-full m-auto">
        <div class="flex text-third">
            <x-corner corner="bottom-left"/>
            <div class="flex-auto bg-third text-lightblue relative"></div>
            <x-corner corner="bottom-right"/>
        </div>
    </div>
</div>

