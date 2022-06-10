<?php

namespace App\Http\Controllers\Admin\Parser;

use App\Http\Controllers\Controller;
use App\Jobs\JobNewsParsing;

class ParserController extends Controller
{
    public function __invoke()
    {
        // ulrs need take on table Sources
        $urls = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
        ];

        foreach($urls as $url) {
            dispatch(new JobNewsParsing($url));
        }

        return back()->with('success', 'Новости добавлены в очередь');
    }
}
