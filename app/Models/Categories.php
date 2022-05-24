<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function getCategories()
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'author'])
            ->get();
    }

    public function getCategory(int $id)
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'author'])
            ->find($id);
    }

    public function getCategoryWithParams(int $id)
    {
        return DB::table($this->table)
            ->whereNotBetween('id', [5,10])
            ->orderBy('title', 'asc')
            ->get();
        /*->where([
            ['id', '>', 5],
            ['title', 'like',
                '%'. request()->query('s').'%']
        ])
        ->orWhere('id', '=', 10)
        ->toSql();*/
        /*->join('news', 'news.category_id', '=',
            'categories.id')
        ->select('news.*', 'categories.title as categoryTitle')
        ->toSql();*/
    }
}
