<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Categories;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderCategories implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Categories::query();
    }

    public function getCategories(): LengthAwarePaginator
    {
        return Categories::select(['id', 'title', 'author', 'updated_at'])
            ->paginate(10);
    }

    public function getCategoryById(int $id)
    {
        return Categories::select(['id', 'title', 'author', 'updated_at'])
            ->findOrFail($id);
    }
}
