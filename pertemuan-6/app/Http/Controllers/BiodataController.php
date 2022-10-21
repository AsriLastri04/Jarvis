<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        $data = [
            "Nama" => "Sulastri" ,
            "TTL" => "Bogor, 04-05-2003",
            "Gender" => "Perempuan",
            "Adress" => "Bogor",
            "Student"  => True
        ];
        return response()->json($data);
    }
}
