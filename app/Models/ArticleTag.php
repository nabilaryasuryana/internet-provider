<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $fillables = [
        "article_id",
        "tag_id"
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
