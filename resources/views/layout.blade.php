<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - M y C</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">

    @yield('head-content')
</head>
<body data-spy="scroll" data-target=".navbar">

<div class="jsff sticky-top text-center bg-girl floating-card mx-3 rounded-20px" style="height: 10vh; border-top-left-radius: 0px!important; border-top-right-radius: 0px!important">
    <h1 id="logoNavBar" class="color-white w-100 m-auto position-absolute"><span class="iheart">m</span>c</h1>
    <nav id="linksNavBar" class="navbar navbar-expand-lg navbar-dark text-center w-100 position-absolute" style="background: transparent">
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent" style="font-family: 'Times New Roman'; font-style: italic">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="{{route('blogs')}}">Blogs</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<main class="py-4" style="font-family: 'Times New Roman'; font-style: italic">
@yield('content')
</main>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script src="{{ asset('js/navbar.js') }}" defer></script>

@stack('scripts')

</html>
