<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id','subject'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

}
