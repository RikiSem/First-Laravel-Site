<?php

namespace App\Http\Controllers;

use App\Models\hash;
use Illuminate\Http\Request;

class checkFotoController extends Controller
{
    public function showPage()
    {
        $hashes= [];
        return view('checkFoto',compact('hashes'));
    }

    public function ShowCheck()
    {
        $file = $_FILES['fotos']['name'];
        move_uploaded_file($_FILES['fotos']['tmp_name'],"../content/checkFoto/".$file);
        $format = explode(".",$file)[1];
        if($format == "jpg"){
            $pic = imagecreatefromjpeg("../content/checkFoto/".$file);
        }else if($format == "png"){
            $pic = imagecreatefrompng("../content/checkFoto/".$file);
        }
        $width = imagesx($pic);
        $height = imagesy($pic);
        $hash = "";
        for($x = 0; $x < $width; $x++) {
            for($y = 0; $y < $height; $y++) {
                $color = imagecolorat($pic, $x, $y);
                $hash .= $color;
            }
        }
        $hash = substr($hash,0,1);
        $hashes = hash::where('hash','like',$hash.'%')->get();
        if(count($hashes) != 0){
            unlink("../content/checkFoto/".$file);
        }
        return view('checkFoto',compact('hashes'));
    }
}
