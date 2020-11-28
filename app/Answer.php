<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['answer_title','answer_correct','question_id','point'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
