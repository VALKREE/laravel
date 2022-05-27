<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\FeedbackForm;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Database\Eloquent\Builder;

class QueryBuilderFeedback implements QueryBuilder
{

    public function getBuilder(): Builder
    {
        return FeedbackForm::query();
    }

    public function getFeedback(): LengthAwarePaginator
    {
        return FeedbackForm::select(['id', 'name', 'comment', 'updated_at'])
            ->paginate(10);
    }

    public function getFeedbackById(int $id)
    {
        return FeedbackForm::select(['id', 'name', 'comment', 'updated_at'])
            ->findOrFail($id);
    }
}
