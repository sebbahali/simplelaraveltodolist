
<?php $__env->startSection('t'); ?>
    list to do
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <table class="table">
        <thead>
          <tr>
            <th>Task</th>
            <th>Info</th>
            <th>Time</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($tod['task']); ?></td>
            <td><?php echo e($tod['info']); ?></td>
            <td><?php echo e($tod['time']); ?></td>
            <td><img src="<?php echo e(asset('storage/' . $tod->path)); ?>" width="300" height="200"></td>
            <td>
              
                <div class="button-container">
                    <a href="<?php echo e(route('edit',['todo'=>$tod['id']])); ?>" class="green-button">Edit</a>
                    <a href="<?php echo e(route('del',['todo'=>$tod['id']])); ?>" class="red-button">delete</a>
                  </div>
              </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <div class="button-container">
        <a href="<?php echo e(route('todo')); ?>" class="green-button">add task</a>  </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\todolist\todolist\resources\views/list.blade.php ENDPATH**/ ?>