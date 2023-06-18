<?php $__env->startSection('body'); ?>
    <div class="container display-flex align-items-center">
        <div class="row">
            <div class="col-lg-9" style="background-color: #D9D9D9; margin: auto auto auto 20px; border-radius: 15px;">
                <h5  class="title-settings" style="margin-top: 10px; margin-bottom: 10px;">Register Event</h5>
            </div>
            <div class="col-lg-2 d-flex justify-content-center align-items-center" style="margin-right: 10px;">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 28px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 7px;"></iconify-icon>
                <iconify-icon icon="iconamoon:profile-circle-fill" style="font-size: 50px; color: #143362; opacity: 70%; vertical-align: -0.09em;"></iconify-icon>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="row">


                    <?php $__currentLoopData = $regist_forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12" id="set_dtl">
                        <div class="p-4 whitecard rounded-4 shadow-effect white">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-lg-2">
                                    <img width="90 px" src="<?php echo e(url('/poster_event/'.$p->event_poster)); ?>" class="img-fluid image">
                                </div>
                                <div class="col-lg-10 content-event">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="judul1"><?php echo e($p->title); ?></h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-event"><?php echo e($p->event_location); ?> - <?php echo e($p->category); ?></p>
                                        </div>
                                        <div class="col-8">
                                            <p class="text-event"><iconify-icon icon="uil:calender" style="font-size: 20px; color: #143362; vertical-align: -0.2em;"></iconify-icon>  <span>26-25 september 2023</span></p>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0 text-truncate text-event" style="max-width: 150px;"><?php echo e($p->event_detail); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top row d-flex justify-content-end">
                                <?php if($p->status === 'approved'): ?>
                                    <a href="/detail-event/<?php echo e($p->id_form); ?>" class="btn btn-success"><?php echo e($p->status); ?></a>
                                <?php elseif($p->status === 'rejected'): ?>
                                    <a href="/register-event/rejected/detail-issue/<?php echo e($p->id_form); ?>" class="btn btn-danger"><?php echo e($p->status); ?></a>
                                <?php else: ?>
                                    <button class="btn" disabled><?php echo e($p->status); ?></button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div>
                    <a href="/registform"><iconify-icon icon="mdi:add-bold" style="font-size: 40px; color:#143362; background-color:#FFC68F; border-radius: 100%; padding: 10px; position: fixed; bottom: 2em; display: flex;"></iconify-icon></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/user/registeventuser.blade.php ENDPATH**/ ?>