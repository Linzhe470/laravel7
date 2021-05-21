<?php

namespace App\Http\Controllers;

use App\Productype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductypeResourceController extends Controller
{
    //
    public function birth()
    {
        Productype::create([
            'name' => 'shirtless',
        ]);
        return redirect('/listss');
    }


    public function index()
    {
        $productypeData = Productype::get();
        return view('product/type_index_page', compact('productypeData'));
    }

    public function store(Request $request)
    {
        $requsetData = $request->all();
        Productype::create($requsetData);
    
        return redirect('/listss');
    }

    public function create()
    {
        return view('product/type_create_page');
    }


    public function show()
    {
        $productypeData = Productype::get();
        return view('/home', compact('newsData'));
    }


    public function update(Request $request, $id)
    {
        $productype = Productype::find($id);
        $requsetData = $request->all();
        $productype->update($requsetData);
        return redirect('/productype');

    }

    public function destroy($id)
    {
        $productype = Productype::find($id);
        $productype->delete();
        return redirect('/productype');

    }

    public function edit($id)
    {
        $productypeData =  Productype::find($id);
        return view('product/type_edit_page', compact('productypeData'));

    }

}
