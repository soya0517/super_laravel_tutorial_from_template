<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller{

    public function confirm(Request $request){ // DIの記述必須！

        $name = $request['name'];   // 「名前」の入力値を取り出す
        $email = $request['email']; // 「email」の入力値を取り出す

        return $name."-".$email;
    }
    public function index()
    {
        return view('form');
    }
    // 入力
    public function input()
    {
        // Bladeで使う変数
        $hash = array(
            'subtitle' => '入力画面',
        );
        return view('contact.input')->with($hash);
    }
}


