<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = [
        'name', //dati corrispettivi alla tabella post
        'description'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class); //per una relazione 1 a N qui si inserisce l'hasMAny
    }                                       //per dire tu sei 1(categorie) importa da N (post)
}
