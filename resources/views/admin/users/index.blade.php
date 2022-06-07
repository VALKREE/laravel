@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список пользователей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-outline-secondary">Добавить пользователя</a>
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
                <th scope="col">email</th>
                <th scope="col">email верефикация</th>
                <th scope="col">Ранг</th>
                <th scope="col">Обновлена</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at }}</td>
                    <td>{{ $user->is_admin }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" style="font-size: 12px;">Ред.</a> &nbsp;
                        <a href="javascript:;" class="delete" rel="{{ $user->id }}" style="color:red; font-size: 12px;">Уд.</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Записей нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let btnsDelete = document.querySelectorAll('.delete');
            btnsDelete.forEach((e)=>{
                e.addEventListener('click', () => {
                    let id = e.getAttribute('rel');
                    if(confirm(`Подтвердите удаление записи с ID: ${id}`)){
                        send('/admin/users/'+id).then(()=>{
                            location.reload();
                        })
                    }
                });
            });
        })

        async function send(url = ''){
            const response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            let result = await response.json();
            return result.ok;
        }
    </script>
@endpush
