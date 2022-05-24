<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $model = app(Categories::class);
        $categories = $model->getCategories();
        /*dd(
            $model->getCategories()
        );*/
        return view('categories.index', [
            'categories' => $categories
        ]);
    }
    public function show(int $id)
    {
        if($id > 11) {
            abort(404);
        }
        $model = app(Categories::class);
        $categories = $model->getCategory($id);
        return view('categories.show', [
            'categories' => $categories
        ]);
    }
}
