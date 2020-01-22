<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',  //dati corrispettivi alla tabella post
        'body'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class); //per una relazione 1 a N qui si inserisce belongsTo
    }                                       //per dire tu sei N(post) importa da 1 (categoria)
}

