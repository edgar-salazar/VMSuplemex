<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
     //Users
     public function WelcomeStore()
     {
         return view('Usuario.welcome');
     }
 
     //Admin
     public function WelcomeAdmin()
     {
         return view('admin.welcome_admin');
     }
 
}
