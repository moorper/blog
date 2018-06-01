<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function prev()
    {
        $prev = $this->select('id', 'title')
            ->where('id', '<', $this->id)
            ->orderBy('id', 'desc')
            ->first();

        return $prev;
    }

    public function next()
    {
        $next = $this->select('id', 'title')
            ->where('id', '>', $this->id)
            ->orderBy('id', 'desc')
            ->first();

        return $next;
    }
}
