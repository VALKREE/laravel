<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getNews()
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'image',  'description', 'author'])
            ->get();
    }

    public function getNew(int $id)
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'image', 'description', 'author'])
            ->find($id);
    }

    public function getNewWithParams(int $id)
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
