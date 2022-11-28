<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\categories;
use App\Models\publishers;
use App\Models\book_category;
use App\Models\books;

class PublisherController extends Controller
{
    public function show(){
        $publishers = DB::select('select * from publishers');
        return view('publisher',['publishers' => $publishers]);
    }
}
