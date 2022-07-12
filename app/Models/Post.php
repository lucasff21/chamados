<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'comentario',
        'hora_post',
        'event_id'
    ];

    public function event(){
        return $this->belongsTo(Event::class);
    }

    use HasFactory;
}
