<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Resources;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderResources implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Resources::query();
    }

    public function getResources(): LengthAwarePaginator
    {
        return Resources::select(
            [
                'resources.id',
                'resources.url',
                'resources.created_at',
                'resources.updated_at',
            ])
            ->paginate(10);
    }

    public function getResourcesById(int $id)
    {
        return Resources::select(
            [
                'resources.id',
                'resources.url',
                'resources.created_at',
                'resources.updated_at',
            ])
            ->findOrFail($id);
    }
}
