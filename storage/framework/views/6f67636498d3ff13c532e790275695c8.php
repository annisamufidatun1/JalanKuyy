<?php $__env->startSection('body'); ?>
    <div class="container-fluid">
        <div class="row" id="overall">
            <div class="col" id="content">
                <h2>Hello, <?php echo e(auth()->user()->name); ?></h2>
                <h3>Welcome and explore the world with Jalankuy.</h3>

                <form>
                    <div class="row">
                        <form action="/dashboard/search" method="GET">
                            <div class="col-7" id="searchbar">
                                <input type="text" class="container-fluid" id="search" name="search" placeholder="Search for your favourite destination" value="<?php echo e(old('search')); ?>">
                            </div>

                            <div class="col-2" id="searchbar">
                                <button type="submit" class="search-btn" id="search-btn">
                                    Search
                                </button>
                            </div>
                        </form>

                        <div class="col-1" id="filter">
                            <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                            <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1" id="notif">
                            <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
                        </div>

                        <div class="col-1" id="mini-profile">
                            <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
                        </div>
                    </div>
                </form>


                    <h2>Popular Today</h2>
                <div class="container-fluid" id="popular">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo e(url('/data_file/'.$popularEvents->event_logo)); ?>" alt="" style="height: 220px; width: 220px; margin-left:20px">
                        </div>
                        <div class="col-8">
                            <h5 style="font-family: 'Poppins'; font-weight: 700; font-size: 28px; color: #143362"><?php echo e($popularEvents->title); ?></h5>
                            <p style="font-size: 20px; vertical-align:middle; margin:10px 0">
                                <iconify-icon icon="ion:location-outline" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> <?php echo e($popularEvents->event_location); ?>

                            </p>
                            <p style="font-size: 20px; vertical-align:middle; margin:0">
                                <iconify-icon icon="ant-design:star-filled" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> <?php echo e($popularEvents->event_rating); ?>

                            </p>
                            <p style="color:#5F647E; margin-top: 10px" class="text-truncate">
                                <?php echo e($popularEvents->event_detail); ?>

                            </p>
                            
                                <a href="/detail-event/<?php echo e($popularEvents->id_event); ?>">
                                <button type="button" class="btn" style="background-color: #FFC68F; border-radius: 10px ">
                                    Detail
                                </button></a>
                                <button type="button" class="btn" style="background-color: #FD7B46; border-radius: 10px; margin-left: 10px">
                                    Get a Ticket
                                </button>
                            
                        </div>
                    </div>
                </div>

                <h2>Discover World</h2>
                    <div class="wrapper">
                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>

                        <div class="card" id="discover">
                            <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                            <div class="card-body">
                                <h6 class="card-title">(Nama Event)</h6>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dbjalankuy\resources\views/dashboard.blade.php ENDPATH**/ ?>