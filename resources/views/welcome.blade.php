<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tests</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="{{ asset('js/jquery.ripples.js') }}"></script>

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/master_style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; }
        html {
            height: 100%;
        }

        body {
            color: #535db9;
            background-image: url({{ asset('uploads/images/Backgrounds_water.jpg') }});
            background-size: cover;
            background-position: 50% 0;
            height: 100%;
            width: 100%;
        }

        .word {
            font-family: 'Merriweather', sans-serif;
            perspective: 1000px;
            perspective-origin: 200px 40px;
            padding-bottom: 20px;
            text-shadow: 1px 1px 2px black, 0 0 1em red; /* Параметры тени */
            color: #4ee344; /* Белый цвет текста */
        }

        .word span {
            cursor: pointer;
            display: inline-block;
            font-size: 100px;
            user-select: none;
            line-height: .8;
        }

        .word span:nth-child(1).active {
            animation: balance 1.5s ease-out;
            transform-origin: 0% 100% 0px;
        }

        @keyframes balance {
            0%, 100% {
                transform: rotate(0deg);
            }

            30%, 60% {
                transform: rotate(-45deg);
            }
        }

        .word span:nth-child(2).active {
            animation: shrinkjump 1s ease-in-out;
            transform-origin: bottom center;
        }

        @keyframes shrinkjump {
            10%, 35% {
                transform: scale(2, .2) translate(0, 0);
            }

            45%, 50% {
                transform: scale(1) translate(0, -150px);
            }

            80% {
                transform: scale(1) translate(0, 0);
            }
        }

        .word span:nth-child(3).active {
            animation: falling 2s ease-out;
            transform-origin: bottom center;
        }

        @keyframes falling {
            12% {
                transform: rotateX(240deg);
            }

            24% {
                transform: rotateX(150deg);
            }

            36% {
                transform: rotateX(200deg);
            }

            48% {
                transform: rotateX(175deg);
            }

            60%, 85% {
                transform: rotateX(180deg);
            }

            100% {
                transform: rotateX(0deg);
            }
        }

        .word span:nth-child(4).active {
            animation: rotate 1s ease-out;
        }

        @keyframes rotate {
            20%, 80% {
                transform: rotateY(180deg);
            }

            100% {
                transform: rotateY(360deg);
            }
        }

        .word span:nth-child(5).active {
            animation: toplong 1.5s linear;
        }

        @keyframes toplong {
            10%, 40% {
                transform: translateY(-48vh) scaleY(1);
            }

            90% {
                transform: translateY(-48vh) scaleY(4);
            }
        }

        .fixed {
            position: fixed;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .dropdown-item {
            z-index: 999999;
        }

        .navbar-light .navbar-brand {
            color: rgba(196, 218, 247, 0.9);
            font-family: 'Merriweather', sans-serif;
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgb(250, 250, 253);
        }


    </style>

</head>
<body>


<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            Школьные тесты
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li></li>--}}
            {{--</ul>--}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown" style="position: relative; padding-left: 50px">
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                             style="width: 32px; height: 32px; position: absolute; top: 3px; left: 10px; border-radius: 50%;">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ url('/admin') }}">Adminzone</a>
                            <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ url('/statistic') }}">Statistic</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<br>

<div class="container">

    {{--<h1 class="text-center word">Тесты на проверку знания таблицы умножения</h1>--}}
    <div class="word text-center">
        <span>Т</span>
        <span>е</span>
        <span>с</span>
        <span>т</span>
        <span>ы</span>
    </div>

    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="box p-60 text-center border-primary" style="margin-top:0px">
                <h4 class="text-primary text-uppercase">Уровень-1</h4>
                <br>
                <p>Самый лёгкий тест</p>
                <p>Включает в себя</p>
                <br>
                <h3 class="price text-primary">
                    10
                    <span>вопросов</span>
                </h3>
                <a class="btn btn-outline btn-primary" href="{{ route('ajax-mult') }}?c=10">
                    <i class="fa fa-play"></i> Начать
                </a>

            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="box p-60 text-center bg-warning">
                <h4 class="text-white text-uppercase">Уровень-2</h4>
                <br>
                <p>Тест</p>
                <p>Включает в себя</p>
                <br>
                <h3 class="price text-white">
                    25
                    <span class="text-white">вопросов</span>
                </h3>
                <a class="btn btn-outline btn-light" href="{{ route('ajax-mult') }}?c=25">
                    <i class="fa fa-play"></i> Начать
                </a>
            </div>
        </div>



        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="box p-60 text-center bg-success">
                <h4 class="text-white text-uppercase">Уровень-3</h4>
                <br>
                <p>Тест</p>
                <p>Включает в себя</p>
                <br>
                <h3 class="price text-white">
                    50
                    <span class="text-white">вопросов</span>
                </h3>
                <a class="btn btn-outline btn-light" href="{{ route('ajax-mult') }}?c=50">
                    <i class="fa fa-play"></i> Начать
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="box p-60 text-col-sm-6 text-center bg-danger">
                <h4 class="text-white text-uppercase">Уровень-4</h4>
                <br>
                <p>Самый сложный тест</p>
                <p>Включает в себя</p>
                <br>
                <h3 class="price text-white">
                    100
                    <span class="text-white">вопросов</span>
                </h3>
                <a class="btn btn-outline btn-light" href="{{ route('ajax-mult') }}?c=100">
                    <i class="fa fa-play"></i> Начать
                </a>
            </div>
        </div>

    </div>
</div>


<script>

    $(function () {
        $('body').ripples({
            resolution: 512,
            dropRadius: 20,
            perturbance: 0.04,
        });
        $('.container').ripples({
            resolution: 512,
            dropRadius: 20,
            perturbance: 0.04,
        });
    })

</script>

<script>

    let spans = document.querySelectorAll('.word span');
    spans.forEach((span, idx) => {
        span.addEventListener('click', (e) => {
            e.target.classList.add('active');
        });
        span.addEventListener('animationend', (e) => {
            e.target.classList.remove('active');
        });

        // Initial animation
        setTimeout(() => {
            span.classList.add('active');
        }, 750 * (idx+1))
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
