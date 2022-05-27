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
        return News::select(['id', 'title', 'image', 'description', 'author', 'created_at', 'updated_at'])
            ->paginate(10);
    }

    public function getNewsById(int $id)
    {
        return News::select(['id', 'title', 'image', 'description', 'author', 'created_at', 'updated_at'])
            ->findOrFail($id);
    }
}
