@extends('layouts.site')

@section('css')
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/master_style.css') }}">

@endsection

@section('content')
    <body class="hold-transition bg-img"
          style="background-image: url({{ asset('fab-admin/images/gallery/full/image-bg.jpg') }})"
          data-overlay="4">

    <div class="container h-p100">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-8">
                <div class="box bg-transparent no-border no-shadow">
                    <div class="box-body text-center">

                        <div class="clear-loading spinner">
                            <span></span>
                        </div>

                        <h1 class="text-uppercase text-white">
                            <span class="font-size-50 font-weight-900">Сколько будет:</span><br>
                            <span class="font-size-64 font-weight-600">{{ $x . '*' . $y . '= ?' }}</span>
                        </h1>

                        <form class="mx-auto flexbox w-p75" method="post" action="{{ route('multiplication') }}">
                            @csrf
                            <input type="hidden" name="x" value="{{ $x }}">
                            <input type="hidden" name="y" value="{{ $y }}">

                            @foreach($mult as $value)
                                <input id="top-btn" type="submit" name="userrequest" value="{{ $value }}" class="btn btn-primary form-control rounded">
                            @endforeach

                        </form>
                        <br>
                        @if(session()->has('message'))
                            <div class="alert alert-success mx-auto flexbox w-p75">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-error mx-auto flexbox w-p75">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        <br>

                        <div class="alert alert-success mx-auto flexbox w-p75">
                            Колличество примеров: {{ session()->get('resp.count') }}
                        </div>

                        <div class="alert alert-success mx-auto flexbox w-p75">
                            Колличество правилиных ответов: {{ session()->get('resp.success') }}
                        </div>

                        <div class="alert alert-error mx-auto flexbox w-p75">
                            Колличество ошибок: {{ session()->get('resp.error') }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')
    <!-- jQuery 3 -->
    <script src="{{ asset('fab-admin/assets/vendor_components/jquery/dist/jquery.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

@endsection
