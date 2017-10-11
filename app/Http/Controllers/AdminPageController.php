<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdministratorPages.admin');
    }

    public function Users()
    {
        return view('AdministratorPages.users');
    }

    public function Suppliers()
    {
        return view('AdministratorPages.suppliers');
    }

    public function Items()
    {
        return view('AdministratorPages.items');
    }
}
