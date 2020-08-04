<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{

     protected $fillable = [
         'exam_id', 'category_id' ,'description', 'iframe', 'image',
     ];

     protected $guarded = [];

     public function exam(){
         return $this->belongsTo(Exam::class);
     }

     public function category(){
         return $this->belongsTo(Category::class);
     }

     public function answers(){
         return $this->hasMany(Answer::class);
     }
}
