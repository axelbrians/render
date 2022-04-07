<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    protected $fillable = [
        'the_answer', 'id_question', 'id_answer'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_answer');
    }

    public function question()
    {
        return $this->belongsTo(question::class, 'id_question');
    }
}