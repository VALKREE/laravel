@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($news as $new)
                    <div class="main_new" id="{{ $new->id }}" style="display: flex; flex-direction: column;">
                        <a href="{{ route('news.show', ['id' => $new->id]) }}">{{ $new->title }}</a>
                        <img style="width: 300px;" src="{{ $new->image }}" alt="{{ $new->title }}" class="main_image">
                        <p class="main_description">{{ $new->description }}</p>
                        <p class="main_author"><b>Автор:</b>{{ $new->author }}</p>
                    </div>
                @endforeach
            </div>
            {{ $categories->links() }}
        </div>
@endsection
