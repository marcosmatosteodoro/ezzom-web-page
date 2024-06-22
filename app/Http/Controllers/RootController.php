<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index()
    {
        $categoriesWithNews = Category::withNews()->get();
        $headlines = News::justHeadlines()->get();
        $noHeadlines = News::noHeadlines()->get();

        $data = [
            'categoriesWithNews' => $categoriesWithNews,
            'headlines' => $headlines,
            'noHeadlines' => $noHeadlines,
        ];
        
        return view('root', $data);
    }
}
