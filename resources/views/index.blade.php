@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <span class="headerHotLine">Свежие фото сливы</span>
    <div class="hotLineFoto">
        @foreach($fotos as $foto)
            <a style='margin-left:10px;margin-right:10px;' href='foto?id={{$foto->id}}'>
                <img onclick='adsShow()' width='250px' height='250px' src='content/fotos/{{$foto}}' alt='УПС'>
            </a>
        @endforeach
    </div>
    <span class="headerHotLine">Свежие видео сливы</span>
    <div class="hotLineVideo">
        @foreach($videos as $video)
            <a style='margin-left:10px;margin-right:10px;' href='video?id={{$video->id}}'>
                <video onclick='adsShow()' oncontextmenu='contextMenu(event)' src='content/videos/{{explode(" ",$video->name)[0]}}' width='250' height='250'/>
            </a>
        @endforeach
    </div>
    <div>
        <p>Все люди, показанные на данном сайте достигли возраста 18 лет! Мы против педофилии!</p>
        <div class="adsTable">
            <div id='_2376343' class='_5cf202c62002f'></div>
            <div id='_2376344' class='_5cf202c62002f'></div>
        </div>
    </div>
@endsection
