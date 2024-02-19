<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;


class TeamController extends Controller
{
    public function index()
    {

        $teams = Team::get();
        return view('Admin.Users.list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('Admin.Users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $messages = $this->messages();
        $data = $request->validate([
             'name'=>'required|string',
             'username'=>'required|string',  
             'email' => 'required|string',
             'pass' => 'required|string|max:8',
             'created_at'=>'date',
        ],$messages);  
        $data['published'] = isset($request->published);
        Team::create($data);
        return redirect('teams');
    }

    public function edit(string $id)
    {
        $team = Team::findOrFail($id);
      
        return view('Admin.Users.update', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name'=>'required|string',
             'username'=>'required|string',  
             'email' => 'required|string',
             'pass' => 'required|string|max:8',
             'created_at'=>'date',
            ],$messages);

       
        
        $data['published'] = isset($request->published);
        Team::where('id', $id)->update($data);
        return redirect('teams');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::where('id', $id)->delete();
        return redirect('teams');
    }

    public function messages(){
        return [
            'name.required'=>'this name is required',
            'username.string'=>'Should be string',
            'email.required'=> ' this field is required',  
            'pass.required'=>'this field is required',
           
            ];
    }
}
