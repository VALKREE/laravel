@extends('layouts.main')
@section('content')
    <div class="container">
        <h3>Добро пожаловать, {{ Auth::user()->name }}</h3>
        @if(Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" style="width:200px;">
        @endif
        @if(Auth::user()->is_admin)
            <a href="{{ route('admin.index') }}">Админ панель</a>
        @endif
    </div>
@endsection
