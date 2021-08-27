<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use jcobhams\NewsApi\NewsApi;


class NewsController extends Controller
{
    /**
     * This funtion returns the Top Headlines for a given catagory as param
     */
    public function callNewsAPI($category) {
        $api_key = 'b6d11937c33c40178630366ba59687e3';
        $newsapi = new NewsApi($api_key);
        $top_headlines = $newsapi->getTopHeadlines('', NULL, 'us', $category, 20, 1);
        return $top_headlines;
    }

    /**
     * This funtion shows the index of the app
     * All the top headlines are shown by this function
     */
    public function index($category) {
        $articles = $this->callNewsAPI($category)->articles;
        return view('news', compact('articles', 'category'));
    }

    /**
     * This funtion shows the details of a news
     */
    public function show($category, $id) {
        $article = $this->callNewsAPI($category)->articles[$id];
        return view('news_details', compact('article', 'category'));
    }
}
