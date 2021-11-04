<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
       return view('admin.pages.dashboard');
       
    }
    public function Profile(){
       return view('admin.pages.profile');
       
    }
    public function signup(){
       return view('admin.pages.signup');
       
    }
    public function signing(){
       return view('admin.pages.signing');
       
    }
    public function blank(){
       return view('admin.pages.blank');
       
    }
    public function buttons(){
       return view('admin.pages.buttons');
       
    }
    public function forms(){
       return view('admin.pages.forms');
       
    }
    
    public function cards(){
       return view('admin.pages.cards');
       
    }
    public function typography(){
       return view('admin.pages.typography');
       
    }
    public function icons(){
       return view('admin.pages.icons');
       
    }
    
    public function charts(){
       return view('admin.pages.charts');
       
    }
    public function maps(){
       return view('admin.pages.maps');
       
    }
    
}
