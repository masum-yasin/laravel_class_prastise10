<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price','image', 'category_id','tags','availibility'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    }

    public function getTagsAttribute($value)
    {
        return $this->attributes['tags'] = json_decode($value);
    }
}