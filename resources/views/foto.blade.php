@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    @foreach($names as $name)
        <p class = 'Loadimg'><img width='50%' height='50%' src='content/fotos/{{$name}}' alt=''></p>
    @endforeach
    <div class='likesDiv'>
        <p>
            <button onclick="setLike()">Нравится</button>
            <span>{{}}</span>
        </p>
    </div>
@endsection

