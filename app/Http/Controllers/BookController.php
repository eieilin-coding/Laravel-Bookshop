<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
     public function index()
    {
        $data = Book::latest()->paginate(8);
        return view('books.index', ['books' => $data]);
    }
    public function detail($id)
    {
        $data = Book::find($id);

        return view('books.detail', [
            'book' => $data
        ]);
    }

    // public function add()
    // {
    //    $categories = Category::all();
    //     return view('books.add', ['categories' => $categories]);
    // }

    public function create()
    {
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            // 'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $book = new Book;
        $book->title = request()->title;
        $book->body = request()->body;
        $book->category_id = request()->category_id;
       
        $book->save();

        return redirect('/books');
    }

    public function delete($id)
    {
        $book = Book::find($id);
       
            $book->delete();
            return redirect('/books')->with('info', 'book deleted');
    
    }

}
