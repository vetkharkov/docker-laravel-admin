<h1>Всего примеров: {{ $count }}</h1>
<h1>Правильных ответов: {{ $success }}</h1>
<h1>Ошибок: {{ $error }}</h1>
<p>Начало теста: {{ $start }}</p>
<br>
<p>Окончание теста: {{ $end }}</p>
<p>Тест пройден за: {{ $dif }} секунд</p>
<br>
<a href="{{ route('home') }}">Вернуться</a>
<br>
<a href="{{ route('tablica') }}">Таблица умножения</a>
