<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/utils.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div class="full-height w-100 w-lg-100  meeting-container">
    <!--
    <div id="meet">

    </div>
    -->
    <iframe class="h-100 h-lg-100" allow="camera; microphone; fullscreen; display-capture" src="https://meet.jit.si/curso_asesoria_06112020" style="width: 100%; border: 0px;"></iframe>
</div>

<!--jQuery, Popper.js, and Bootstrap JS All of them required by bootstrap-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="{{asset('js/handwrite_animation.js')}}" type="text/javascript"></script>
<script src="{{asset('js/nav_animation.js')}}" type="text/javascript"></script>

<!--
<script src='https://meet.jit.si/external_api.js'></script>
<script>
    const domain = 'meet.jit.si';
    const options = {
        roomName: 'JitsiMeetAPIExample',
        configOverwrite: { startWithAudioMuted: true },
        displayName: 'Meli',
        width: 700,
        height: 700,
        parentNode: document.querySelector('#meet')
    };
    const api = new JitsiMeetExternalAPI(domain, options);
</script>
-->
</html>
