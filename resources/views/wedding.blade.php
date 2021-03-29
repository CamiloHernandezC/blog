<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boda</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <link rel="stylesheet" href="{{asset('css/count-down.css')}}">
    <link rel="stylesheet" href="{{asset('css/wedding.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 80vh;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <script>

        // Initialize and add the map
        function initMap() {
            const place = {lat: 11.092397530619149, lng: -74.21892511233487};
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 11,
                center: place,
            });
            // The marker, positioned at place
            const marker = new google.maps.Marker({
                position: place,
                map: map,
            });
        }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar">

<div class="jsff sticky-top text-center bg-girl floating-card mx-3 rounded-20px" style="height: 10vh; border-top-left-radius: 0px!important; border-top-right-radius: 0px!important">
    <h1 id="logoNavBar" class="color-white w-100 m-auto position-absolute"><span class="iheart">m</span>c</h1>
    <nav id="linksNavBar" class="navbar navbar-expand-lg navbar-dark text-center w-100 position-absolute" style="background: transparent">
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent" style="font-family: 'Times New Roman'; font-style: italic">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#date">Fecha</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#ourMoments">Nuestros Momentos</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#dressCode">Vestimenta</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#gifts">Regalos</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#section3">Confirmar Asistencia</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#hosting">Hospedaje</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="d-flex position-relative full-height mx-3 my-4 floating-card" id="welcomeDiv">
    <div class="d-none justify-content-around flex-column m-auto text-center jsff">
        <p>M</p>
        <p>e</p>
        <p>l</p>
        <p>i</p>
        <p>&</p>
        <p>C</p>
        <p>a</p>
        <p>m</p>
        <p>i</p>
    </div>
    <div class="d-flex text-center jsff my-1 my-md-auto mx-auto mr-md-5 coupleName" style="color: white;">
        Mel<span class="iheart">i</span>Cami
    </div>
<!--<img style="width: 100vw" class="d-block m-auto" src="{{asset('img/bg2.jpg')}}">
    <div class="d-flex text-center jsff centered" style="top: 80%; color:white; font-size: 7rem!important;">
        10-07-2021
    </div>-->
    <div class="d-none justify-content-around flex-column m-auto text-center jsff">
        <p>10</p>
        <p>07</p>
        <p>2021</p>
    </div>
</div>
<div class="full-height d-flex mx-3 my-4 floating-card" id="section2">
    <p class="mt-3 my-md-auto mx-auto color-white text-justify us">¡NOS CASAMOS! 10/07/2021 </p>
</div>
<div class="full-height mx-3 my-4 pt-5 floating-card text-center" style="color: white; height: 100vh" id="date">
    @include('confirmAttendanceModal')
    <h1 class="ffabr medium-font" >Save The Date</h1>
    <h1 class="fftb huge-font" >10-07-2021</h1>
    <div class="d-flex flex-column flex-md-row w-75 h-75 h-lg-25 m-auto justify-content-between fftb">
        <div class="count-down-container" style="background-color: #add8e6CC">
            <h1 id="count-down-days"></h1>
            <h3>Días</h3>
        </div>
        <div class="count-down-container" style="background-color: #DCCFC9CC">
            <h1 id="count-down-hours"></h1>
            <h3>Horas</h3>
        </div>
        <div class="count-down-container" style="background-color: #add8e6CC">
            <h1 id="count-down-minutes"></h1>
            <h3>Mins</h3>
        </div>
        <div class="count-down-container" style="background-color: #DCCFC9CC">
            <h1 id="count-down-seconds"></h1>
            <h3>Seg</h3>
        </div>
    </div>
    <!--
    <button data-toggle="modal" data-target="#confirmAttendanceModal" class="btn btn-success d-block ml-auto mr-auto mt-5 br-20">Confirmar asistencia</button>
    -->
</div>
<div style="height: 110vh" class="mx-3 my-4 floating-card" id="placeDiv">
    <div style="height: 110vh" class="position-relative text-center">
        <h1 class="centered w-100 fftb huge-font" style="top:20%;">Santa Marta</h1>
    </div>
</div>
<div class="d-sm-block d-md-flex mx-3">
    <div class="floating-card w-80 w-md-40 mx-auto mt-3">
        <img src="{{asset('img/place2.jpg')}}" class="w-100 rounded-20px" style="height: 100vh">
    </div>
    <div class="floating-card w-80 w-md-40 mx-auto mt-3">
        <img src="{{asset('img/place3.jpg')}}" class="w-100 rounded-20px" style="height: 100vh">
    </div>
</div>
<div class="full-height mx-3 my-4 floating-card bg-girl pt-5 pb-5" id="ourMoments">
    <h1 class="ffabr text-center mb-5">Nuestros Momentos</h1>
    <div class="container">
        <div class="row justify-content-around pl-5 pr-5">
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om1.jpg)"></div>
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om2.jpg)"></div>
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om3.jpg)"></div>
        </div>
        <div class="row mt-5 justify-content-around pl-5 pr-5">
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om4.jpg)"></div>
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om5.jpg)"></div>
            <div class="col-3 ourMoments floating-card" style="background-image: url(../img/om6.jpg)"></div>
        </div>

    </div>
</div>
<div class="full-height mx-3 my-4" id="dressCode">
    <h1 class="text-center mb-5 mb-md-0 ffabr">Código de Vestimenta</h1>
    <h2 class="text-center mb-5 mb-md-0 fftb">Formal Guayabera</h2>
    <div class="d-sm-block d-md-flex justify-content-around">
        <div class="d-flex w-md-50 w-sm-100 mb-5 mb-md-0">
            <div class="floating-card d-flex text-center w-25 p-4" style="background: lightblue; color: white;">
                <div class="m-auto" style="font-family: 'Times New Roman'; font-style: italic">
                    <h2>H</h2>
                    <h2>O</h2>
                    <h2>M</h2>
                    <h2>B</h2>
                    <h2>R</h2>
                    <h2>E</h2>
                    <h2>S</h2>
                </div>
            </div>
            <div class="dress-container">
                <img src="{{asset('img/men_cloth.png') }}" style="height: 60vh" alt="mi boda">
                <p>Guayabera blanca y Pantalón Caqui</p>
            </div>
        </div>
        <div class="d-flex flex-row-reverse flex-md-row w-md-50 w-sm-100">
            <div class="dress-container">
                <img src="{{asset('img/woman_cloth.png') }}" style="height: 60vh" alt="mi boda">
                <p>Vestido largo en flores fondo blanco</p>
            </div>
            <div class="floating-card d-flex text-center w-25 p-4"
                 style="background: #DCCFC9; color: white; width: 20%">
                <div class="m-auto" style="font-family: 'Times New Roman'; font-style: italic">
                    <h2>M</h2>
                    <h2>U</h2>
                    <h2>J</h2>
                    <h2>E</h2>
                    <h2>R</h2>
                    <h2>E</h2>
                    <h2>S</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="full-height mx-3 my-4 floating-card bg-boy pt-5" id="gifts">
    <h1 class="text-center ffabr" style="color: white">Mesa de Regalos</h1>
    @if(count($gifts)>0)
        @include('assignGiftModal')
        <div id="immediateDeliveryCarousel" class="carousel slide mt-3" data-ride="carousel">
            <div id="innerImmediateDelivery" class="carousel-inner row mx-auto carousel-inner-cyclic"
                 style="width: 75%">
                @foreach($gifts  as $gift)
                    <div class="carousel-item carousel-item-cyclic col-md-4 itemDivImmediateDelivery my-4">
                        @if($gift->assigned)
                            <div class="position-absolute h-100 rounded-20px"
                                 style="width: 90%; background: grey; opacity: 0.5; z-index: 10">
                            </div>
                        @endif
                        <div class="card floating-card pt-3">
                            <img src="{{asset('img/products/'.$gift->image)}}" class="card-img-top" alt="...">
                            <!--Always with the cell image because is taller than wide-->
                            <div class="card-body text-center">
                                <h4 class="card-text"><strong>{{$gift->name}}</strong></h4>
                                <h4 class="card-text"><strong>{{$gift->description}}</strong></h4>
                                <h6 style="color: black">REF: {{$gift->ref}}</h6>
                                <button onclick="saveGiftId({{$gift->id}})" data-toggle="modal"
                                        data-target="#assignGiftModal" style="color: white"
                                        class="bg-girl rounded-20px p-1 border-0 w-100" type="button"><h4 class="m-0">
                                        <small><strong>Me lo pido!</strong></small></h4></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev-personalized carousel-control-cyclic immediateDeliveryControl"
               href="#immediateDeliveryCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next-personalized carousel-control-cyclic immediateDeliveryControl"
               href="#immediateDeliveryCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endif
</div>
<div class="full-height d-flex mx-3 my-4 floating-card position-relative" id="section3">
    <div class="opacity rounded-20px" style="background-color: rgba(248, 247, 216, 0.7);">
    </div>
    <div style="z-index: 1000;" class="centered text-center ourGift">
        <h1 class="fftb mb-5">Nuestro mejor regalo sería tu compañia...</h1>
        <h3 class="fftb">Si hay algo que queremos en nuestra boda, es compartir con nuestros familiares y amigos un evento tan especial como será la unión de nuestro amor. Nos hará inmensamente felices que puedas acompañarnos, así que más que cualquier cosa estaremos agradecidos por tu presencia.</h3>
        <button data-toggle="modal" data-target="#confirmAttendanceModal" class="fftb btn d-block ml-auto mr-auto mt-5 br-20"
                style="background-color: lightblue; color: white"><h4>Confirmar Asistencia</h4></button>
    </div>
</div>
<div class="full-height mx-3 my-4 floating-card bg-girl pt-5 pb-5" id="hosting">
    <h1 class="ffabr text-center">Hospedaje</h1>
    <h2 class="fftb text-center">Cercano al Evento</h2>

    <div class="row m-auto" style="width: 95%">
        <div class="position-relative col-12 col-md-4 p-0" style="height: 50vh; background: url(../img/hotel2.jpeg); background-size: cover;">
            <div class="d-block d-md-none color-white mr-3 position-absolute text-right" style="right: 0; bottom: 0">
                <p>Hotel Santorini</p>
                <p>$207.000 persona/noche</p>
            </div>
            <a href="https://www.booking.com/hotel/co/santorini-casa-blanca.es.html?aid=397594;label=gog235jc-1FCAEoggI46AdIM1gDaI4CiAEBmAEKuAEXyAEM2AEB6AEB-AEMiAIBqAIDuAKL2fSCBsACAdICJGRkMzg4MjU2LWM5NjAtNGI5MS05NTAxLTljZjNkMWEyYzQ5M9gCBuACAQ;sid=eab94be5fff7c7252cff069c631b6a23;all_sr_blocks=156090114_265713004_0_1_0;checkin=2021-07-10;checkout=2021-07-11;dest_id=-598739;dest_type=city;dist=0;from_beach_non_key_ufi_sr=1;group_adults=1;group_children=0;hapos=5;highlighted_blocks=156090114_265713004_0_1_0;hpos=5;no_rooms=1;req_adults=1;req_children=0;room1=A;sb_price_type=total;sr_order=popularity;sr_pri_blocks=156090114_265713004_0_1_0__20700000;srepoch=1616719103;srpvid=5804047e232700c6;type=total;ucfs=1&#hotelTmpl" target="_blank" style=" color: white">
                <div class="opacity opacity-transition col-12">
                    <div class="show">
                        <p>Hotel Santorini</p>
                        <p>$207.000 persona/noche</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="position-relative col-12 col-md-4 p-0" style="height: 50vh; background: url(../img/hotel3.jpeg); background-size: cover;">
            <div class="d-block d-md-none color-white mr-3 position-absolute text-right" style="right: 0; bottom: 0">
                <p>Hotel Costa Azul</p>
                <p>$172.000 persona/noche</p>
            </div>
            <a href="https://www.booking.com/hotel/co/ghl-comfort-costa-azul.es.html?aid=397594;label=gog235jc-1FCAEoggI46AdIM1gDaI4CiAEBmAEKuAEXyAEM2AEB6AEB-AEMiAIBqAIDuAKL2fSCBsACAdICJGRkMzg4MjU2LWM5NjAtNGI5MS05NTAxLTljZjNkMWEyYzQ5M9gCBuACAQ;sid=eab94be5fff7c7252cff069c631b6a23;all_sr_blocks=27039201_239763995_0_1_0;checkin=2021-07-10;checkout=2021-07-11;dest_id=-598739;dest_type=city;dist=0;from_beach_non_key_ufi_sr=1;group_adults=1;group_children=0;hapos=1;highlighted_blocks=27039201_239763995_0_1_0;hpos=1;no_rooms=1;req_adults=1;req_children=0;room1=A;sb_price_type=total;sr_order=popularity;sr_pri_blocks=27039201_239763995_0_1_0__17212500;srepoch=1616719103;srpvid=5804047e232700c6;type=total;ucfs=1&#hotelTmpl" target="_blank" style=" color: white">
                <div class="opacity opacity-transition  col-12">
                    <div class="show">
                        <p>Hotel Costa Azul</p>
                        <p>$172.000 persona/noche</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="position-relative col-12 col-mg-4 p-0 mb-5" style="height: 50vh; background: url(../img/hotel1.jpeg); background-size: cover;">
            <div class="d-block d-md-none color-white mr-3 position-absolute text-right" style="right: 0; bottom: 0">
                <p>Casa Konna</p>
                <p>Estadía compartida</p>
                <p>$99.000 persona/noche</p>
            </div>
            <a href="https://abnb.me/VRXWYsRxVeb" target="_blank" style=" color: white">
                <div class="opacity opacity-transition  col-12">
                    <div class="show">
                        <p>Casa Konna</p>
                        <p>Estadía compartida</p>
                        <p>$99.000 persona/noche</p>
                    </div>
                </div>
            </a>
        </div>
        <h3 class="fftb m-auto">Si deseas reservar en estadía compartida escribenos para ayudarte</h3>
    </div>
</div>
<div class="full-height mx-3 my-4 text-center">
    <div class="floating-card" id="map"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>

    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/carousel.js')}}"></script>

    <script type="text/javascript">
        function saveGiftId(id) {
            $('#giftId').val(id);
        }
    </script>
    <script type="text/javascript">
        function findAttendee() {
            var nameCode = $('#nameCode').val();
            $.ajax({
                headers: {
                    //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: "{{route('findAttendee')}}",
                method: "POST",
                data: {nameCode: nameCode},
                success: function (msg) {
                    $('#confirmAttendanceModal').fadeOut('slow', function () {
                        $("#confirmAttendanceModal").load(location.href + " #confirmAttendanceModal>*", function () {
                            $('#confirmAttendanceModal').show();
                        });
                    });
                },
                error: function (request, status, error) {
                    if (request.status == 404) {
                        alert("La invitación no fue encontrada. Verifique sus datos")
                    } else {
                        console.log(request.message);
                    }
                }
            });
        }

        function cancelAttendee() {
            $.ajax({
                headers: {
                    //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: "{{route('cancelAttendee')}}",
                method: "POST",
                data: {},
                success: function (msg) {
                    $('#confirmAttendanceModal').modal('hide');
                    $("#confirmAttendanceModal").load(location.href + " #confirmAttendanceModal>*", function () {
                    });

                },
                error: function (request, status, error) {
                    console.log(request.message);
                }
            });
            return false;
        }
    </script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjn6uQjll2HhwGi8L5_QTs4bAxAjqh5E0&callback=initMap&libraries=&v=weekly"
        async
    ></script>
<script>
    const mediaQuery = window.matchMedia('(min-width: 992px)')
    $(window).on("scroll", function() {
        $("#linksNavBar").css("opacity",1-(0.01*$(window).scrollTop()));
        if (mediaQuery.matches) {
            $("#logoNavBar").css("opacity", -0.5 + (0.01 * $(window).scrollTop()));
        }
        if(1-(0.01*$(window).scrollTop())<0.1){
            $("#linksNavBar").css("display",'none');
        }else{
            $("#linksNavBar").css("display",'block');
        }
    });
</script>
</body>

</html>
