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
}
