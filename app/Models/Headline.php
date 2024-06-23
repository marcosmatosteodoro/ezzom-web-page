<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'news_id'];

    /**
     * Get the news associated with the headline.
     */
    public function news()
    {
        return $this->belongsTo(News::class);
    }

    /**
     * Scope a query to order headlines by position.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('position');
    }
}
