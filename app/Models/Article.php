<?php

namespace App\Models;

use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        "title",
        "slug",
        "content"
    ];

    public function articleTags()
    {
        return $this->hasMany(ArticleTag::class);
    }

    public function likes()
    {
        return $this->hashMany(Like::class);
    }
}
