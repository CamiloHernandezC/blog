@extends('layout')

@section('title') {{ __('general.About_Us') }} @endsection

@section('content')

        <div style="min-height: 100vh; height: 100vh">
            <iframe style="max-height: 50vh!important;" class="w-100 h-50 w-lg-50 d-block m-auto" src="//www.youtube.com/embed/4EDH1CwviqE" allowfullscreen></iframe>

            <h1 class="text-center mt-3">{{ __('general.Who_we_are') }} </h1>

            <div style="min-height: 100vh" class="mt-5">

                <div style="image-rendering: pixelated; background: url('../img/cami.jpg') no-repeat center center; background-size: cover; background-position-x: 30%;" class="floating-card floating-img d-block circle profile-image ml-auto mr-auto position-relative" alt="profile image"></div>
                <div class="floating-card floating-img-body w-lg-50 w-75 pb-4 px-4 w-lg-50 mx-auto mb-4 br-20">
                    <h1 class="font-jsff m-auto" style="width: fit-content">Cami</h1>
                    <div class="mt-3 text-justify">
                        <p>Yo soy un apasionado por el emprendimiento, por eso junto a meli creamos esta plataforma donde compartiremos nuestros gustos con ustedes.</p>
                        <p>Me verán hablar no solo de emprendimiento sino de finanzas, compartiendoles cada truco que use, tecnología -en especial del desarrollo de software que es en lo que trabajo profesionalmente y de Inteligencia Artifical que es un tema que me interesa demasido-</p>
                        <p>Incluso podames disctuir sobre series, películas, libros y hasta hablar de deportes, aun que más que discutir los marcadores o hacer apuestas deportivas me gusta practicar diferentes actividades y como soy una persona muy curiosa me encanta también aprender y <strong>disfrutar de cada instante.</strong></p>
                    </div>
                </div>
            </div>
        </div>
@endsection


@push('scripts')
@endpush
