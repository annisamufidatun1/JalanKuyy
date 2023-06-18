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
                <div class="container" style="margin-top: 20px; margin-bottom: 70px; margin-left: 20px; margin-right: 20px;">
                    <div class="row" style="background-color: #C9DAE8; margin-right: 20px; padding: 20px; border-radius: 15px;">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td rowspan="5"><iconify-icon icon="iconamoon:profile-circle-fill" style="font-size: 200px; color: #143362; opacity: 50%; vertical-align: ;"></iconify-icon></td>
                                    <td><h5  class="title-settings">Personal Information</h5></td>
                                    <td><a class="btn text-white" style="font-size: 15px; border-radius: 10px; background-color: #143362;" href="/settings/editprofile">Edit Profile</a></td>
                                </tr>
                                <tr>
                                    <td style="font-family: poppins; font-weight: bold; color: #666666">Name</td>
                                    <td>Mark Lee</td>
                                </tr>
                                <tr>
                                    <td style="font-family: poppins; font-weight: bold; color: #666666">Birth date</td>
                                    <td>10/09/1999</td>
                                </tr>
                                <tr>
                                    <td style="font-family: poppins; font-weight: bold; color: #666666">Hobbies</td>
                                    <td>Music Enthusiast</td>
                                </tr>
                                <tr>
                                    <td style="font-family: poppins; font-weight: bold; color: #666666">Location</td>
                                    <td>Surabaya</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <table class="table table-borderless" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th style="width: 70%;"></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="align-middle"><iconify-icon icon="ic:baseline-language" style="font-size: 30px; color: #143362; vertikal-align: -5px;"></iconify-icon></td>
                                    <td class="align-middle">Language</td>
                                    <td class="align-middle">English</td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><iconify-icon icon="mdi:information" style="font-size: 30px; color: #143362;"></iconify-icon></td>
                                    <td class="align-middle">Contact and About Us</td>
                                    <td class="align-middle"><a href="/settings/aboutus"><iconify-icon icon="ic:round-arrow-outward" style="font-size: 30px; color: #143362;"></iconify-icon></a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><iconify-icon icon="material-symbols:bug-report-rounded" style="font-size: 35px; color: #143362;"></iconify-icon></td>
                                    <td class="align-middle">Report a Bug</td>
                                    <td class="align-middle"><a href="/settings/reportbug"><iconify-icon icon="ic:round-arrow-outward" style="font-size: 30px; color: #143362;"></iconify-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
