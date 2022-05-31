<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\UploadForm;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderUpload implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return UploadForm::query();
    }

    public function getUpload(): LengthAwarePaginator
    {
        return UploadForm::select(['id', 'name', 'phone', 'email', 'information','created_at', 'updated_at'])
            ->paginate(10);
    }

    public function getUploadById(int $id)
    {
        return UploadForm::select(['id', 'name', 'phone', 'email', 'information','created_at', 'updated_at'])
            ->findOrFail($id);
    }
}
