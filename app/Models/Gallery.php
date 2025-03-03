<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        "img",
        "title",
        "description",
    ];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
