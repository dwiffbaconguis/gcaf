<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Post extends Model
{

    protected $fillable = ['user_id', 'title', 'body', 'image'];

    public function getVideoHTMLAttribute()
    {
        $embed = Embed::make($this->link)->parseUrl();

        if (!$embed) {
            return '';
        }

        $embed->setAttribute(
            [
                'class' => 'embed-responsive-item',
                'width' => 400,
                'allowFullscreen' => true,
            ]
        );

        return $embed->getHtml();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
