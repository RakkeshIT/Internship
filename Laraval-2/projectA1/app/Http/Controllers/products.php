<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class products extends Controller
{
    //main page
    public function index()
    {
        //dispale the data in home page
        $displaydata = product::latest()->paginate(5);
        return view("templates.home", ['displaydata' => $displaydata]);
    }

    public function input()
    {
        return view("templates.inputpage");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'textarea' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'file' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $imagename = time() . "." . $request->file->extension();
        $request->file->move(public_path('brandimages'), $imagename);

        $Product = new product;

        $Product->file = $imagename;
        $Product->name = $request->name;
        $Product->textarea = $request->textarea;
        $Product->mrp = $request->mrp;
        $Product->price = $request->price;
        $Product->save();
        return back()->withSuccess('Product successsfully Stored...');

    }
    public function show($id)
    {
        $Product = Product::where('id', $id)->first();
        return view('templates.show', ['Product' => $Product]);
    }
    public function edit($id)
    {
        $Product = Product::where('id', $id)->first(); //select the product
        return view('templates.edit', ['Product' => $Product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'textarea' => 'required',
            'mrp' => 'required|numeric',
            'price' => 'required|numeric',
            'file' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $Product = Product::where('id', $id)->first();
        if (isset($request->file)) {
            $imagename = time() . "." . $request->file->extension();
            $request->file->move(public_path('brandimages'), $imagename);
            $Product->file = $imagename;
        }
        $Product->name = $request->name;
        $Product->textarea = $request->textarea;
        $Product->mrp = $request->mrp;
        $Product->price = $request->price;
        $Product->save();
        return back()->withSuccess('Product successsfully Updated...');
    }

    public function destroy($id)
    {
        $Product = Product::where('id', $id)->first();
        $Product->delete();
        return back()->withSuccess('Product successsfully deleted...');
    }
}
