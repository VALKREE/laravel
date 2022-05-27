<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Queries\QueryBuilderNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(QueryBuilderNews $news)
    {
        return view('news.index', [
            'news' => $news->getNews()
        ]);
    }

    public function show(QueryBuilderNews $news, int $id)
    {
        return view('news.show', [
            'news' =>$news->getNewsById($id)
        ]);
    }
}
