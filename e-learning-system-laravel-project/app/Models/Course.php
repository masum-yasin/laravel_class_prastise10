<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function topic()
    {
        return $this->hasMany(Topic::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('id','desc');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

}
