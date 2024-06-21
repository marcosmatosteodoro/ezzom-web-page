<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'cover', 'headline'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function justHeadline($query)
    {
        return $query->where('headline', true);
    }

    public function noHeadlines($query)
    {
        return $query->where('headline', false);
    }
}
