<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{

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
       
        return view('Admin.cars.add');
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
        ],$messages);
        //      'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        //      'category_id'=> 'required',
           
        // $fileName = $this->uploadFile($request->image, 'assets/images');    
        // $data['image'] = $fileName;
        $data['active'] = isset($request->active);
        Car::create($data);
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $car = Car::findOrFail($id);
    //     return view('showCar', compact('car'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('Admin.cars.update', compact('car'));
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
             
            //  'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            //  'category_id' => 'required',
            ],$messages);

        // if($request->hasFile('image')){
        //     $fileName = $this->uploadFile($request->image, 'assets/images');  
        //     $data['image'] = $fileName;
        //     unlink("assets/images/" . $request->oldImage);
        // }
        
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
            // 'image.required'=> 'Please be sure to select an image',
            // 'image.mimes'=> 'Incorrect image type',
            // 'image.max'=> 'Max file size exceeded',
            ];
    }
}

