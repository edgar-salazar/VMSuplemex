<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
     //User
     public function IndexContacto()
     {
        $contacts = Contact::paginate();

         return view('Usuario.Contacto.IndexContacto', compact('contacts'));
     }
 
     //Admin
     public function Index()
     {
         $contacts = Contact::paginate();

         return view('admin.Contacto.Index', compact('contacts'));
     }

     public function Create(){
         return view('admin.Contacto.Create');
     }

     public function Store(Request $request){
        $contact = new Contact();

        $contact->local = $request->local;
        $contact->address = $request->address;
        $contact->cp = $request->cp;
        $contact->region = $request->region;
        $contact->ope = $request->ope;
        $contact->clo = $request->clo;
        $contact->phone = $request->phone;
        $contact->cellphone = $request->cellphone;
        $contact->mail = $request->mail;
        $contact->facebook = $request->facebook;
        $contact->map = $request->map;

        $contact->save();

        return redirect()->route('contacto.Show', $contact->id); 
     }

     public function Show(Contact $contact){

        return view('admin.contacto.Show', compact('contact'));
    }

    public function Edit(Contact $contact){
        return view('admin.contacto.Edit', compact('contact'));
    }

    public function Update(Request $request, Contact $contact){
        $contact->local = $request->local;
        $contact->address = $request->address;
        $contact->cp = $request->cp;
        $contact->region = $request->region;
        $contact->ope = $request->ope;
        $contact->clo = $request->clo;
        $contact->phone = $request->phone;
        $contact->cellphone = $request->cellphone;
        $contact->mail = $request->mail;
        $contact->facebook = $request->facebook;
        $contact->map = $request->map;
        
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalname();
            $file->move(public_path().'/images/', $name);
        }
        $contact->name= $request->input('name');
        

        $contact->save();

        return redirect()->route('contacto.Show', $contact->id);
    }

    public function Delete(Contact $contact){
        return view('admin.contacto.Delete', compact('contact'));
    }

    public function Destroy(Contact $contact){
        $contact->delete();

        return redirect()->route('contacto.Index');
    }
}
