<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Users;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderUsers implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return Users::query();
    }

    public function getUsers(): LengthAwarePaginator
    {
        return Users::select(['id', 'name', 'email', 'email_verified_at', 'is_admin', 'created_at', 'updated_at'])
            ->paginate(10);
    }

    public function getCategoryById(int $id)
    {
        return Users::select(['id', 'name', 'email', 'email_verified_at', 'is_admin', 'created_at', 'updated_at'])
            ->findOrFail($id);
    }
}
