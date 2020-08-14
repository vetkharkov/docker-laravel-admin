@extends('layouts.site')

@section('content')
    <style>
        body {
            background-color: #c7b39b; /* Цвет фона */
            background: url({{ asset('fab-admin/images/gallery/full/math-1.jpg') }}) 100% 100% no-repeat; /* Добавляем фон */
            background-size: cover; /* Масштабируем фон */
            height: max-content; /* Высота блока */
        }

        h1 {
            text-align: center;
            color: #030ec4;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .nav-link {
            text-decoration: none;
            margin: 10px 10px;
            color: #0614c4;
            font-size: 22px;
        }
    </style>

    <body>
    <a class="nav-link" href="{{ route('home') }}">Вернуться к тестам</a>

    <h1>Таблица умножения</h1>
    <img src="{{ asset('fab-admin/images/gallery/full/table-mult.jpg') }}" alt="Таблица умножения" width="750" height="850" title="Таблица умножения">

    </body>

@endsection

@section('js')

@endsection
