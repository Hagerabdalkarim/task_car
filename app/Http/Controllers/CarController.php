<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;

    public function index()
    {
        $cars = Car::get();
        return view('Admin.cars.list', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::get();
        return view('Admin.cars.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $messages = $this->messages();
        $data = $request->validate([
             'title'=>'required|string|max:50',
             'price'=>'required|numeric|between:0,999999.99',  
             'doors' => 'required|integer|between:1,4',
             'luggage' => 'required|integer|between:1,6',
             'passenger' => 'required|integer|between:1,8',
             'content'=> 'required|string',
             'category_id'=> 'required|exists:categories,id',
             'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ],$messages);  

        $fileName = $this->uploadFile($request->image, 'admin/images');    
        $data['image'] = $fileName;
        $data['active'] = isset($request->active);
        Car::create($data);
        return redirect('cars');
    }

    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
         $categories= Category::get();
        return view('Admin.cars.update', compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'title'=>'required|string|max:50',
             'price'=>'required|numeric|between:0,999999.99',  
             'doors' => 'required|integer|between:1,4',
             'luggage' => 'required|integer|between:1,6',
             'passenger' => 'required|integer|between:1,8',
             'content'=> 'required|string|max:100',
             'category_id'=> 'required',
             'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            ],$messages);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'admin/images');  
            $data['image'] = $fileName;
            unlink("admin/images/" . $request->oldImage);
        }
        
        $data['active'] = isset($request->active);
        Car::where('id', $id)->update($data);
        return redirect('cars');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return redirect('cars');
    }

    public function messages(){
        return [
            'title.required'=>'this title is required',
            'title.string'=>'Should be string',
            'price.required'=> ' this price is required',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'doors.required'=>'this field is required',
            'luggage.required'=>'this field is required',
            'passenger.required'=>'this field is required',
            'content.required'=>'this field is required',
            'content.string'=>'Should be string',
            'category_id.required'=>'this field is required',
            ];
    }
}

