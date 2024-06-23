<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Headline;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index()
    {
        $categoriesWithNews = Category::withNews(false)->get();
        $headlines = Headline::getOrderedNews();
        $data = [
            'categoriesWithNews' => $categoriesWithNews,
            'headlines' => $headlines,
        ];
        
        return view('root', $data);
    }
}
