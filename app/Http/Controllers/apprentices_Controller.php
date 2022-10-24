<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use Illuminate\Support\Facades\DB;


class apprentices_Controller extends Controller
{
    //
    public function FormRetriever($id)
    {
        return view('Studentadd', compact("id"));
    }
    public function Studentstore(Request $req)
    {

        $id = $req->id;

        $student = new Apprentice();
        $student->first_name = $req->first_name;
        $student->last_name = $req->last_name;
        $student->email = $req->email;
        $student->promotion_id = $id;
        $student->save();
        return redirect("Edit/" . $id)->with('status', 'Student has been saved');
        //fct that will grab the data and display it 


    }
    public function index()
    {
        $student = DB::table('apprentices')
            ->join('promotions', 'promotions.id', '=', 'apprentices.promotion_id')
            ->select('apprentices.*', 'promotions.name')
            ->get();
        return view("Edit", compact('student'));

        // return dd($student);
    }
}
