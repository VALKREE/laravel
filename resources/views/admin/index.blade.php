@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="admin d-flex flex-column gap-1">
            <h1 class="">Админ панель</h1>
            <a href="/admin/news">Редактор новостей</a>
            <a href="/admin/categories">Редактор категорий</a>
            <a href="/admin/feedback">Обратная связь</a>
            <a href="/admin/upload">Заявки на загрузку</a>
            <a href="/admin/users">Пользователи</a>
        </div>
    </div>
@endsection
