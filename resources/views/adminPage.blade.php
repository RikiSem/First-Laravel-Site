@extends('layouts.mainLayout')
@section('metas')
    <meta name="description" content="Сайт, Где собраны лучшие сливы порно фото и порно видео из анонимного чата в телеграмм">
@endsection
@section('mid')
    <a href='sysPages/truncateBufferPics.php'><button>Удалить картинки</button></a>
    <div class="bufferPics">
        <table border="1" style="margin-left:auto;margin-right:auto;">
            <tr><th>Картинки</th><th>Ссылки на картинки</th></tr>
            @foreach($bufferPics as $bufferPic)
                <tr>
                    <td>
                        @foreach(explode(" ",$bufferPic->fotoLink) as $pic)
                            <img src='content/buffer/{{$pic}}' width='20%' height='20%' alt='Упс'>
                        @endforeach
                    </td>
                    <td>
                        -
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

