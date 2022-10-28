<?php

namespace App\Http\Controllers;
use App\Models\Pustakawan;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index(){


        // get all data in books table
        $data = Pustakawan::all();
        return response()->json([
            'message' => 'Get all resource',
            'status_code' => true,
            'data' => $data,
        ], 200);
    
        }
    
}
    