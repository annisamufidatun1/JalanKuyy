<?php $__env->startSection('body'); ?>
    <div class="container align-items-center display-flex">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col col-lg-11 height-100 d-inline-block" style="background-color: white; margin: auto; border-radius: 15px;">
                <h5 class="title-settings" style="margin-top: 10px; margin-bottom: 10px;">Rejected Event</h5>
            </div>
            <div class="col-md-1 sm-2 justify-content-center">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 30px; color: #143362; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 justify-content-center bg-settings">
                <div class="container" style="margin-top: 20px; margin-bottom: 70px;">
                    <div class="row">
                        <div class="col-lg-1 md-2">
                            <a href="/settings" class="button"><iconify-icon icon="emojione-monotone:left-arrow" style="font-size: 34px; color: #143362; opacity: 70%;"></iconify-icon>
                            </a>
                        </div>
                        <div class="col-lg-10 md-10">
                            <div class="row">
                                <div class="col12">
                                    <h5 class="title-settings" style="margin-bottom: 20px;">Detail Issue</h5>
                                </div>

                                <?php $__currentLoopData = $regist_forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12" style=" margin-bottom: 20px; border-radius: 15px; background-color: #D9D9D9; min-height: 270px; max-height: auto;">
                                    <p class="text-justify" style="padding-top: 15px; color: #666666;">
                                        We're sorry, but your event request has been denied. This could be because <?php echo e($g->issue); ?>

                                        <br><br>Submission id: <?php echo e($g->id_form); ?>

                                        <br>Title: <?php echo e($g->title); ?>

                                        <br>Status: <?php echo e($g->status); ?>

                                        <br>Payment has returned to your bank account.
                                    </p>
                                </div>

                                <div class="col-md-12 d-flex" style="margin-bottom: 5px">
                                    <b><h5 class="title-settings">Proof of Refund</h5></b>
                                </div>
                                <div class="col-md-12 d-flex">
                                    <a href="<?php echo e(route('download.photo', ['id' => $g->id_ref])); ?>" target="_blank" style="border-radius: 30px; background-color: #D9D9D9; font-weight: bold; color: #666666; padding: 10px 20px; "><iconify-icon icon="uil:down-arrow" style="vertical-align: -0.02em; padding-right: 10px;"></iconify-icon>Download file</a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </div>
                      <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templatenosb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/user/rejectedevent.blade.php ENDPATH**/ ?>