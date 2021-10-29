<div class="">

    <div class="flex">

        <div>
            <label for="{{ $id }}_H">Hours </label><br>

        </div>
        <div class="mx-2">&</div>
        <div>
            <label for="{{ $id }}_M"> Minutes</label><br>

        </div>
    </div>

    <input {{ $attributes}} type="number" name="{{ $id }}_H" id="{{ $id }}_H"
                            placeholder="{{ $hPlaceholder ?? '' }}"
                            min="{{ $hMin ?? '' }}"
                            max="{{ $hMax ?? '' }}"
                            step="{{ $hStep ?? '' }}">
    :
    <input {{ $attributes}} type="number" name="{{ $id }}_M" id="{{ $id }}_M"
                            placeholder="{{ $mPlaceholder ?? '' }}"
                            min="{{ $mMin ?? '' }}"
                            max="{{ $mMax ?? '' }}"
                            step="{{ $mStep ?? '' }}">
    <br>
</div>
