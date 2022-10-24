<?php

namespace App\Http\Controllers;

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
        <a href="Delete/' . $promo->name . '">Delete</a>
        <td>
                
                </tr>';
            }
            return Response($display);
        }
    }
}
