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
        <!-- sidebar left ends -->

        <!-- sidebar right -->
        
        <!-- sidebar right ends -->

        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">Edit Teacher Form</h2>
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
                                  <p class="text-secondary mt-3">Edit Teacher</p>
                              </div>
                          </div>
                          <hr>

                          <br>
                          <h5 class="m-0">Teacher Name and Details</h5>
                          <hr>
                          <div class="form-group row">
                            <div class="col-lg-4 col-md-4">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6">
                                <label>Gender</label>
                                <select type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">  <!--API data will Fill This-->
                                  <option>--Select--</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                  <option value="other">Others</option>
                              </select>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <label>Subject Speciality</label>
                            <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6 col-md-6">
                            <label>NID Number</label>
                            <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label>TIN Number</label>
                            <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4">
                            <label>Teacher Type</label>
                            <select type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">   <!--API data will Fill This-->
                              <option>--Select--</option>
                              <option value="full_time">Full Time</option>
                              <option value="part_time">Part Time</option>
                          </select>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="<!--API data will Fill This-->">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label>Status</label>
                        <select type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">   <!--API data will Fill This-->
                          <option>--Select--</option>
                          <option value="available">Available</option>
                          <option value="navailable">Not Available</option>
                      </select>
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
            <h5 class="m-0">Present Address</h5>
            <hr>
            <div class="form-group row">
                <div class="col-lg-4 col-md-4">
                    <label>Road Number</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-4 col-md-6">
                    <label>House Number</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Sector</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Post Code</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Post Office</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
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
            <h5 class="m-0">Parmanent Address</h5>
            <hr>
            <div class="form-group row">
                <div class="col-lg-4 col-md-4">
                    <label>Road Number</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-4 col-md-6">
                    <label>House Number</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Sector</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Post Code</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Post Office</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
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
            <h5 class="m-0">Qualifications</h5>
            <hr>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Title Qualification</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Other Qualifications</label>
                    <input type="text" class="form-control" placeholder="<!--API data will Fill This-->">
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
