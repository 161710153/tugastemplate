<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\syane;

class testController extends Controller
{
    public function asiswa(){
    $c=syane::all();        
    return view('data',compact('c')); 
}
}
