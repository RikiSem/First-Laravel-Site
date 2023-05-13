@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <form class="loginForm" action="{{route('checkLogin')}}" method="post">
        {{ csrf_field() }}
        <p>Логин <input name="login" type="text"></p>
        <p>Пароль <input name="pass" type="password"></p>
        <p><input type="submit" value = "Войти"></p>
    </form>
@endsection

