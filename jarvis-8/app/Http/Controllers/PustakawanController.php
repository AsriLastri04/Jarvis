<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index(){


        // get all data in books table
        $user = Pustakawan::all();
        return response()->json([
            'message' => 'Get all resource',
            'data' => $user,
        ], 200);
        return response()->json([
            'message' => 'Get all resources',
            'data' => $user,
        ]);
    }
    function store(Request $request){
        $input = [
            'nama' => $request->nama,
            'gender' => $request->gender,
            'shift' => $request->shift,
            
        ];
        $user = Pustakawan::create($input);
        $data = [
            'messsage' => 'Resource created succesfully',
            'data'=> $user,
        ];
        return response()->json($data, 201);
    }
    
    function show($id){
        $user = Pustakawan::find($id);
    
        // jika id tdk ditemkn
        if ($user){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ]);
        }
    
        // return book resource
        return response()->json([
            'message' => 'Get detail resorce',
            'status' => 200,
            'data' => $user,
        ], 200);
    }
}
