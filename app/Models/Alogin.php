<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Alogin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guard = 'alogin';
    protected $table = 'alogins';

    public $fillable = [
        'name',
        'email',
        'password',
        'type',


    ];
   
    public function books()
{
    return $this->belongsToMany(Book::class, 'alogin_book', 'alogin_id', 'book_id')->withTimestamps();
}





}
