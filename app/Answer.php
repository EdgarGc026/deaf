<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model{
    protected $fillable = [
        'question_id', 'description', 'iframe', 'image', 'is_correct', 'is_wrong', 'order'
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
