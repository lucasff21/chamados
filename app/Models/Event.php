<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Event extends Model
{

    protected $fillable = [
        'namefunc',
        'titlesolic',
        'setorsolic',
        'nivel',
        'description'
    ];

    protected $dates = [ 'date'];

    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
