<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Hrrp\Requests\BookRequest;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getCreatePage(){
        return view('create');  
    }

    public function createBook(BookRequest $request){
        Book::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'release'=>$request->release,
            'price'=>$request->price,
            'genreId' => $request->genreId
        ]);

        return redirect(route('getBooks'));
    }
    public function getBooks(){
        $books = Book::all();
        return view('view',['books'=> $books]);
    }

    public function getBookById($id){
        $book = Book::find($id);
        return view('update',['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);

        // $book->title = $request -> title;
        // $book->author = $request-> author;
        // $book->release = $request-> release;
        // $book->price = $request-> price;
        // $book->save();

        $book -> update([
            'title'=>$request->title,
            'author'=>$request->author,
            'release'=>$request->release,
            'price'=>$request->price,
        ]);
        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}
