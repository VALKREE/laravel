<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\News;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return News::query();
    }

    public function getNews(): LengthAwarePaginator
    {
        return News::join('categories', 'category_id', '=', 'categories.id')
            ->select(
                [
                    'news.id',
                    'categories.title AS categoryTitle',
                    'news.title',
                    'news.image',
                    'news.description',
                    'news.author',
                    'news.created_at',
                    'news.updated_at'
                ])
            ->paginate(10);
    }

    public function getNewsById(int $id)
    {
        return News::select(
            [
                'news.id',
                'news.title',
                'news.image',
                'news.description',
                'news.author',
                'news.created_at',
                'news.updated_at'
            ])
            ->findOrFail($id);
    }
}
