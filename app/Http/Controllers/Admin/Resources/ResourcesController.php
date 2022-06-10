<?php

namespace App\Http\Controllers\Admin\Resources;

use App\Http\Controllers\Controller;
use App\Http\Requests\Resources\CreateRequest;
use App\Http\Requests\Resources\UpdateRequest;
use App\Models\Resources;
use App\Queries\QueryBuilderResources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderResources $resources)
    {
        return view('admin.resources.index', [
            'resources' => $resources->getResources()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resources = Resources::all();
        return view('admin.resources.create', [
            'resources' => $resources
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = \Str::slug($validated['url']);

        $resources = Resources::create($validated);
        if($resources) {
            return redirect()->route('admin.resources.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(QueryBuilderResources $resources)
    {
        $resources = Resources::all();
        return view('admin.resources.edit', [
            'resources' => $resources
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resources $resource)
    {
        $validated = $request->only(['id', 'url', 'updated_at']);

        $resource = $resource->fill($validated);
        if($resource->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resources $resource)
    {
        try {
            $resource->delete();
            return response()->json('ok');
        }catch (\Exception $e){
            \Log::error($e->getMessage());
            return response()->json('error', 400);
        }
    }
}
