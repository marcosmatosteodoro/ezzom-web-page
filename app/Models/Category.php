<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'codeName'];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public static function withNews()
    {
        return self::with('news')->get();
    }
}
