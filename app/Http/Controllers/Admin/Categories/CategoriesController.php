<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Queries\QueryBuilderCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(QueryBuilderCategories $categories)
    {
        return view('admin.categories.index', [
            'categories' => $categories->getCategories()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->only(['title', 'author', 'created_at']);
        $category = new Categories($validated);

        if($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Display the specified resource.
     *
     * @param Categories $category
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Categories $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Categories $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Categories $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Categories $category)
    {
        $validated = $request->only(['title', 'author', 'updated_at']);

        $category = $category->fill($validated);
        if($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Categories $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        try {
            $category->delete();
            return response()->json('ok');
        }catch (\Exception $e){
            \Log::error($e->getMessage());
            return response()->json('error', 400);
        }
    }
}
