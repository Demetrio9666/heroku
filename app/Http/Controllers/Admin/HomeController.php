<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
   
    public function index(){
        return view('admin.edit-profile');
        //return 'hola';
    }


 
 

   

}
