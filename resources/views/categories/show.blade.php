@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="main_category" id="{{ $categories->id }}" style="display: flex; flex-direction: column;">
                    <p><b>Категория: </b>{{ $categories->title }}</p>
                    <p><b>Автор: </b>{{ $categories->author}}</p>
                </div>
            </div>
        </div>
@endsection
