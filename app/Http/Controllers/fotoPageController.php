<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\hash;
use App\Models\video;
use Illuminate\Http\Request;

class fotoPageController extends Controller
{
    public function showPage()
    {
        $numPage = (int)$_GET['page'] ?? 1;
        $minID = $numPage * 20 - 20;
        $maxID = $numPage * 20;
        $fotos = foto::where([['id','>=',$minID], ['id','<',$maxID]])->orderBy('id', 'DESC')->get();
        $countPages = self::showPagination();
        return view('pageFoto',compact('fotos','countPages'));
    }
    function showPagination()
    {
        $videos = foto::all();
        $countPages = ceil(count($videos) / 20) + 1;
        return $countPages;
    }
    public function showFotoPage()
    {
        $id = $_GET['id'];
        $fotos = foto::find($id);
        $names = explode(" ",$fotos->name);
        $likes = $fotos->countLikes;
        return view('foto',compact('names','likes'));
        ::
    }

}
