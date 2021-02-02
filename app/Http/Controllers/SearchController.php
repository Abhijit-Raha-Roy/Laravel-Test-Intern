<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class SearchController extends Controller
{
    function search(Request $req)
    {
        
        $data = Product::
        where('price', 'like' , '%'.$req->input('query').'%')
        ->orwhere('exdate', 'like' , '%'.$req->input('query').'%')
        ->get();
        return view('search',['product'=>$data]);
    }
}
