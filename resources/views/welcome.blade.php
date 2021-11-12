@extends('layout')

@section('title') Meli y Cami @endsection

@section('head-content')
    <!-- Styles -->
    <style>
        #svg-title {
            width: 50vw;
        }
        .svg-name{
            width: 10rem;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .content {
            text-align: center;
        }
    </style>
@endsection

@section('content')

<div style="height: 90vh">
    <div class="w-100 font-jsff mt-3 mt-lg-0" style="font-style: normal!important;">
        <div class="content">
            <div class="title m-b-md">
                <svg id="svg-title" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 305.11 88.72">
                    <defs>
                        <!--Letras-->
                        <clipPath id="clip-path" >
                            <text transform="translate(1.78 65.87)" style="font-size: 78px;fill: none;font-family: josephsophia">Mel</text>
                        </clipPath>
                        <clipPath id="clip-path-2" >
                            <text transform="translate(91.47 65.87)" style="font-size: 78px;fill: none" class="iheart font-jsff">i</text>
                        </clipPath>
                        <clipPath id="cami" >
                            <text transform="translate(180.71 65.87)" style="font-size: 78px;fill: none;font-family: josephsophia">Cami</text>
                        </clipPath>
                    </defs>
                    <!--pluma-->
                    <g id="M-path" style="clip-path: url(#clip-path)" class="melissa-animate">
                        <polyline id="M1" points="6.8 52.02 4.24 55.05 2.98 57.92 3.52 62.41 7.65 64.66 11.51 61.6 14.65 55.23 17.34 44.82 20.75 11.42" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-linejoin: bevel;stroke-width: 6px"/>
                        <line id="M2" x1="24.44" y1="13.68" x2="26.41" y2="59.17" style="fill: none;stroke: #cbbeb9;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 10px"/>
                        <line id="M3" x1="30.36" y1="60.17" x2="40.15" y2="12.85" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 5px"/>
                        <path id="M4" d="M60.59,105.38c0,4.62-.67,43.92,3.28,47.87" transform="translate(-17.24 -90.78)" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 10px"/>
                    </g>
                    <g id="e-path" style="clip-path: url(#clip-path)" class="melissa-animate">
                        <polyline id="e1" points="59.22 52.16 62.82 50.17 66.62 44.9 67.93 38.47 66.37 34.91 62.77 34.93" style="fill: none;stroke: #CBBEB9FF;stroke-linejoin: round;stroke-width: 3px"/>
                        <polyline id="e2" points="63.51 34.45 58.52 41.1 57.31 45 56.46 54.44 61.28 62.48 68.98 61.51" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 7px"/>
                    </g>
                    <g id="l-path" style="clip-path: url(#clip-path)" class="melissa-animate">
                        <polyline id="l1" points="68.25 62.04 72.32 57.4 76.38 49.28 82.79 39.63 85.41 35.48 87.4 31.61 90.78 22.68 91.36 16.97 89.8 14.65 87.17 14.65" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 3px"/>
                        <polyline id="l2" points="87.56 13.34 80.2 28.08 78.14 40.52 77.78 48.46 78.1 58.93 82.35 63.18" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 6px"/>
                        <path id="l3" d="M99.05,153.67c3.53,3,10.38-6.24,8.1-12.92" transform="translate(-17.24 -90.78)" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 3px"/>
                    </g>
                    <g id="i-heart" style="clip-path: url(#clip-path-2)" class="melissa-animate" >
                        <line id="ih1" x1="96.9" y1="26.64" x2="96.9" y2="29.52" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 9px"/>
                        <path id="ih2" d="M112.91,129.35s-8.33,37.26,25.08,29.88" transform="translate(-17.24 -90.78)" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 7px"/>
                        <line id="ih3" x1="123.28" y1="69.3" x2="136.37" y2="62.93" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 3px"/>
                        <path id="ih4" d="M153.61,153.57s2-1.48,3.71-2.93" transform="translate(-17.24 -90.78)" style="fill: none;stroke: #CBBEB9FF;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 2.1px"/>
                        <path id="ih5" d="M178.67,120c-4.63,17.19-21.35,30.65-21.35,30.65" transform="translate(-17.24 -90.78)" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 3px"/>
                        <polyline id="ih6" points="161.42 30.1 161.81 22.07 159.31 18.45 152.93 17.63 145.96 22.48 141.96 27.44 138.55 37.3" style="fill: none;stroke: #CBBEB9FF;stroke-miterlimit: 10;stroke-width: 7px"/>
                        <path id="ih7" d="M152.22,128l-.2-13.91-6.41-4.91L138,110.24l-2,5.12.43,6.94L138,127l2.92,8.32,6.89,10.05" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-miterlimit: 10;stroke-width: 7px"/>
                        <line id="ih8" x1="130.28" y1="54.2" x2="135.32" y2="59.7" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 3px"/>
                        <path id="ih9" d="M152.83,150.71a46.55,46.55,0,0,0,3.93,3.16,42.31,42.31,0,0,0,6.11,3.71c1.38.67,2.59,1.15,3.49,1.49l2.23.69c.92.17.46.13,1.39.3" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 2.1px"/>
                        <path id="ih10" d="M170.41,160.26c3.65,1.08,22.33.35,28.2-20.07" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 3px"/>
                    </g>
                    <g id="C" style="clip-path: url(#cami)" class="melissa-animate">
                        <polyline points="206.91 29.84 208.7 22.37 206.91 17.63 204.31 15.61 199.91 14.11 190.44 21.41 187.35 30.78 186.3 35.46 186.13 42.55 186.96 49.12 188.14 55.52 194.63 64.05 200.09 64.33 204.73 61.26 207.49 56.36 208.07 50.42 207.73 45.79" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 8px"/>
                    </g>
                    <g id="a" style="clip-path: url(#cami)" class="melissa-animate">
                        <polyline id="a1" points="225.83 43.44 227.39 34.71 220.15 38.02 217.09 46.81 216.47 53.43 217.06 59.6 222.17 62.08 234.45 32.33 231.2 56.2 234.06 62.08" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-linejoin: bevel;stroke-width: 7px"/>
                        <path id="a2" d="M253.33,153.14c3.3.46,6.43-6.43,6.43-6.43v-6.6" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-linejoin: bevel;stroke-width: 3px"/>
                    </g>
                    <g id="m" style="clip-path: url(#cami)" class="melissa-animate">
                        <path id="m1" d="M266.18,126.77c-1.16,7.93-2.45,20.47-.82,25.35" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-linejoin: bevel;stroke-width: 7px"/>
                        <polyline id="m2" points="249.41 59.73 251.38 46.6 254.73 36.9 257.95 33.93 262.89 36 263.19 47.02 262.14 60.1 267.69 44.54 270.7 38.1 276.02 34.33 279.19 36.47 278.59 44.02 278.25 48.14 277.99 55.86 279.32 62.74 282.42 61.97" style="fill: none;stroke: lightblue;stroke-linejoin: bevel;stroke-width: 7px"/>
                        <path id="m3" d="M307.38,139.91c-.42,1.46-1.31,4-1.31,4s-2.33,8.45-6,9.92" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 2.1px"/>
                    </g>
                    <g id="i" style="clip-path: url(#cami)" class="melissa-animate">
                        <line id="ih1" x1="294.44" y1="28.12" x2="294.44" y2="31" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 9px"/>
                        <path id="ih2" d="M310.47,130.17s-3.09,23.11,1.21,22.79" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 7px"/>
                        <path d="M314.7,153.52c3-2.92,5.49-10.15,6.6-13.69" transform="translate(-17.24 -90.78)" style="fill: none;stroke: lightblue;stroke-linecap: round;stroke-miterlimit: 10;stroke-width: 2.1px"/>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <div class="d-block d-lg-flex">
        <div class="w-100 w-lg-50 mt-3 mt-lg-0">
            <div class="w-75 mx-auto">
                <iframe style="height: 50vh" class="floating-card border-0 w-100 d-block" src="//www.youtube.com/embed/8ExvRHZBaTY" allowfullscreen></iframe>
            </div>
        </div>
        <div class="w-100 w-lg-50 mt-3 mt-lg-0">
            <div class="w-75 mx-auto">
                <h2 class="text-center">{{ __('general.Welcome') }}</h2>
                <p class="text-justify">¡Hola!</p>
                <p>Gracias por estar aquí, queremos darte la bienvenida a Meli&Cami, un proyecto que llevábamos bastante tiempo aplazando y por fin decidimos empezar, en este espacio te contaremos nuestras experiencias de vida, cómo hemos logrado el equilibrio, aciertos, desaciertos y aprendizajes a través de los años en diferentes aspectos de nuestra vida.</p>
                <p>Si quieres saber más de nosotros sigue leyendo… </p>
            </div>
        </div>
    </div>
</div>
@include('aboutUs')

@include('blogs')

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="{{asset('js/handwrite_animation.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/nav_animation.js')}}" type="text/javascript"></script>
@endpush

