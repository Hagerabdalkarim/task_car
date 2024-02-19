<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.messages', compact('contacts'));
    }

    //display list of unreadmessage


    public function markAsUnread($id)
 {
    
    $contact = Contact::find($id);

    
    if (!$contact) {
        
        return redirect()->back()->with('error', 'Contact not found.');
    }

    $contact->unread = true;
    $contact->save();

  
    return redirect()->back()->with('success', 'Contact marked as unread.');
   }
       
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fristname' => 'required|string',
            'lastname' => 'required|string',
            'message'=>'required|string',
            'email' => 'required|string',
           
        ]);
        Contact::create($data);
        return redirect()->back();
    }

  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->back();
    }
        public function messages()
    {
        return[
           
            'fristname.required'=>'Please enter your  first name',
            'last.string'=>'Please enter your  Last name',
            'message.required'=> 'This field is required',
            'email.required'=> 'This field is required',
          
         ];
    }
}