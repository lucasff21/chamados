<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "post_id",
        "comment"
    ];


    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
