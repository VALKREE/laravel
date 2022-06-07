<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="<?php echo e(route('admin.news.create')); ?>" class="btn btn-sm btn-outline-secondary">Добавить новость</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Категория</th>
                <th scope="col">Наименование</th>
                <th scope="col">Изображение</th>
                <th scope="col">Описание</th>
                <th scope="col">Автор</th>
                <th scope="col">Дата добавления</th>
                <th scope="col">Дата обновления</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($newsItem->id); ?></td>
                      <td><?php echo e($newsItem->categoryTitle); ?></td>
                      <td><?php echo e($newsItem->title); ?></td>
                      <td><?php echo e($newsItem->image); ?></td>
                      <td><?php echo e($newsItem->description); ?></td>
                      <td><?php echo e($newsItem->author); ?></td>
                      <td><?php echo e($newsItem->created_at); ?></td>
                      <td><?php echo e($newsItem->updated_at); ?></td>
                      <td>
                          <a href="<?php echo e(route('admin.news.edit', ['news' => $newsItem])); ?>" style="font-size: 12px;">Ред.</a> &nbsp;
                          <a href="javascript:;" class="delete" rel="<?php echo e($newsItem->id); ?>" style="color:red; font-size: 12px;">Уд.</a>
                      </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($news->links()); ?>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let btnsDelete = document.querySelectorAll('.delete');
            btnsDelete.forEach((e)=>{
                e.addEventListener('click', () => {
                    let id = e.getAttribute('rel');
                    if(confirm(`Подтвердите удаление записи с ID: ${id}`)){
                        send('/admin/news/'+id).then(()=>{
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
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/news/index.blade.php ENDPATH**/ ?>