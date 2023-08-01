<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserBorrowedController extends Controller
{
    public function index(User $user)
    {
        $borrowedBooks = $user->borrowedBooks()->with('book')->get();

        return response()->json($borrowedBooks);
    }}
