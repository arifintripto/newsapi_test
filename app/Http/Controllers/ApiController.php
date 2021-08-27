<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;

class ApiController extends Controller
{
    /**
     * This funtion returns the Top Headlines for a given catagory as param
     */
    public function callNewsAPI($category) {
        $api_key = env('NEWS_API_KEY');
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
        return response()->json($articles);
    }

    /**
     * This funtion shows the details of a news
     */
    public function show($category, $id) {
        $article = $this->callNewsAPI($category)->articles[$id];
        return response()->json($article);
    }
}
