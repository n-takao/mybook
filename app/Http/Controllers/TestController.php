<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function add()
    {
        $deta = ['mag'=>'これはコントローラーから渡されたメッセージです。'];
    return view('admin.book.test',$data);
    }
}
