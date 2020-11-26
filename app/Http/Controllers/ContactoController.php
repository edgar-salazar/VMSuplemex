<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
     //User
     public function Index()
     {
        $contacts = Contact::paginate();

         return view('Usuario.Contacto.Index', compact('contacts'));
     }
 
     
}
