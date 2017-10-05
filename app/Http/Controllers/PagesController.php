<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PagesController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('ClientPages.index')->with('items', $items);
    }
}
