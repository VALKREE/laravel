@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать категорию</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования категории</h3>

        <form method="post" action="{{ route('admin.categories.update', ['category' => $category]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $category->title }}">
            </div>

            <div class="form-group">
                <label for="author">Автор</label>
                <textarea class="form-control" name="author" id="author">{!! $category->author !!}</textarea>
            </div>

            <div class="form-group">
                <label for="created_at">Дата</label>
                <textarea class="form-control" name="created_at" id="created_at">{!! $category->created_at !!}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
