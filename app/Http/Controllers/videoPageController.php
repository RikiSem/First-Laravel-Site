<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class videoPageController extends Controller
{
    public function showPage()
    {
        $numPage = (int)$_GET['page'] ?? 1;
        $minID = $numPage * 20 - 20;
        $maxID = $numPage * 20;
        $videos = video::where([['id','>=',$minID], ['id','<',$maxID]])->orderBy('id', 'DESC')->get();
        $countPages = self::showPagination();
        return view('pageVideo',compact('videos','countPages'));
    }
    function showPagination()
    {
        $videos = video::all();
        $countPages = ceil(count($videos) / 20) + 1;
        return $countPages;
    }
    public function showVideoPage()
    {
        $id = $_GET['id'];
        $videos = video::find($id);
        $names = explode(" ",$videos->name);
        return view('video',compact('names'));
    }
}
