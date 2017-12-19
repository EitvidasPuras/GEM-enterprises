<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Illuminate\Support\Facades\Auth;

class SupplierItemsController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $items = Item::where('supplier_id',$id)->orderBy('id', 'asc')->paginate(10);
        return view('SupplierPages.items')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('SupplierPages.item.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Cover Image Upload
        if ($request->hasFile('cover_image')) {
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
            //Get file name
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noImage.jpg';
        }

        //Create Item
        $item = new Item;
        $item->name = $request['name'];
        $item->price = $request['price'];
        $item->amount = $request['amount'];
        $item->category_id = $request['category'];
        $item->supplier_id = $id = Auth::user()->id;;
        $item->description = $request['description'];
        $item->cover_image = $fileNameToStore;
        $item->sold = "0";
        $item->save();

        return redirect()->route('supplier.items.index')->with('success', 'Product got added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        // $user_role_id = DB::table('user_role')->where('user_id', $id)->value('role_id');
        //$role = DB::table('roles')->where('id', $user_role_id)->first();

        return view('SupplierPages.item.edit', ['categories' => $categories, 'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Cover Image Upload
        if ($request->hasFile('cover_image')) {
            $fileNameWithExtension = $request->file('cover_image')->getClientOriginalName();
            //Get file name
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noImage.jpg';
        }

        //Update Item
        $item = Item::find($id);
        $item->name = $request['name'];
        $item->price = $request['price'];
        $item->amount = $request['amount'];
        $item->category_id = $request['category'];
        //$item->supplier_id = "0";
        $item->description = $request['description'];
        if ($fileNameToStore != "noImage.jpg") {
            $item->cover_image = $fileNameToStore;
        }
        $item->save();

        return redirect()->route('supplier.items.index')->with('success', 'Product got edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('supplier.items.index')->with('success', 'Item Removed');
    }
}
