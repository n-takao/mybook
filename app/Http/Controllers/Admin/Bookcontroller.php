<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
class Bookcontroller extends Controller
{
    //
    public function add()
    {
        return view('admin.book.create');
    }
    public function create(Request $request)
    {
        $this->validate($request, Book::$rules);
        
        $books = new Book;
        $form = $request->all();
        
        if(isset($form['image'])){
            $path = $request->file('image')->store('public/image');
            $books->image_path = basename($path);
        }else{
            $books->image_path = null;
        }
        
        unset($form['_token']);
        
        unset($form['image']);
        
        $books->fill($form);
        $books->save();
        
        return redirect('admin/book/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if($cond_title != ''){
            
            $posts = Book::where('title', $cond_title)->get();
        }else{
            
            $posts = Book::all();
        }
        return view('admin.book.index',['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
        $books = Book::find($request->id);
        if (empty($books)){
            abort(404);
            
        }
        return view('admin.book.edit',['books_form' => $books]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Book::$rules);
        
        $books = Book::find($request->id);
        
        $books_form = $request->all();
        if (isset($books_form['image'])){
            $path = $request->file('image')->store('public/image');
            $books->image_path = basename($path);
            unset($books_form['image']);
            
        }elseif(isset($request->renove)){
            $books->image_path = null;
            unset($books_form['renove']);
        }
        unset($books_form['_token']);
        
        $books->fill($books_form)->save();
        
        return redirect('admin/book');
    }
    public function delete(Request $request)
    {
        $books = Book::find($request->id);
        
        $books->delete();
        return redirect('admin/book/');
    }
}
