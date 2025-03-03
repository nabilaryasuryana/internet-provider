<?php

namespace App\Models;

use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        "tag",
    ];

    public function articleTags()
    {
        return $this->hasMany(ArticleTag::class);
    }
}
