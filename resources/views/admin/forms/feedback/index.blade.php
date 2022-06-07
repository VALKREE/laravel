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
                <th scope="col">Комментарий</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Дата обновления</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedback as $feedbackItem)
                <tr>
                    <td>{{ $feedbackItem->id }}</td>
                    <td>{{ $feedbackItem->name }}</td>
                    <td>{{ $feedbackItem->comment }}</td>
                    <td>{{ $feedbackItem->created_at }}</td>
                    <td>{{ $feedbackItem->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $feedback->links() }}
    </div>
@endsection
