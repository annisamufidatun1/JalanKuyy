<?php $__env->startSection('body'); ?>

<div class="head-of-DE">
    <h2><b>
        <a href="/admin">
            <iconify-icon icon="mdi:arrow-left-circle" style="vertical-align: -0.175em;"></iconify-icon>
        </a> Refund Form<b></h2>
</div>

<br>

<div class="content-of-RF">
    <?php $__currentLoopData = $regist_forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><b>Event Details</b></h3>
    <form> <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <b><label for="title">Title:</label></b>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter your event name here" value="<?php echo e($r->title); ?>" disabled>
        </div>

        <div class="form-group">
            <b><label for="location">Location:</label></b>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter your event location here" value="<?php echo e($r->event_location); ?>" disabled>
        </div>

        <div class="form-group">
            <b><label for="category">Category:</label></b>
            <input type="text" class="form-control" id="category" name="category" placeholder="Choose your event category" value="<?php echo e($r->category); ?>" disabled>
        </div>

        <div class="form-group">
            <b><label for="price">Ticket Price:</label></b>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter 0 if your event is free" value="<?php echo e($r->ticket_price); ?>" disabled>
        </div>

        <div class="form-group row">
            <div class="col-lg-5">
                <b><label for="startDate">Start Date:</label></b>
                <input type="date" name="startDate" id="startDate" class="form-control" placeholder="DD/MM/YYYY"value="<?php echo e($r->start_date); ?>" disabled>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <b><label for="endDate">End Date:</label></b>
                <input type="date" name="endDate" id="endDate" class="form-control" placeholder="DD/MM/YYYY" value="<?php echo e($r->end_date); ?>" disabled>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="form-group">
            <b><label for="eventDetails">Event Details:</label></b>
            <textarea rows="5" type="text" class="form-control" id="eventDetails" name="eventDetails" placeholder="Enter description about your event" style="height: 125px" disabled><?php echo e($r->event_detail); ?></textarea>
        </div>

        <div class="form-group">
            <b><label for="accNumber">Account Number:</label></b>
            <input type="number" class="form-control" id="accNumber" name="accNumber" placeholder="Enter your account number for payment" value="<?php echo e($r->account_number); ?>" disabled>
        </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <br>
    <br>

    <?php $__currentLoopData = $regist_forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><b>Rejected Detail</b></h3>
    <form action="/admin/refund-form/upload" method="post" enctype="multipart/form-data">

        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="id_form" id="id_form" value="<?php echo e($r->id_form); ?>">

        <div class="form-group">
            <b><label for="issue">Detail Issue:</label></b>
            <textarea rows="5" type="text" class="form-control" id="issue" placeholder="Enter the reason for rejecting this event" name="issue" style="height: 100px"></textarea>
        </div>

        <div class="form-group">
            <b><label for="refund_proof">Proof of Refund:</label></b>
            <input type="file" class="form-control" id="refund_proof" placeholder="Enter the reason for rejecting this event" name="refund_proof" style="height: 100px; width:50%;">
        </div>

        <div class="row justify-content-center" style="border:none; color: var(--biru-paling-tua)">
            <input type="submit" value="Submit" class="btn">
        </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/admin/refundForm.blade.php ENDPATH**/ ?>