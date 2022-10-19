<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class Crud_Operation extends Controller
{
    //

    public function Form_Page()
    {
        return view('welcome');
    }
    public function Insert(Request $req)
    {
        $apprentice = new Apprentice();
        $apprentice->name = $req->name;
        $apprentice->save();
        return redirect("add");
    }
}
