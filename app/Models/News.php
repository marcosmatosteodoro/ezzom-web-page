<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'cover'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function headline()
    {
        return $this->hasOne(Headline::class);
    }

    public function scopeJustHeadlines($query)
    {
        return $query->whereHas('headline');
    }

    public function scopeNoHeadlines($query)
    {
        return $query->doesntHave('headline');
    }
    
    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat('d \d\e F Y');
    }
}
