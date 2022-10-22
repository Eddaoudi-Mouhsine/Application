<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;

class Crud_Operation extends Controller
{
    //create a controller named crud_operation it has two method one that redirect u to welcome page
    //the other insert data into database

    public function Form_Page()
    {
        return view('add');
    }
    public function Insert(Request $req)
    {
        $promo = new promotion();
        $promo->name = $req->name;
        $promo->save();
        return redirect("index");
    }
    public function index()
    {
        $data = promotion::all(); //this is a static method inherited by apprentice display all rows
        return view("index", compact('data'));
    }
}
