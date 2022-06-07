@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($news as $newsItem)
                    <div class="main_new" id="{{ $newsItem->id }}" style="display: flex; flex-direction: column;">
                        <a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title }}</a>
                        <img style="width: 300px;" src="{{ $newsItem->image }}" alt="{{ $newsItem->title }}" class="main_image">
                        <p class="main_description">{{ $newsItem->description }}</p>
                        <p class="main_author"><b>Автор:</b>{{ $newsItem->author }}</p>
                    </div>
                @endforeach
            </div>
            {{ $news->links() }}
        </div>
@endsection
