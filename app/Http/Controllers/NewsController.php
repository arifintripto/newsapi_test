<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use jcobhams\NewsApi\NewsApi;


class NewsController extends Controller
{
    public function callNewsAPI($category) {
        $api_key = 'b6d11937c33c40178630366ba59687e3';
        $newsapi = new NewsApi($api_key);

        $top_headlines = $newsapi->getTopHeadlines('', NULL, 'us', $category, 20, 1);

        return $top_headlines;
    }

    public function index($category) {

//        $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=b6d11937c33c40178630366ba59687e3');
//        dd($response->json('articles'));
        //This code would also work but I found NewsAPI's own package on their website and used that.

        $articles = $this->callNewsAPI($category)->articles;
        return view('news', compact('articles', 'category'));
    }

    public function show($category, $id) {
        $article = $this->callNewsAPI($category)->articles[$id];

        return view('news_details', compact('article', 'category'));
    }
}
