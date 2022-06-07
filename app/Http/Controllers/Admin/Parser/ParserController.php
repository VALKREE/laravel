<?php

namespace App\Http\Controllers\Admin\Parser;

use App\Http\Controllers\Controller;
use App\Queries\QueryBuilderParser;
use Illuminate\Http\Request;
use App\Services\Contract\Parser;

class ParserController extends Controller
{
    public function __invoke(Parser $parser)
    {
        return view('parser.index', [
            'parser' => $parser->setLink('https://news.yandex.ru/music.rss')
                ->parse()
        ]);
    }
}
