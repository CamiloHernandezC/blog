<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'cover',
        'content',
        'type',
        'slug',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(){
        return 'slug';
    }

    public function comments($order = 'desc'): HasMany
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id')->where('reply_id', null)->orderBy('created_at', $order);
    }
}
