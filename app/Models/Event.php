<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{

    protected $fillable = [
        'namefunc',
        'titlesolic',
        'setorsolic',
        'nivel',
        'description'
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    protected $dates = [ 'date'];

    use HasFactory;
}
