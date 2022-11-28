<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\categories;
use App\Models\publishers;
use App\Models\book_category;
use App\Models\books;

class BookCategoryController extends Controller
{
    public function showbio(){
        $biography = DB::select('select * from books b join book_category bc on b.id=bc.book_id where bc.category_id=1');
        return view('biography',['biography' => $biography]);
    }

    public function showcom(){
        $comic = DB::select('select * from books b join book_category bc on b.id=bc.book_id where bc.category_id=2');
        return view('comic',['comic' => $comic]);
    }

    public function showen(){
        $encyclopedia = DB::select('select * from books b join book_category bc on b.id=bc.book_id where bc.category_id=3');
        return view('encyclopedia',['encyclopedia' => $encyclopedia]);
    }

    public function shownov(){
        $novel = DB::select('select * from books b join book_category bc on b.id=bc.book_id where bc.category_id=4');
        return view('novel',['novel' => $novel]);
    }
}
