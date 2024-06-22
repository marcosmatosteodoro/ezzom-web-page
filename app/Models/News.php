<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['title', 'category_id', 'cover', 'headline'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeJustHeadlines($query)
    {
        return $query->where('headline', true);
    }

    public function scopeNoHeadlines($query)
    {
        return $query->where('headline', false);
    }
}
