@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список обратной связи</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.feedback.create') }}" class="btn btn-sm btn-outline-secondary">Добавить обратную связь</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
                <th scope="col">email</th>
                <th scope="col">Информация</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Дата обновления</th>
            </tr>
            </thead>
            <tbody>
            @foreach($upload as $uploadItem)
                <tr>
                    <td>{{ $uploadItem->id }}</td>
                    <td>{{ $uploadItem->name }}</td>
                    <td>{{ $uploadItem->phone }}</td>
                    <td>{{ $uploadItem->email }}</td>
                    <td>{{ $uploadItem->information }}</td>
                    <td>{{ $uploadItem->created_at }}</td>
                    <td>{{ $uploadItem->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $upload->links() }}
    </div>
@endsection
