@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Statistic</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img src="/uploads/avatars/{{ $user->avatar }}"
                             style="width: 50px; height: 50px; float: left; border-radius: 50%; margin-right: 25px">

                        <h3>{{ $user->name }}</h3>
                        <br>
                        @if( $testSuccess > 0 or $testFail > 0)
                            <div id="statistic"></div>
                            <p>Общее время: <span>{{ $all_time }} сек.</span></p>
                            <p>Среднее время, ответа на один вопрос: <span>{{ $all_time/$all_examples }} сек.</span></p>
                        @else
                            <p>Вы еще не проходили тесты</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Правильных ответов', {{ $testSuccess }} ],
                ['Не верных ответов', {{ $testFail }} ],
                // ['Eat', 2],
                // ['TV', 4],
                // ['Gym', 2],
                // ['Sleep', 8]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Тест таблицы умножения',
                'is3D': true,
                'width': 550,
                'height': 400,
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('statistic'));
            chart.draw(data, options);
        }
    </script>


@endsection
