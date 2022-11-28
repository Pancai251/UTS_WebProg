<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\categories;
use App\Models\publishers;
use App\Models\book_category;
use App\Models\books;

class BookController extends Controller
{
    public function showAll(){
        $books = DB::select('select * from books');
        return view('home',['books' => $books]);
    }

}
