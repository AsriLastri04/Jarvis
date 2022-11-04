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
}
