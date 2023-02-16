
    
    <?php $__env->startSection('t'); ?>
        simple to do list
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('body'); ?>

        <div class="container">
          <h1>TO DO list simple website laravel</h1>
           
          <div class="button-container">
            <a href="<?php echo e(route('todo')); ?>" class="a-button">add new task</a>
            <a href="<?php echo e(route('list')); ?>" class="b-button">see to do list</a>
          </div>
          <div class="search-container">
            <form action="<?php echo e(route('search')); ?>" method="GET">
              <input type="text" placeholder="Search..." name="search" class="search-input">
              <button type="submit" class="search-button">Search</button>
            </form>
          </div>
        </div>
     
        <?php $__env->stopSection(); ?>
    

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\allproj\todolist\todolist\resources\views/main.blade.php ENDPATH**/ ?>