@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить ресурс</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="row">
        @include('inc.messages')

        <form method="post" action="{{ route('admin.resources.store') }}">
            @csrf
            <div class="form-group">
                <label for="id">#ID</label>
                <input type="text" id="id" name="id" class="form-control" value="{{ old('id') }}">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" id="url" name="url" class="form-control" value="{{ old('url') }}">
            </div>

            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection
