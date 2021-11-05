@extends('layout')

@section('title') Blogs @endsection

@section('content')
    <div class="px-4 d-block d-lg-flex">

        <div class="ml-0 ml-lg-auto w-100 w-lg-50">
            @foreach($blogs as $blog)
                <div class="mb-5 blog-card" style="overflow: hidden; inset: 0px auto auto 0px; margin: 0px; cursor: default; border-radius: 0px; border-width: 1px; border-color: rgba(0, 0, 0, 0.1); border-style: solid; transition: opacity 0.2s ease 0s; opacity: 1; display: block;">
                <a style="text-decoration: none" class="d-block d-lg-flex h-100" href="/blog/{{$blog->slug}}">
                    <div style="height: 100%;" class="w-100 w-lg-40 h-50 h-lg-100">
                            <img alt="{{$blog->title}}"
                                 src="/img/blogs/{{$blog->cover}}"
                                 class="w-100 h-100" style=" image-rendering: pixelated">
                    </div>
                    <div class="m-auto w-100 w-lg-50" style="overflow: hidden; box-sizing: border-box; height: 100%;">
                        <article style="border-width: 0px; height: 100%;">
                            <div style="height: 100%;" class="py-5 px-4 d-flex flex-column flex-grow-1">
                                <div style="font-size: 12px;">
                                    <div>
                                        <div>
                                            <ul class="d-flex pl-0">
                                                <li style="overflow: hidden"><span title="{{$blog->created_at}}">{{$blog->created_at->format('d-m-Y')}}</span></li>
                                                <li style="overflow: hidden">
                                                    <div></div>
                                                </li>
                                                @if($blog->comments->count() > 0)
                                                    <li style="overflow: hidden" class="ml-auto">
                                                        <span title="comments">{{$blog->comments->count()}} {{ __('general.comments') }}</span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div style="overflow: hidden">
                                    <div style="font-size: 28px;">
                                        <h3><strong>
                                            <div style="-webkit-line-clamp: 3;">{{$blog->title}}
                                            </div>
                                            </strong>
                                        </h3>
                                    </div>
                                    <div>
                                        <div>
                                            <div>
                                                <div style="-webkit-line-clamp: 3; text-align: justify">{{$blog->description}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
        <!--Instagram-->
        <div class="ml-auto mr-auto mr-lg-5"
            loading="lazy"
            data-mc-src="5c2ead82-53cb-4bfc-aa41-da8c0ae6736a#instagram">
        </div>
    </div>
@endsection


@push('scripts')
    <!--Instagram-->
    <script
        src="https://cdn2.woxo.tech/a.js#616af38872a6520016a29c25"
        async data-usrc>
    </script>
@endpush
