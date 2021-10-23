

        <div class="w-8/12 m-auto">
            <div class="w-full flex">
                <div class="w-1/3 flex bg-third-color">
                    <x-corner corner="top-left"/>
                    <div class="flex-auto bg-third text-prime relative"></div>
                </div>
                <div class="w-2/3 flex bg-second-color">
                    <div class="flex-auto bg-second text-prime"></div>
                    <x-corner corner="top-right"/>
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
                <div class="w-1/3 flex bg-third-color">
                    <x-corner corner="bottom-left"/>
                    <div class="flex-auto bg-third text-prime relative"></div>
                </div>
                <div class="w-2/3 flex bg-second-color">
                    <div class="flex-auto bg-second text-prime"><p></p></div>
                    <x-corner corner="bottom-right"/>
                </div>
            </div>
        </div>
    </div>


</div>
