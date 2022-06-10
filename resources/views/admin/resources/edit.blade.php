@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать ресурс</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <h3>Форма редактирования ресурсов</h3>
        <form method="post" action="{{ route('admin.resources.update', ['resource' => $resource]) }}">

            @csrf
            @method('put')
            <div class="form-group">
                <label for="id=">#ID</label>
                <input type="text" id="id=" name="id=" class="form-control" value="{{ $resource->id }}">
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <textarea class="form-control" name="url" id="url">{{ $resource->url }}</textarea>
            </div>

            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
