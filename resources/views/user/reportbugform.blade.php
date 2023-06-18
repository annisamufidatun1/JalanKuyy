@extends('layouts.templatenosb')
@section('body')
    <div class="container align-items-center display-flex" style="margin-top: 30px;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col col-lg-11 height-100 d-inline-block" style="background-color: white; margin: auto; border-radius: 15px;">
                <h5 class="title-settings" style="margin-top: 10px; margin-bottom: 10px;">Settings</h5>
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
                            <form action="/settings/reportbug/success" method="post">
                                <div class="row">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                                    <h5 class="title-settings" style="margin-bottom: 20px;">Report a Bug</h5>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="reportdetails" id="reportdetails" placeholder="What is the problem?" style=" margin-bottom: 20px; border-radius: 15px; background-color: #D9D9D9; height: 200px;"></textarea>
                                    <input type="date" value="<?php echo date("Y-m-d");?>" name="reportdate" id="reportdate" style="margin-bottom: 10px;border-radius: 10px; background-color: #D9D9D9;" class="no-border">
                                </div>
                                <div class="d-flex flex-row-reverse justify-content-end">
                                    <input type="submit" class="btn" value="Report" title="Send!" style="border-radius: 10px; background-color: #FFC68F; font-weight: bold;">
                                </div>
                            </form>
                      </div>
                      <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
