<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['name','user_id'];

    public function Questions(){
        return $this->hasMany(Question::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
