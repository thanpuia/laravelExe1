<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
   
    public function index()
    {
        return view ('item.create');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $item = new Item();
        $item->id = $request['id'];
        $item->name = $request['name'];
        $item->price = $request['price'];
        $item->quantity = $request['quantity'];

        $item->save();


        return "success";
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
