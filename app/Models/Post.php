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
/*         'autor',
        'email', */
        'user_id',
        'tresc'
    ];
    // Alternatywnie chroni podane pola, pozwala na wszystkie pozostałe
    // protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
        // można też dodać klucz obcy, ale skoro jest on w formie '{model}_id' to można to pominąć
        // return $this->belongsTo(User::class,'user_id');
    }
}
