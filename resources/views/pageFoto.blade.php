@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <div class = "pagination">
        @for($i = 1; $i != $countPages;$i++)
            <a class='numPage' href='pageFoto?page={{$i}}'>
                {{$i}}
            </a>
        @endfor
    </div>
    <div class="middlePageFoto">
        @foreach($fotos as $foto)
            <div class='fotoDiv'>
                <a href='foto?id={{$foto->id}}'>
                    <img onclick='adsShow()' oncontextmenu='contextMenu(event)' width='250' height='250' src='../content/fotos/{{explode(" ",$foto->name)[0]}}' alt='Упс('>
                </a>
            </div>
        @endforeach
    </div>
@endsection
