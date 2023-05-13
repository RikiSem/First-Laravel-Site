@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <h1>Загрузи фото</h1>
    <p>Загружать можно несколько фото сразу</p>
    <form enctype="multipart/form-data" action="{{route('load')}}" method="post">
        {{ csrf_field() }}
        <p><input name="fotos[]" accept=".png,.jpg,.jpeg" type="file" multiple></p>
        <input name="type" type="hidden" value="foto">
        <p><input type="submit" value="Загрузить"></p>
    </form>
@endsection
