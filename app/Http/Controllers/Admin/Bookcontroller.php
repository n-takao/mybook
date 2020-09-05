<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Bookcontroller extends Controller
{
    //
    public function add()
    {
        return view('admin.book.create');
    }
    public function create(Request $request)
    {
        return redirect('admin/book/create');
    }
}
