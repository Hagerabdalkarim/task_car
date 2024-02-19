<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;



class CategoryController extends Controller
{

   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories = Category::get();
        return view('Admin.Categories.list', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'cat_name'=>'required|max:50',
            
        ], $messages);
      
        Category::create($data);
        return redirect('categories');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.Categories.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'cat_name'=>'required|max:50',   
        ], $messages);
        Category::where('id', $id)->update($data);
        return redirect('categories');
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Category::where('id', $id)->delete();
        return redirect('categories');
    }
      
    public function messages()
    {
        return[
            'cat_name.required'=>'please enter name category',   
            ]; 
    }
}

