<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Models\promotion;

class Searchnado extends Controller
{
    //
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->key;
            $display = "";
            $records = promotion::where('name', 'like', '%' . $input . "%")->get();
        }
        if ($records) {
            foreach ($records as $promo) {
                $display .= '<tr>
                <td>' . $promo->id . '</td>
                <td>' . $promo->name . '</td>
                <td>
        <a href="Edit/' . $promo->id . '">Edit</a>
        <a href="Delete/' . $promo->id . '">Delete</a>
        <td>
                
                </tr>';
            }
            return Response($display);
        }
    }
    public function searchstudent($input = null)
    {

        // dd($request->search);
        //  dd($data);
        if ($input == null) {
            $data = Apprentice::all();
            return $data;
        } else {
            $data = Apprentice::where('first_name', 'like', '%' . $input . '%')->get();
            return $data;
        }
    }
}
