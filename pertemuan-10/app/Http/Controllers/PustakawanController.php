<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
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
function update($id, Request $request)
    {
        /**
         * Alur update resource:
         * 1. Menangkap id dan data request body
         * 2. Mendapatkan data book berdasarkan id
         * 3. Deklarasikan data yang akan di update
         * 4. Kirim status 200 jika berhasil di update
         */ 
        $pustakawan = Pustakawan::Find($id);

        // jika id tdk ditemkn
        if ($pustakawan){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ]);
        }

        $updated = $pustakawan->update([
            'name'=>$request->name || $pustakawan->name,
            'gender'=>$request->gender || $pustakawan->gender,
            'shift'=>$request->shift || $pustakawan->shift,
            
        ]);
        if($updated){
            return response()->json([
                'message'=>'Data update sussecfully',
                'data' =>$updated,
                'status'=>200
            ], 200);
                
            
        }
    }

