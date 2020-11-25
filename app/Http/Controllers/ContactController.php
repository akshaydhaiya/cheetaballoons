<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\TestEmail;
use App\Models\Contacts;

class ContactController extends Controller
{
        public function store(Request $req) 
    {
        // dd($req->all()); 
         $table = new Contacts;
 
         $table->message=$req->input('message');
         $table->name=$req->input('name');
         $table->email=$req->input('email');
         $table->phoneNo=$req->input('phoneNo');
 
         $table->save();
           
         $data=array(
          'message'  =>$req->message,
          'name'     =>$req->name,
          'email'    =>$req->email,
          'phoneNo'  =>$req->phoneNo,
          
         );

        //  $data = ['message' => 'This is a test!'];
       
                
         Mail::to('info@rockyrubber.com')->send(new TestEmail($data));

        
 
         return back()->with('Success','Thanks for contacting us!');
         
}
}
