<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model{
    protected $fillable = [
        'user_id', 'title', 'description', 'score'
    ];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
/**
 * Nota esta es una relacion de 1 a N
 * 1 usuario puede tener muchos examenes
 */

/*
 * 1 examen posee muchas categorias
 * 1:M
 * */
