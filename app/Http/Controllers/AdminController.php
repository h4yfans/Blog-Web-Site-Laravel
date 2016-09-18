<?php

namespace App\Http\Controllers;

class AdminController extends Controller{
    public function getIndex(){
        //Fetch Post & Messages
        return view('admin.index');
    }
}