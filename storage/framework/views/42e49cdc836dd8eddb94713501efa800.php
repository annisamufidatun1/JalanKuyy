<?php $__env->startSection('body'); ?>
<div class="container display-flex align-items-center">
    <div class="row">
        <div class="col-9">
            <h4 class="judul1">Hello, Admin!</h4>
            <p class="subjudul">Welcome back and check their request.</p>
        </div>
        <div class="col-3">
            <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
            <iconify-icon icon="iconamoon:profile-circle-fill" style="font-size: 57px; color: #143362; opacity: 70%; vertical-align: -0.09em;"></iconify-icon>
        </div>

        <div class="col-xl-12 col-lg-12">
            <div class="container">
                <h5 class="judul2">Event Listings</h5>
                <?php $__currentLoopData = $regist_forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($p->status === 'pending'): ?>
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
                        <div class="border-top row">
                            <div class="col-9"></div>
                            <div class="col-3">
                                <a class="btn" data-toggle="modal" data-target="#popupEvent" role="button">Detail</a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    <div class="modal fade" id="popupEvent" tabindex="-1" role="dialog" aria-labelledby="popupEvent" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row" style="background-color: white; margin-bottom: 10px;">
                        <div class="col-12 text-left">
                            <div class="row">
                                <div class="col-2">
                                    <img width="90 px" src="<?php echo e(url('/poster_event/'.$p->event_poster)); ?>" class="img-fluid image">
                                </div>
                                <div class="col-10">
                                    <h5 class="title-modal">General Information</h5>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="title">Event Name</label></b>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($p->title); ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="ticketprice">Ticket Price</label></b>
                                                <input type="text" class="form-control" id="ticketprice" name="" value="50 jt" disabled>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="title">Location</label></b>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($p->event_location); ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="ticketprice">Start Date</label></b>
                                                <input type="text" class="form-control" id="ticketprice" name="" value=" <?php echo e($p->start_date); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="title">Category</label></b>
                                                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($p->category); ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="ticketprice">End Date</label></b>
                                                <input type="text" class="form-control" id="ticketprice" name="" value=" <?php echo e($p->end_date); ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <b><label class="subtitle-form" id="ticketprice">Payment Proof</label></b>
                                                <input type="text" class="form-control" id="ticketprice" name="" value="<?php echo e($p->payment_proof); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="title-modal">Event Details</h5>
                                <input type="text" class="form-control" id="ticketprice" name="" value="<?php echo e($p->event_detail); ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="modal-footer">
                <form action=<?php echo e(route('approve',$p->id_form)); ?> method="POST"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn-modal btn-success" id="accepted"><iconify-icon icon="icon-park-solid:check-one" style="color:white; vertical-align: -0.1em;"></iconify-icon>Approve</button>
                </form>
                <form action=<?php echo e(route('refundForm',$p->id_form)); ?> method="GET"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn-modal btn-danger" id="rejected"><iconify-icon icon="bxs:x-circle" style="color:white; vertical-align: -0.1em;"></iconify-icon>Reject</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.templateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/admin/dashboardadmin.blade.php ENDPATH**/ ?>