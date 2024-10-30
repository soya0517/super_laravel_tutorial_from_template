<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力
public function input()
{
    // Bladeで使う変数
    $hash = array(
        'subtitle' => '入力画面',
    );
    return view('contact.input')->with($hash);
}

public function confirm(Request $request)
{
    $data = $request->all();
    return view('contact.confirm', [ 'data => $data']);
}
}
