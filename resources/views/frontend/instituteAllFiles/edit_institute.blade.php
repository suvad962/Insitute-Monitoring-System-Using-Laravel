<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">
    @include('frontend.includeFiles.all-css')
    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close">
    
<!-- page loader -->
  @include('frontend.includeFiles.page-loader-frontend')
<!-- page loader ends  -->

    <div class="wrapper">
        <!-- main header -->
        @include('frontend.inc.header')
        <!-- main header ends -->

        <!-- sidebar left -->
        @include('frontend.inc.sidebar')
        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">Edit Institute Form</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                    <div class="mw-100 mt-4">
                                      <h2>MOBIPATH</h2>
                                    </div>
                                    <br>
                                    <p class="text-secondary mt-3">Edit Institution</p>
                                </div>
                            </div>
                            <hr>

                            <br>
                            <h5 class="m-0">Institution Name and Details</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Short Name</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>School Code</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>College Code</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>EIIN Code Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>ESTD Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Institution Type</label>
                                    <select type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">   <!--API data will Fill This-->
                                      <option>--Select--</option>
                                      <option value="govt">Government</option>
                                      <option value="ngovt">Non Government</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 class="m-0">Location details</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Road Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>House Number</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Sector</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Village</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>Post Code</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Post Office</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Total Student</label>
                                    <input type="number" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Upazilla</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>District</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Logo</label>
                                    <br>
                                    <div class="custom-dropzone text-center align-items-center" id="my-dropzone">
                                        <div class="dz-default dz-message" data-dz-message>
                                            <h3 class="mb-0"><i class="material-icons">cloud_download</i></h3>
                                            <p>Drop here or click here to upload</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancel</button>
                    <button class="btn btn-success float-right">Save</button>
                </div>
            </div>
        </div>
        <!-- content page ends -->

    </div>
    <footer class="border-top">
        <div class="row">
            <div class="col-12 col-sm-6">All the rights reserved to © <b>Mobipath</b> </div>
            <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary">Privacy Policy</a> | <a href="" class="content-color-secondary">Terms of use</a></div>
        </div>
    </footer>
      <!-- Dropzone jquery file -->
    <script src="{{ asset('frontend') }}/vendor/dropzone-master/dropzone.js"></script>
    <!-- page specific script -->
    <script>
        "use strict"
        $("#my-dropzone").dropzone({
            url: "../file-upload",
            addRemoveLinks: "dictRemoveFile"
        });

        $(function() {
            $('.datepicker').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901
            }, function(start, end, label) { });
        });
    </script>
     @include('frontend.includeFiles.all-js')
</body>

</html>

<!-- Localized -->
