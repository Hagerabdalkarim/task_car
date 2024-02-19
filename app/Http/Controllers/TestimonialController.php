<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('Admin.Testimonials.list', compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Testimonials.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name'=>'required|max:50',
            'postion'=>'required|max:50',
            'content'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
       $fileName = $this->uploadFile($request->image, 'admin/images');    
        $data['image'] = $fileName;
        $data['active'] = isset($request->active);   
         Testimonial::create($data);
        return redirect('testimonials');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('Admin.Testimonials.update', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name'=>'required|max:100',
            'postion'=>'required|max:50',
            'content'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            ],$messages);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'admin/images');  
            $data['image'] = $fileName;
            unlink("admin/images/" . $request->oldImage);
        }
        
        $data['active'] = isset($request->active);
        Testimonial::where('id', $id)->update($data);
        return redirect('testimonials');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect('testimonials');
    }

     
    public function messages()
    {
        return[
            'name.required'=>'Please enter your name',
            'postion.string'=>'Should be string',
            'comment.required'=> 'This field is required',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            ]; 
    }
}

