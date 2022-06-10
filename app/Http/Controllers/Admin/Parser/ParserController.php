<?php

namespace App\Http\Controllers\Admin\Parser;

use App\Http\Controllers\Controller;
use App\Jobs\JobNewsParsing;
use App\Queries\QueryBuilderResources;

class ParserController extends Controller
{
    public function __invoke(QueryBuilderResources $resources)
    {
        $urls = [];
        $resources = $resources->getResourcesForParser();
        foreach ($resources as $resource){
            array_push($urls, $resource->url);
        }
        foreach($urls as $url) {
            dispatch(new JobNewsParsing($url));
        }

        return back()->with('success', 'Новости добавлены в очередь');
    }
}
