<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'book_no',
        'date_published',
        'contained_on',
        'acquired_on',
    ];

    public function container() {
        return $this->belongsTo('App\Models\Book', 'contained_on', 'id');
    }
}
