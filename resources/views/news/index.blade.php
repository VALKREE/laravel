@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($news as $newsItem)
                    <div class="main_new" id="{{ $newsItem->id }}" style="display: flex; flex-direction: column;">
                        <a href="{{ route('news.show', ['id' => $newsItem->id]) }}">{{ $newsItem->title }}</a>
                        @if($newsItem->image)
                            <img style="width: 300px;" src="{{ Storage::url($newsItem->image) }}" alt="{{ $newsItem->title }}" class="main_image">
                        @endif
                        <p class="main_description">{{ html_entity_decode($newsItem->description) }}</p>
                        <p class="main_author"><b>Автор:</b>{{ $newsItem->author }}</p>
                    </div>
                @endforeach
            </div>
            {{ $news->links() }}
        </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endpush
