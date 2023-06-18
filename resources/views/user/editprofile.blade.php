@extends('layouts.templatenosb')
@section('body')
    <div class="container align-items-center display-flex" style="margin-top: 30px;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col col-lg-11 height-100 d-inline-block" style="background-color:  white; margin: auto; border-radius: 15px;">
                <h5  class="title-settings" style="margin-top: 10px; margin-bottom: 10px;">Settings</h5>
            </div>
            <div class="col-md-1 sm-2 justify-content-center">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 30px; color: #143362; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 justify-content-center bg-settings">
                <div class="container" style="margin-top: 20px; margin-bottom: 70px;">
                    <div class="row">
                        <div class="col-lg-1 md-1">
                            <a href="/settings" class="button"><a href="/settings" class="button"><iconify-icon icon="emojione-monotone:left-arrow" style="font-size: 34px; color: #143362; opacity: 70%;"></iconify-icon></a>
                        </div>
                        <div class="col-lg-10 md-10">
                            <div class="row">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                <h5 class="title-settings" style="margin-bottom: 20px;">Edit Profile</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"><iconify-icon icon="iconamoon:profile-circle-fill" style="font-size: 150px; color: #143362; opacity: 50%; vertical-align: ;"></iconify-icon></div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="name"  style="color: #143362; font-weight: bold;">Name</label>
                                        <input type="text" class="form-control" id="name" for="name" name="name" placeholder="" style="background-color: #D9D9D9">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthdate"  style="color: #143362; font-weight: bold;">Birth Date</label>
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" placeholder="MM/DD/YYYY" style="background-color: #D9D9D9">
                                            <span class="input-group-append" role="button">
                                                <span class="input-group-text"style="background-color: #D9D9D9">
                                                    <iconify-icon icon="solar:calendar-bold"></iconify-icon>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hobby"  style="color: #143362; font-weight: bold;">Hobby</label>
                                        <select class="form-control" id="hobby" for="hobby" name="hobby" style="background-color: #D9D9D9">
                                            <option>Music Enthusiast</option>
                                            <option>Book Enthusiast</option>
                                            <option>Dance Enthusiast</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="location" style="color: #143362; font-weight: bold;">Location</label>
                                        <input type="text" class="form-control" id="location" for="location" name="location" placeholder="Input your hometown" style="background-color: #D9D9D9">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"  style="color: #143362; font-weight: bold;">Email</label>
                                        <input type="email" class="form-control" id="email" for="email" name="email" placeholder="" style="background-color: #D9D9D9">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"  style="color: #143362; font-weight: bold;">Password</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" placeholder="" disabled>
                                                <button class="btn text-white" type="button" id="button-addon1" data-mdb-ripple-color="dark" style="background-color: #143362;">
                                                    Change
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <input type="submit" class="btn" value="Save" title="Send!" data-toggle="modal" data-target="#modalsuccess" style="border-radius: 10px; background-color: #FFC68F; margin-top: 15px; font-weight: bold;">
                                    </div>
                                </div>

                                <!--ModalSuccess-->
                                <div class="modal fade" id="modalsuccess" tabindex="-1" role="dialog" aria-labelledby="modalsuccessLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                            <div class="modal-header">
                                                <iconify-icon icon="icon-park-solid:success" style="font-size: 30px; margin-right: 10px; color: rgb(140, 240, 140);"></iconify-icon>
                                                <h5 class="modal-title" id="modalsuccessLabel">Success!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>The changes have been saved.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--date-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>
@endsection

<!--date-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>
