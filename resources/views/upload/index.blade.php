@extends('layouts.main')
@section('content')
    <div class="container">
        @include('inc.messages')
        <form metgod="POST" action="/upload/store"  class="formUploadData d-flex flex-column">
            @csrf
            <h3 class="formUploadData_header">Форма загрузки</h3>

            <label for="name" class="w-25 d-flex flex-column m-1">Имя:
                <input name="name" type="text" placeholder="Введите ваше имя">
            </label>

            <label for="phone" class="w-25 d-flex flex-column m-1">Телефон:
                <input name="phone" type="text" placeholder="Введите ваш телефон">
            </label>

            <label for="email" class="w-25 d-flex flex-column m-1">E-mail:
                <input name="email" type="email" placeholder="Введите ваш e-mail">
            </label>

            <label for="information" class="w-25 d-flex flex-column m-1">Информация:
                <textarea name="information" id="information" placeholder="Введите информацию о том, что вы хотите закачать"></textarea>
            </label>

            <input type="submit" class="w-25 m-1">
        </form>
@endsection
