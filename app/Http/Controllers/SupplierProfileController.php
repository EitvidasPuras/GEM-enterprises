<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $supplier = Supplier::where('user_id', $id)->first();
        return view('SupplierPages.profile')->with('supplier', $supplier);
    }

    public function storeProfileInfo(Request $request)
    {
        $this->validate($request, [
            'Cname' => 'required',
            'Ccode' => 'required',
            'Bcode' => 'required',
            'Caddress' => 'required',
            'Pnumber' => 'required'
        ]);

        //Create Item
        $id = Auth::user()->id;
        $supplier = new Supplier;
        $supplier->companyName = $request['Cname'];
        $supplier->companyCode = $request['Ccode'];
        $supplier->bankCode = $request['Bcode'];
        $supplier->address = $request['Caddress'];
        $supplier->phoneName = $request['Pnumber'];
        $supplier->user_id = $id;
        $supplier->save();

        return redirect()->route('supplier_profile')->with('success', 'Your company information got updated');

    }
}
