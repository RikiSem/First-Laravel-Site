<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;

class loadFotoController extends Controller
{
    public function showPage()
    {
        return view('loadFoto');
    }
    public function load()
    {
        if($_FILES['fotos']['name'] == ""){
            return redirect(route('loadFoto'));
        }else{
            header("Location: ../loadFoto.php");
            $files = $_FILES['fotos']['name'];
            $filenames = "";
            $countFoto = count($files);
            for($i=0;$i<>count($files);$i++){
                $nameFoto = $_FILES["fotos"]["name"][$i];
                move_uploaded_file($_FILES["fotos"]["tmp_name"][$i],"../../content/buffer/".$nameFoto);
                $filenames .= $nameFoto . " ";
                $fileName = $_FILES["fotos"]["name"][$i];
            }
            $filenames = substr($filenames, 0, strlen($filenames) - 1);
            foto::create([
                'fotoLink' => $filenames,
            ]);
            return redirect(route('index'));
        }
    }

}
