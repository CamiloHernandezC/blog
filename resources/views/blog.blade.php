@extends('layout')

@section('title') {{$blog->titulo}} @endsection

@section('head-content')

    <meta property="og:url"                content="https://www.intraining.com.co/blog/{{$blog->slug}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$blog->titulo}}" />
    <meta property="og:image"              content="https://www.intraining.com.co/images/blogs/{{$blog->portada}}" />
    <meta property="og:image:alt" content="{{$blog->portada}}">
    <meta property="fb:app_id" content="364663920399879">
    <meta property="og:description"        content="{{$blog->description}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{asset('wysiwyg/content-tools.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">

@endsection

@section('content')
    <div class="container-fluid">
        @csrf

        <div data-editable data-name="main-content" class="m-auto mb-5 blog text-justify">
            {!! $blog->content !!}
        </div>

        <div style="width: max-content">
            <hr class="mb-4" style="border: solid 1px rgba(255,255,255,0.5); margin-top: 30vh!important;"/>
            <h2 class="d-inline-block mr-3 mb-0" style="vertical-align: middle">Compartir</h2>
            <a href="http://www.facebook.com/sharer.php?u=https://intraining.com.co/blog/{{$blog->slug}}" target="_blank">
                <img class="mr-3" src="{{asset('img/facebook.png')}}" width="50">
            </a>
        </div>
        <hr class="mt-4 mb-4" style="border: solid 1px rgba(255,255,255,0.5);"/>
        <h3 class=" d-inline-block mr-1 mb-3">Comentarios [<span class="color-bg-boy2">{{$blog->comments->count()}}</span>]</h3>
        @for ($i = 0; $i < $blog->comments->count(); $i++)
            <div class="floating-card bg-girl color-bg-boy2 p-3 mb-3">
                <h3><strong>{{$blog->comments[$i]->name}}</strong></h3>
                <p class="mb-0">{{$blog->comments[$i]->comment}}</p>
                <a class="cursor-pointer unselectable" style="color: black" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapse{{$i}}">reply</a>
                @if($blog->comments[$i]->replies->count() > 0)
                    <a class="cursor-pointer unselectable d-block ml-2" style="color: black" data-toggle="collapse" data-target="#collapseReplies" aria-expanded="false" aria-controls="collapseReplies">{{$blog->comments[$i]->replies->count()}} replies</a>
                @endif
                <div id="collapse{{$i}}" aria-expanded="false" class="collapse ml-5 mt-3">
                    <form id="replyForm{{$i}}" method="POST" action="{{route('replyComment', ['comment'=>$blog->comments[$i]])}}" autocomplete="off">
                        @csrf
                        <textarea required name="comment" placeholder="Escribe un comentario" style="font-size: 20px" maxlength="140" class="form-control h-auto mb-3"  rows="3"></textarea>
                        <div class="mb-3 mb-md-0">
                            <input required placeholder="name" name="name" class="col-md-4 p-3 mr-md-3 mb-3 mb-md-0">
                            <input required placeholder="Email" name="email" class="col-md-4 p-3">
                        </div>
                        <div class="clearfix">
                            <button class="btn bg-girl color-bg-boy2 float-right" >Comentar</button>
                        </div>
                    </form>
                </div>
                <div id="collapseReplies" aria-expanded="false" class="collapse ml-5 mt-3">
                    @foreach($blog->comments[$i]->replies as $reply)
                        <div style="border-left: solid 1px tomato; padding-left: 3vh" class="mb-4">
                            <h3><strong>{{$reply->name}}</strong></h3>
                            <p class="mb-0">{{$reply->comment}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endfor
        <hr class="mt-4 mb-4" style="border: solid 1px rgba(255,255,255,0.2);"/>
        <form id="comentarForm" method="POST" action="{{route('commentBlog', ['blog'=>$blog])}}" autocomplete="off">
            @csrf
            <textarea required name="comment" placeholder="Escribe un comentario" style="font-size: 20px" maxlength="140" class="form-control h-auto mb-3"  rows="3"></textarea>
            <div class="mb-3 mb-md-0">
                <input required placeholder="name" name="name" class="col-md-4 p-3 mr-md-3 mb-3 mb-md-0">
                <input required placeholder="Email" name="email" class="col-md-4 p-3">
            </div>
            <div class="clearfix mb-5">
                <button class="btn bg-girl color-bg-boy2 medium-font float-right" style="max-height: fit-content" >Comentar</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <!--para que el contenido de la página se pueda editar-->
    <script src="{{asset('wysiwyg/content-tools.min.js')}}"></script>
    <script src="{{asset('wysiwyg/editor.js')}}"></script>
@endpush
