<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Content\PostCategory;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable():array {
        return [
            'slug' => [
                'source' => 'title',
            ]
        ];
    }

    protected $casts = ['image' => 'array'];

    protected $fillable = [
        'title',
        'summary',
        'body',
        'slug',
        'image',
        'status',
        'tags',
        'published_at',
        'author_id',
        'category_id',
        'commentable',
    ];

    public function postCategory(){
        return $this->belongsTo(PostCategory::Class, 'category_id');
    }

    public function comments(){
        return $this->morphMany('App\Models\Content\Comment', 'commentable');
    }
}
