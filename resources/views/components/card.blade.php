

        <div class="w-8/12 m-auto">
            <div class="w-full flex">
                <div class="w-1/3 flex text-third">
                    <x-corner corner="top-left"/>
                    <div class="flex-auto bg-third text-lightblue relative"></div>
                </div>
                <div class="w-2/3 flex bg-second-color">
                    <div class="flex-auto bg-second text-second"></div>
                    <div class="flex-none bg-transparent text-second"><x-corner corner="top-right"/></div>
                </div>
            </div>
        </div>




        <div class="w-8/12 m-auto">
            <div class="w-full flex">
                {{ $slot }}
            </div>
        </div>

        <div class="w-8/12 m-auto">
            <div class="w-full flex">
                <div class="w-1/3 flex text-third">
                    <x-corner corner="bottom-left"/>
                    <div class="flex-auto bg-third text-lightblue relative"></div>
                </div>
                <div class="w-2/3 flex bg-second-color">
                    <div class="flex-auto bg-second text-second"></div>
                    <div class="flex-none bg-transparent text-second"><x-corner corner="bottom-right"/></div>
                </div>
            </div>
        </div>
    </div>


</div>
