<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'Book_ID';
    protected $fillable = ['Title', 'Description', 'Genre/Type', 'Price'];
    
    use HasFactory;
}
