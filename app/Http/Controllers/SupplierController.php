<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Supplier;
use App\Item;
use App\User;

class SupplierController extends Controller
{
    public function index()
    {
        return view('SupplierPages.supplier');
    }

    public function profile()
    {
        return view('SupplierPages.supplier');
    }

    public function items()
    {
        return view('SupplierPages.supplier');
    }
}
