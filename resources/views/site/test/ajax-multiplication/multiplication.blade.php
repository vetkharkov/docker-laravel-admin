@extends('layouts.site')

@section('css')
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('fab-admin/main/css/master_style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        function getMessage(id) {
            var userrequest = $('#but-' + id).val();

            var x = $('#x').val();
            var y = $('#y').val();
            var count = $('#count').val();

            var correct = $('#correct').val();
            var fail = $('#fail').val();

            var startTimer = $('#startTimer').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('ajax-multiplication') }}',
                data: {
                    userrequest: userrequest,
                    x: x,
                    y: y,
                    count: count,
                    correct: correct,
                    fail: fail,
                    startTimer: startTimer,
                },
                headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    console.log(data);
                    $("#xy").html(data.x + '*' + data.y + '= ?');
                    $("#x").val(data.x);
                    $("#y").val(data.y);
                    $("#timer").val(data.timer);

                    var a = data.mult;//["a", "b", "c"];
                    var index;
                    for (index = 0; index < a.length; ++index) {
                        $("#but-" + index).val(a[index]);
                        $("#but-" + index).html(a[index]);
                        // console.log(a[index]);
                    }

                    if(data.msg == 'НЕ ВЕРНО') {
                        $("#msg").removeClass('alert-success');
                        $("#msg").addClass('alert alert-error');
                    } else {
                        $("#msg").removeClass('alert-error');
                        $("#msg").addClass('alert alert-success');
                    }


                    $("#msg").html(data.msg);

                    // $("#msg-count").html('Колличество примеров: ' + data.count);

                    $("#count").val(data.count);

                    $("#correct").val(data.correct);
                    // $("#suc").html("Колличество правилиных ответов: " + data.correct);

                    $("#fail").val(data.fail);
                    // $("#fl").html("Колличество ошибок: " + data.fail);

                    current_progress = (100 / $("#examples").val()) * ($("#examples").val() - data.count);
                    $("#progress")
                        .css("width", current_progress + "%")
                        .attr("aria-valuenow", current_progress)
                        .text(Math.round(current_progress) + "%");

                    if(data.count <= 0) {

                        var correct = $('#correct').val();
                        var fail = $('#fail').val();
                        var timerFinish = data.timerFinish;

                        $.ajax({
                            type: 'POST',
                            url: '{{ route('ajax-report-mult') }}',
                            data: {
                                count: count,
                                correct: correct,
                                fail: fail,
                                timer: $("#timer").val(),
                                timerStart: $("#startTimer").val(),
                                timerFinish: timerFinish,
                            },
                            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                            success: function (data) {
                                console.log(data);

                                var examples = $("#examples").val();
                                $("#report-count").html('Колличество примеров: ' + examples);

                                $("#report-success").html('Колличество правилиных ответов: ' + data.correct);
                                $("#report-fail").html('Колличество ошибок: ' + data.fail);

                                $("#timer-dif").html('Время: ' + data.timer + ' сек.');

                                $("#modal-info").modal('show');



                            },
                            error: function (data) {
                                console.log(data);
                                alert('Ошибка');

                            }
                        });
                    }

                },
                error: function (data) {
                    console.log(data);
                    alert('Ошибка' + data.msg);

                }
            });
        }
    </script>

    <script>

        $(document).ready(function(){
            $(document).on('hide.bs.modal','.modal', function () {
                window.location.replace("{{ route('home') }}");
            });
        });

    </script>


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
                            <span id="xy" class="font-size-64 font-weight-600">{{ $x . '*' . $y . '= ?' }}</span>
                        </h1>

                        <div class="mx-auto flexbox w-p75">

                            <input id="x" type="hidden" name="x" value="{{ $x }}">
                            <input id="y" type="hidden" name="y" value="{{ $y }}">

                            <input id="count" type="hidden" name="count" value="{{ $count }}">
                            <input id="examples" type="hidden" name="count" value="{{ $count }}">

                            <input id="startTimer" type="hidden" name="startTimer" value="{{ $startTimer }}">
                            <input id="timer" type="hidden" name="timer" value="0">

                            <input id="correct" type="hidden" name="correct" value="{{ $correct }}">
                            <input id="fail" type="hidden" name="fail" value="{{ $fail }}">

                            @foreach($mult as $id=>$value)
                                <button id="but-{{ $id }}"
                                        type="submit"
                                        onclick="getMessage({{ $id }})"
                                        name="userrequest"
                                        value="{{ $value }}"
                                        class="btn btn-primary rounded col-md-2 col-sm-1">
                                    {{ $value }}
                                </button>
                            @endforeach

                        </div>
                        <br>

                        <div class="progress">
                            <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated"
                                 role="progressbar"
                                 aria-valuenow="0"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 style="width: 0%">

                            </div>
                        </div>

                        <div id="msg" class="alert alert-success mx-auto col-md-2">Выбирай</div>

                        {{--<div id="msg-count" class="alert alert-success mx-auto flexbox w-p75">Время начало: {{ $startTimer }}</div>--}}

                        {{--<div id="msg-count" class="alert alert-success mx-auto flexbox w-p75">Колличество примеров: {{ $count }}</div>--}}

                        {{--<div id="suc" class="alert alert-success mx-auto flexbox w-p75">Колличество правилиных ответов:</div>--}}

                        {{--<div id="fl" class="alert alert-error mx-auto flexbox w-p75">Колличество ошибок:</div>--}}

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal modal-info fade" id="modal-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Результат теста</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p id="report-count" class="alert alert-secondary mx-auto flexbox w-p75">Колличество примеров:</p>

                    <p id="report-success" class="alert alert-success mx-auto flexbox w-p75">Колличество правилиных ответов:</p>

                    <p id="report-fail" class="alert alert-error mx-auto flexbox w-p75">Колличество ошибок:</p>

                    <p id="timer-dif" class="alert alert-warning mx-auto flexbox w-p75">Время:</p>

                </div>
                <div class="modal-footer">
                    <button id="modal-close" type="button" class="btn btn-outline btn-light float-right" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    @endsection

    @section('js')
        <!-- jQuery 3 -->
        <script src="{{ asset('fab-admin/assets/vendor_components/jquery/dist/jquery.js') }}"></script>

        <!-- Bootstrap 4.0-->
        <script src="{{ asset('fab-admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>

    @endsection


