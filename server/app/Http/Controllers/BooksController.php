<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowedBook;

class BooksController extends Controller
{
    public function index(){
        $books=Book::all();
        return response()->json($books);
    }

    public function borrowBook(Request $request, $id)
{
    $book = Book::find($id);

    if (!$book) {
        return response()->json(['message' => 'Book not found'], 404);
    }

    if ($book->borrowed) {
        return response()->json(['message' => 'Book already borrowed'], 400);
    }

    $book->borrowed = true;
    $book->save();

    BorrowedBook::create([
        'user_id' => $request->user()->id,
        'book_id' => $book->id,
        'borrowed_at' => now(),
    ]);

    return response()->json(['message' => 'Book borrowed successfully']);
}


    public function returnBook(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        if (!$book->borrowed) {
            return response()->json(['message' => 'Book is not borrowed'], 400);
        }

        $book->borrowed = false;
        $book->save();

        $borrowedBook = BorrowedBook::where('book_id', $book->id)
            ->whereNull('returned_at')
            ->first();
        
        if ($borrowedBook) {
            $borrowedBook->returned_at = now();
            $borrowedBook->save();
        }

        return response()->json(['message' => 'Book returned successfully']);
    }
}
