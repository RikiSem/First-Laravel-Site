@extends('layouts.mainLayout')

@section('mid')
    <p style="font-size: 24px; text-align:center;">Здесь ты сможешь проверить подлинность фото, которое тебе скинули. Если она уже есть на сайте, то она найдется.</p>
    <form enctype="multipart/form-data" style="text-align: center;" action="{{route('check')}}" method="post">
        {{ csrf_field() }}
        <p><input name="fotos" accept=".png,.jpg,.jpeg" type="file"></p>
        <input type="hidden" value="true" name="check">
        <p><input type="submit" value="Проверить"></p>
    </form>
    @if(count($hashes) == 0)
        <p style='font-size: 24px; text-align:center;'>Совпадений не найдено</p>
    @elseif(count($hashes) > 0)
        <p style='font-size: 24px;text-align:center;'>Найдено совпадений:{{count($hashes)}}</p>
        @foreach($hashes as $hashe)
            <p><a href='foto.php?{{explode("_",$hashe)[0]}}'><img width='25%' height='25%' src = '../content/fotos/{{$hashe->fileName}}'></a></p>
        @endforeach
    @endif
@endsection
