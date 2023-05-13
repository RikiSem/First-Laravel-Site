<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex()
    {
        $fotos = self::hotLineFoto();
        $videos = self::hotLineVideo();
        return view('index',compact('videos','fotos'));
    }
    function hotLineFoto()
    {
        $fotos = foto::orderBy('id', 'DESC')->get();
        $lastFotos = [];
        for($i = 0;$i <= 5;$i++){
            array_push($lastFotos,$fotos[$i]);
        }
        //echo("");
        return $lastFotos;
    }
    function hotLineVideo()
    {
        $videos = video::orderBy('id', 'DESC')->get();
        $lastVideos = [];
        for($i = 0;$i <= 5;$i++){
            array_push($lastVideos,$videos[$i]);
        }
        return $lastVideos;
    }

    /*function getIp(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $zapros = "SELECT * FROM `IPs` WHERE `ip` = '$ip'";
        $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
        $numRow = mysqli_num_rows($result);
        if($numRow == 0){
            $zapros = "INSERT INTO `IPs`(`ip`) VALUES ('$ip')";
            $result = mysqli_query($link,$zapros) or die(mysqli_error($link));
        }
    }*/
}
