@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.resources.create') }}" class="btn btn-sm btn-outline-secondary">Добавить ресурс</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">URL</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Дата обновления</th>
            </tr>
            </thead>
            <tbody>
              @foreach($resources as $resourcesItem)
                  <tr>
                      <td>{{ $resourcesItem->id }}</td>
                      <td>{{ $resourcesItem->url }}</td>
                      <td>{{ $resourcesItem->created_at }}</td>
                      <td>{{ $resourcesItem->updated_at }}</td>
                      <td>
                          <a href="{{ route('admin.resources.edit', ['resource' => $resourcesItem]) }}" style="font-size: 12px;">Ред.</a> &nbsp;
                          <a href="javascript:;" class="delete" rel="{{ $resourcesItem->id }}" style="color:red; font-size: 12px;">Уд.</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
        {{ $resources->links() }}
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
                        send('/admin/resources/'+id).then(()=>{
                            location.reload();
                        })
                    }
                });
            });
        })

        async function send(url){
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

