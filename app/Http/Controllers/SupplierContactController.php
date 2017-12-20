<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class SupplierContactController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('SupplierPages.messages')->with('users', $users);
    }
    public function sendMessage(Request $request)
    {
        Mail::raw($request['msg'], function($message)use ($request){
            $message->from('gem@chocolatebar.lt', 'system');
            $message->to($request['receiver']);
        } );
        return redirect()->route('supplier_message');

    }

}
