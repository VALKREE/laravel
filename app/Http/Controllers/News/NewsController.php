<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $model = app(News::class);
        $news = $model->getNews();
        /*dd(
            $model->getNews()
        );*/
        return view('news.index', [
            'news' => $news
        ]);
    }
    public function show(int $id)
    {
        if($id > 11) {
            abort(404);
        }
        $model = app(News::class);
        $news = $model->getNew($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
