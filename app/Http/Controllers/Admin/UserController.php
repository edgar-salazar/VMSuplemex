<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin
    public function Index()
    {
        $users = User::all();

        return view('admin.Usuarios.Index', compact('users'));
    }

    public function Create(){
        return view('admin.Usuarios.Create');
    }

    public function Store(Request $request){
       $user = new User();

       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       
       
       $user->save();

       return redirect()->route('Usuarios.Show', $user->id); 
    }

    public function Show(User $user){

       return view('admin.Usuarios.Show', compact('user'));
   }

   public function Edit(User $user){
       return view('admin.Usuarios.Edit', compact('user'));
   }

   public function Update(Request $request, User $user){
    
    $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
      

       $user->save();

       return redirect()->route('Usuarios.Show', $user->id);
   }

   public function Delete(User $user){
       return view('admin.Usuarios.Delete', compact('user'));
   }

   public function Destroy(User $user){
       $user->delete();

       return redirect()->route('Usuarios.Index');
   }
}
