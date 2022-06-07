@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать запись</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>

    <div class="row">
        @include('inc.messages')
        <form method="post" action="{{ route('admin.users.update', ['user' => $user]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="email">E-mail верификация</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $user->email_verified_at }}">
            </div>

            <div class="form-group">
                <label for="is_admin">Ранг</label>
                <input type="text" id="is_admin" name="is_admin" class="form-control" value="{{ $user->is_admin }}">
            </div>

            <br>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>

@endsection
