@extends('layouts.site')

@section('content')
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        h1 {
            font: 25px Trebuchet MS;
            color: #4c4a4d;
            text-align: center;
        }

        h1 a {
            text-decoration: none;
        }

        p {
            font: 12px Arial;
            color: #4c4a4d;
            line-height: 20px;
            padding: 10px 30px 0 30px;
        }

        .info {
            background: #fff;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
            -moz-box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
            -webkit-box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
            box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
            color: #4e3c3c;
            position: relative;
            display: inline-block;
            width: 970px;
            font: 13px Arial;
            line-height: 20px;
            margin: 30px 0 0 0;
            padding: 10px 0 20px 0;
        }

        .info:before {
            left: 80px;
            top: -20px;
            width: 0px;
            height: 0px;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 20px solid #fff;
        }

        div:before, div:after {
            content: '';
            position: absolute;
        }

        table {
            width: 970px;
            background: #fff;
            margin-top: 30px;
            -moz-box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
            -webkit-box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
            box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
        }

        table tr td, tr th {
            vertical-align: top;
            text-align: left;
            padding-bottom: 20px;
        }

        table th:first-child {
            width: 50px;
            border-right: 1px solid #ccc;
            background: rgb(237, 237, 237);
            box-shadow: 0px 0px 3px rgba(90, 75, 99, 0.3);
        }

        table th:last-child {
            width: 320px;
            border-left: 1px dotted #e4e4ea;
        }

        table td:first-child {
            padding: 10px 10px 0 0;
        }

        table td:first-child span {
            font: 18px Trebuchet MS;
            color: #4c4a4d;
            display: block;
            margin: 5px 0 5px 30px;
            padding: 5px 20px 3px 20px;
            text-align: center;
            width: 92px;
            background: #f5f5fb;
        }

        table td:nth-child(2), td:nth-child(3) {
            padding-top: 10px;
        }

        table th {
            font: 26px Trebuchet MS;
            color: #4c4a4d;
            padding: 20px 20px 20px 30px;
            text-shadow: #ccc 1px 1px 3px;
            border-bottom: 1px solid #ccc;
        }

        table td:last-child {
            width: 320px;
            border-left: 1px dotted #e4e4ea;
        }

        .umnre {
            margin: 10px 0 20px 0;
        }

        .collt {
            float: left;
            background: #f6f6f6;
            margin: 0 20px 20px 0;
            padding: 10px 3px 20px 3px;
        }

        .tbleww {
            width: 650px;
            margin: 0 0 0 220px;
        }


    </style>

    <body class="hold-transition bg-img"
          style="background-image: url({{ asset('fab-admin/images/gallery/full/image-bg.jpg') }})"
          data-overlay="4">

    <div class="container h-p100">
        <div class="row justify-content-md-center align-items-center">
            <div class="col-md-8">
                <div class="box bg-transparent no-border no-shadow">
                    <div class="box-body text-center">
                        <h1 class="umnre">Таблица умножения</h1>

                        <script>
                            function printspl() {
                                document.write("<div class='tbleww'>");
                                for (i = 2; i <= 9; i++) {
                                    document.write("<div class='collt'>");
                                    for (j = 2; j <= 9; j++) {
                                        s = i * j;
                                        document.write("<p>" + i + " x " + j + " = " + s + "</p>");
                                    }
                                    document.write("</div>");
                                }
                                document.write("</div>");
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection

@section('js')
    <script>printspl()</script>
@endsection
