<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    protected $table = 'borrowed_books';
    protected $fillable = ['user_id', 'book_id', 'borrowed_at', 'returned_at'];

    use HasFactory;
}
