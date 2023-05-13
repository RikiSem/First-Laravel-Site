@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <div class = "pagination">
        @for($i = 1; $i != $countPages;$i++)
            <a class='numPage' href='pageVideo?page={{$i}}'>
                {{$i}}
            </a>
        @endfor
    </div>
    <div class="middlePageVideo">
        @foreach($videos as $video)
            <a style='margin-left:5px;margin-right:5px;' href='video?id={{$video->id}}'>
                <video onclick='adsShow()' oncontextmenu='contextMenu(event)' src='content/videos/{{explode(" ",$video->name)[0]}}' width='250' height='250'/>
            </a>
        @endforeach
    </div>
@endsection
