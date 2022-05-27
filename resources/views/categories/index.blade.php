@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($categories as $category)
                <div class="category" id="{{ $category->id }}">
                    <a href="categories/{{$category->id}}">{{ $category->title }}</a>
                    <p>{{ $category->author }}</p>
                </div>
            @endforeach
        </div>
        {{ $categories->links() }}
    </div>

@endsection
