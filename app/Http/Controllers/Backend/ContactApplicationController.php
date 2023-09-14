<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactApplicationController extends Controller
{
    public function index(){
        $contacts = Contact::all();
       
        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id){

        $contacts = Contact::find($id);
        if ( is_null ($contacts) ){
            
            return redirect('backend.contact.index');
        }
        else{
          
            $data = compact('contacts');
            return view('backend.contact.show')->with($data);
        }
    }

}
