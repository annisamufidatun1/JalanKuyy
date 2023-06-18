<?php $__env->startSection('body'); ?>
    <div class="head-of-DE">
        <h3><b>Bookmarks</b></h3>
    </div>

    <br>

    <div class="content-of-bookmark">
        <?php $__currentLoopData = $bookmark; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <div class="card-body">
                <div class="row" style="color: #143362">
                    <div class="col-lg-2">
                        <img src="<?php echo e(url('/data_file/'.$b->event_logo)); ?>" class="rounded" alt="Event Logo of <?php echo e($b->title); ?>" width="125px" height="125px">
                    </div>
                    <div class="col-lg-9">
                        <h3><b><?php echo e($b->title); ?></b></h3>
                        <p>
                            <?php echo e($b->category); ?> • <?php echo e($b->event_location); ?>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <iconify-icon icon="material-symbols:calendar-month" width="23" height="23" style="vertical-align: -0.3em;"></iconify-icon>
                            <?php echo e($b->start_date); ?> until <?php echo e($b->end_date); ?>

                        </p>
                        <p><?php echo e(Str::limit($b->event_detail, 100)); ?></p>
                    </div>
                    <div class="col-lg-1">
                        <form action="/bookmark/delete-bookmark" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo method_field('POST'); ?>
                            <button type="submit" class="bookmark-event">
                                <input type="hidden" name="id_event" id="id_event" value="<?php echo e($b->id_event); ?>">
                                <iconify-icon icon="maki:cross" style="cursor: pointer; color: #143362"></iconify-icon>
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <button class="btnkotak">
                        <a href="/detail-event/<?php echo e($b->id_event); ?>" style="color: var(--biru-paling-tua)">Detail</a>
                </button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/user/bookmark.blade.php ENDPATH**/ ?>