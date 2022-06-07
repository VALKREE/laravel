@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="" style="display:flex; flex-direction:row; flex-wrap:wrap; gap: 1rem; margin: .3rem; justify-content: center; ">
            @foreach($parser['news'] as $parserItem)
                <!-- <?PHP //dd($parserItem); ?> -->
                <div class="main_new" id="$parserItem['guid']"
                     style="
                        display: flex;
                        flex-direction: column;
                        gap:.5rem;
                        word-break: break-all;
                        border: 1px solid #000;
                        padding: .3rem;
                    ">
                    <p style="width:280px;margin:0;"><b>Наименование: </b>{{ $parserItem['title'] }}</p>
                    <p style="width:280px;margin:0;"><b>Ссылка: </b>{{ $parserItem['link'] }}</p>
                    <p style="width:280px;margin:0;"><b>Описание: </b>{{ $parserItem['description'] }}</p>
                    <p style="width:280px;margin:0;"><b>Дата публицакии: </b>{{ $parserItem['pubDate'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
@endsection
