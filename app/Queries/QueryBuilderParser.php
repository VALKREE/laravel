<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Parser;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderParser implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Parser::query();
    }

    public function getParser(): LengthAwarePaginator
    {
        return Parser::select(
                [
                    'parser.title',
                    'parser.link',
                    'parser.guid',
                    'parser.description',
                    'parser.pubDate',

                ])
            ->paginate(10);
    }

    public function getParserById(int $id)
    {
        return Parser::select(
            [
                'parser.title',
                'parser.link',
                'parser.guid',
                'parser.description',
                'parser.pubDate',

            ])
            ->findOrFail($id);
    }
}
