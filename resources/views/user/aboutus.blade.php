@extends('layouts.templatenosb')
@section('body')
    <div class="container align-items-center display-flex" style="margin-top: 30px;">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col col-lg-11 height-100 d-inline-block" style="background-color: white; margin: auto; border-radius: 15px;">
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
                        <div class="col-lg-1 md-2">
                            <a href="/settings" class="button"><a href="/settings" class="button"><iconify-icon icon="emojione-monotone:left-arrow" style="font-size: 34px; color: #143362; opacity: 70%;"></iconify-icon>
                            </a>
                        </div>
                        <div class="col-lg-10 md-10">
                            <div class="row">
                                <h5  class="title-settings" style="margin-bottom: 20px;">Contact and About Us</h5>
                            </div>
                            <p class="text-justify" style="color: #666666">With the JalanKuy Website, users can do random generators when they have free time to find activities or activities they want to do. In addition, users can choose according to the location and category of activities they want to do. Ratings of attractions and restaurants will be displayed. This can be taken into consideration as well as an attraction for users when choosing activities. The results of the users' search data will be in the form of a list view, depending on what criteria are included in the search and filter features.</p>
                            <table class="table table-borderless" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 5%;"><iconify-icon icon="ri:instagram-fill" style="font-size: 30px; color: #545454;"></iconify-icon></td>
                                        <td><p class="font-weight-bold" style="color: #666666">@jalankuy</p></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 5%;"><iconify-icon icon="ic:round-email" style="font-size: 30px; color: #545454;"></iconify-icon></td>
                                        <td><p class="font-weight-bold" style="color: #666666">jalankuy@gmail.com</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
