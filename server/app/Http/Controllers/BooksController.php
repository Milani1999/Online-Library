<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowedBook;

class BooksController extends Controller
{
    public function index()
{
    $books = Book::where('borrowed', false)->get();
    return response()->json($books);
}

    public function borrowBook(Request $request, $id, $userId)
{
    $book = Book::find($id);
    $book->borrowed = true;
    $book->save();

    BorrowedBook::create([
        'user_id' => $userId,
        'book_id' => $book->id,
        'borrowed_at' => now(),
    ]);

    return response()->json(['message' => 'Book borrowed successfully']);
}


public function returnBook(Request $request, $id)
{
    $book = Book::find($id);
    $book->borrowed = false;
    $book->save();

    BorrowedBook::where('book_id', $book->id)
        ->delete();

    return response()->json(['message' => 'Book returned successfully']);
}


}
