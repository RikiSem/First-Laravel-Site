<?php

namespace App\Http\Controllers;

use App\Models\bufferpic;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showAdminPage(){
        $bufferPics = self::showBufferPics();
        return view('adminPage',compact('bufferPics'));
    }

    public function login()
    {
        if(session()->exists('login')){
            return redirect()->to(route('adminPage'));
        }else{
            return redirect()->to(route('adminPage'));
            //return view('adminLogin');
        }
    }

    function showBufferPics()
    {
        $bufferpics = bufferpic::all();
        return $bufferpics;
    }


    public function checkLogin()
    {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $users = User::where([['login','=',$login],['pass','=',$pass]])->get();
        if(count($users) != 0){
            session([
                'login' => $login
            ]);
            return redirect(route('adminPage'));
        }else{
            return redirect(route('index'));
        }
    }
}
