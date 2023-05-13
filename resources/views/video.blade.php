@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    @foreach($names as $name)
        <p class = 'Loadimg'><iframe oncontextmenu='contextMenu(event)' src='content/videos/{{$name}}'height='500px' controls /></iframe></p>
    @endforeach
@endsection
