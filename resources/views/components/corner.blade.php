<svg
    xmlns="http://www.w3.org/2000/svg"
    {{ $attributes }}
    width="20"
    viewBox="0 0 13.229 13.229">
    <path
        style="
            fill:currentColor;
            fill-opacity:1;
            stroke:currentColor;
            stroke-width:0;
            stroke-linecap:butt;
            stroke-linejoin:miter;
            stroke-miterlimit:4;
            stroke-dasharray:none;
            stroke-opacity:1"
        d="M0 0v13.228a13.2 13.2 0 0 0 13.23-13.229z"
        transform-origin="50%"

        @php
            echo match($corner) {
                'top-left' =>  'transform="rotate(180)"',
                'top-right' =>  'transform="rotate(-90)"',
                'bottom-left' =>  'transform="rotate(90)"',
                'bottom-right' =>  'transform="rotate(0)"',
            };

        @endphp
    />
</svg>
