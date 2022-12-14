<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){


        // get all data in books table
        $books = Book::all();
        return response()->json([
            'message' => 'Get all resource',
            'data' => $books,
        ], 200);
        return response()->json([
            'message' => 'Get all resources',
            'data' => $books,
        ]);
    }
   public function store(Request $request){
        $input = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'rating' => $request->rating,
            'published_date'=> $request->published_date
        ];
        $books = Book::create($input);
        $data = [
            'messsage' => 'Resource created succesfully',
            'data'=> $books,
        ];
        return response()->json($data, 201);
    }

    public function show($id){
        $book = Book::find($id);

        // jika id tdk ditemkn
        if ($book){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ]);
        }

        // return book resource
        return response()->json([
            'message' => 'Get detail resorce',
            'status' => 200,
            'data' => $book,
        ], 200);
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
        $book = Book::Find($id);

        // jika id tdk ditemkn
        if ($book){
            return response()->json([
                'message' => 'Resource not found',
                'status' => 404,
            ]);
        }

        $updated = $book->update([
            'title'=>$request->title || $book->title,
            'author'=>$request->author || $book->author,
            'publisher'=>$request->publiser->publisher,
            'rating'=>$request->rating || $book->rating,
            'published_date'=>$request->published_date || $book->published_date

        ]);
        if($updated){
            return response()->json([
                'message'=>'Data update sussecfully',
                'data' =>$updated,
                'status'=>200
            ], 200);
                
            
        }
    }
}
