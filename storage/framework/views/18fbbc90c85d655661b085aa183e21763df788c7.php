<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список пользователей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-sm btn-outline-secondary">Добавить пользователя</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->email_verified_at); ?></td>
                    <td><?php echo e($user->is_admin); ?></td>
                    <td><?php echo e($user->updated_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.users.edit', ['user' => $user->id])); ?>" style="font-size: 12px;">Ред.</a> &nbsp;
                        <a href="javascript:;" class="delete" rel="<?php echo e($user->id); ?>" style="color:red; font-size: 12px;">Уд.</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">Записей нет</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <?php echo e($users->links()); ?>

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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OpenServer\domains\laravel\laravel\resources\views/admin/users/index.blade.php ENDPATH**/ ?>