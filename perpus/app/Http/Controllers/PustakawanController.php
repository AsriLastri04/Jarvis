<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index()
    {
        $data = [
            "name" => "lastri",
            "gender" => "P",
            "shift" => "malam"
        ];
        return response()->json($data);
        
    }
}
