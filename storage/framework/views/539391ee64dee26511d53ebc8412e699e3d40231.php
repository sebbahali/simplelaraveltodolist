



<?php $__env->startSection('t'); ?>
   to do list
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <form action="<?php echo e(route('todo')); ?>" method="POST" enctype='multipart/form-data'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">task</label>
          <input type="text" id="name" name="task" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label for="time">Enter a deadline:</label>
        <input type="time" id="time" name="time">
    </div>
        <div class="form-group">
          <label for="message">more info </label>
          <textarea id="message" name="info" placeholder="Enter your message"></textarea>
        </div>
        <div class="form-group">
        <label for="file">add image </label>
        <input type="file"  name="image" >
    </div>
        
        <button type="submit">Submit</button>
      </form>
      
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\todolist\todolist\resources\views/todo.blade.php ENDPATH**/ ?>