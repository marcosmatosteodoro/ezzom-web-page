<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'codeName', 'description'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public static function withNews($includeHeadlines = true)
    {
        if ($includeHeadlines) {
            return self::with(['news' => function ($query) {
                $query->with('headline');
            }]);
        } else {
            return self::with(['news' => function ($query) {
                $query->doesntHave('headline');
            }]);
        }
    }
}
