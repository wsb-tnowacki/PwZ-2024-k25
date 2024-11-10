<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posty";
    // właściwość, która ogranicza pola do uzupełnienia - dla metod create() i update() - nie dla save()
    protected $fillable = [
        'tytul',
        'autor',
        'email',
        'tresc'
    ];
    // Alternatywnie chroni podane pola, pozwala na wszystkie pozostałe
    // protected $guarded = ['id'];
}
