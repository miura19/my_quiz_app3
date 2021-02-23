<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $fillable = [
        'question','category_id','answer1','answer2','answer3','answer4','answer','description'
    ];
}
