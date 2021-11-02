<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blog_id',
        'reply_id',
        'name',
        'email',
        'comment',
    ];

    public function replies($order = 'asc'): HasMany
    {
        return $this->hasMany(Comment::class, 'reply_id', 'id')->orderBy('created_at', $order);
    }
}
