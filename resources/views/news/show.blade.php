@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="main_new" id="{{ $news->id }}" style="display: flex; flex-direction: column;">
                    <a href="{{ route('news.show', ['id' => $news->id]) }}">{{ $news->title }}</a>
                    <img style="width: 300px;" src="{{ $news->image }}" alt="{{ $news->title }}" class="main_image">
                    <p class="main_description">{{ $news->description }}</p>
                    <p class="main_author"><b>Автор:</b>{{ $news->author }}</p>
                </div>
            </div>
        </div>
@endsection
