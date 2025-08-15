<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'price',
        'cover_image',
        'description',
        'pdf_url',
    ];

 

public function users()
{
    return $this->belongsToMany(Alogin::class, 'alogin_book', 'book_id', 'alogin_id')->withTimestamps();
}


}
