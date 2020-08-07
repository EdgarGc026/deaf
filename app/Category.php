<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $fillable = [
        'name'
    ];
    /*
     * Muchas preguntas pertenecen a 1 categoria.
     * M:1
     * */
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
