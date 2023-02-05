<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<h2>Таблица
    <button id="myButton" class="hide" value="hide">Скрыть</button>
</h2>

<table id="myTable" class="table">
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Пользователь</th>
        <th>Создано</th>
        <th>Обновлено</th>
    </tr>

    @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
        </tr>
    @endforeach

</table>
</body>
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js')}}"></script>
</html>