<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifaController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __contruct(){
        $this->middleware('auth');
    }

    public function index(){
        
    }

    public function create(){
        
    }

    public function destroy(){

    }
}
