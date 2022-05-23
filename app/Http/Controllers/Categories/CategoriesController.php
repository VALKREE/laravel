<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();
        return view('categories.index', [
            'categoriesList' => $categories
        ]);
    }
    public function show(int $id)
    {
        if($id > 11) {
            abort(404);
        }
        $categories = $this->getCategories($id);
        return view('categories.show', [
            'categories' => $categories
        ]);
    }
}
