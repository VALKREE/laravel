@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить пользователя</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="row">
        @include('inc.messages')

        <form method="post" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="text" id="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
            <div class="form-group">
                <label for="is_admin">Ранг</label>
                <input type="text" id="is_admin" name="is_admin" class="form-control" value="{{ old('is_admin') }}" placeholder="0 или 1">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection
