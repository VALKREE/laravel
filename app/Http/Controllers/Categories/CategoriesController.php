<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Queries\QueryBuilderCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(QueryBuilderCategories $categories)
    {
        return view('categories.index', [
            'categories' => $categories->getCategories()
        ]);
    }

    public function show(QueryBuilderCategories $categories, int $id)
    {
        return view('categories.show', [
            'categories' =>$categories->getCategoryById($id)
        ]);
    }
}
