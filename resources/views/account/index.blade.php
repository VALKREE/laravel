@extends('layouts.main')
@section('content')
    <div class="container">
        <h3>Добро пожаловать, {{ Auth::user()->name }}</h3>
        <a href="{{ route('admin.index') }}">Админ панель</a>
    </div>
@endsection
