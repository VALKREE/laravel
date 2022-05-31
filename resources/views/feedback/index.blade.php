@extends('layouts.main')
@section('content')
    <div class="container">
        @include('inc.messages')
        <form metgod="POST" action="/feedback/store" class="feedback d-flex flex-column">
            @csrf
            <h3 class="feedback_header">Форма обратной связи</h3>
            <label for="name" class="w-25 m-1 d-flex flex-column">Имя пользователя:
                <input name="name" placeholder="Введите имя пользователя">
            </label>
            <label for="comment class="w-25 m-1 d-flex flex-column">Комментарий:
                <textarea name="comment" id="comment" placeholder="Ваш комментарий"></textarea>
            </label>
            <input type="submit" class="w-25 m-1">
        </form>
    </div>
@endsection
