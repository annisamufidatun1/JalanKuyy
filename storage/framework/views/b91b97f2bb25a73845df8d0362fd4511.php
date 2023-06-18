<?php $__env->startSection('body'); ?>

    <h2>Discovery</h2>

    <form>
        <div class="row">
            <div class="col-7" id="searchbar">
                <input type="text" class="container-fluid" id="search" name="cari" placeholder="Search for your favourite destination" value="<?php echo e(old('cari')); ?>">
            </div>

            <div class="col-2" id="searchbar" action="/dashboard/results" method="GET">
                <button type="submit" class="search-btn" id="search-btn">
                    Search
                </button>
            </div>

            <div class="col-1" id="filter">
                <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
            </div>

            <div class="col-1" id="notif">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
            </div>

            <div class="col-1 btn"  id="mini-profile">
                <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
            </div>
        </div>
    </form>

    <h2>Popular</h2>
        <div class="wrapper">
            <?php if($popularEvents->count() > 0): ?>
                <?php $__currentLoopData = $popularEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/detail-event/<?php echo e($e->id_event); ?>"><div class="card" id="discover">
                    <img class="card-img-top" src="<?php echo e(url('/data_file/'.$e->event_logo)); ?>" alt="">
                    <div class="card-body">
                        <h6 class="card-title" style="color: #000000;"><?php echo e($e->title); ?></h6>
                    </div>
                </div></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>No popular events found.</p>
            <?php endif; ?>
        </div>

    <h2>Recommended</h2>

        <div class="wrapper">
            <?php $__currentLoopData = $recommendedEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($recommendedEvents->count() > 0): ?>
                <a href="/detail-event/<?php echo e($event->id_event); ?>">
                <div class="card" id="discover">
                    <img class="card-img-top" src="<?php echo e(url('/data_file/'.$e->event_logo)); ?>" alt="">
                    <div class="card-body">
                        <h6 class="card-title" style="color: #000000;"><?php echo e($e->title); ?></h6>
                    </div>
                </div>
                </a>
                <?php else: ?>
                <p>No recommended events found.</p>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/user/discovery.blade.php ENDPATH**/ ?>