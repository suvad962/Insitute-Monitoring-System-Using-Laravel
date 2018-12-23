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


        @include('frontend.inc.education-institute')
        
        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <h2 class="content-color-primary page-title">Add Teacher</h2>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            @if (session('statuss'))
                                <div class="alert alert-danger text text-center">
                                    {{ session('statuss') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-4 btn pull-right">
                            <h2 class="content-color-primary page-title"></h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
              <form action="{{ action('FormDataPushToApi@addteacher') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                  <p class="text-secondary mt-3">Add New Teacher</p>
                              </div>
                          </div>
                          <hr>

                          <br>
                          <h5 class="m-0">Teacher Name and Details</h5>
                          <hr>
                          <div class="form-group row">
                            <div class="col-lg-4 col-md-4">
                                <label>First Name</label>
                                <input name="first_name" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label>Middle Name</label>
                                <input name="middle_name" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <label>Last Name</label>
                                <input name="last_name" type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6">
                                <label>Gender</label>
                                <select name="gender" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                                  <option selected disabled>--Select--</option>
                                  <option value="MALE">Male</option>
                                  <option value="FEMALE">Female</option>
                                  <option value="OTHER">Others</option>
                              </select>
                          </div>
                          <div class="col-lg-6 col-md-6">
                            <label>Subject Speciality</label>
                            <input name="subject_speciality" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4">
                            <label>NID Number</label>
                            <input name="nid_number" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label>TIN Number</label>
                            <input name="tin_number" type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <label>Teacher's Index Number</label>
                            <input name="teacher_index" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4">
                            <label>Teacher Contract Type</label>
                            <select name="teacher_type" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                              <option selected disabled>--Select--</option>
                              <option value="FULL TIME">Full Time</option>
                              <option value="PART TIME">Part Time</option>
                          </select>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <label>Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <label>Status</label>
                        <select name="status" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                          <option selected disabled>--Select--</option>
                          <option value="AVAILABLE">Available</option>
                          <option value="navailable">Not Available</option>
                      </select>
                  </div>
              </div>
              <div class="form-group row">

                <div class="col-lg-6 col-md-6">
                    <label>Mobile Number</label>
                    <input name="mobile_no" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Telephone No</label>
                    <input name="phone_no" type="text" class="form-control" placeholder="">
                </div>
            </div>

            <br>
            <br>
            <h5 class="m-0">Present Address</h5>
            <hr>
            <div class="form-group row">
                <div class="col-lg-12 col-md-12">
                    <label>Address</label>
                    <input name="addressline" type="text" class="form-control" placeholder="">
                </div>

            </div>

            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Post Code</label>
                    <input name="present_post_code" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Post Office</label>
                    <input name="present_post_office" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Upazilla</label>
                    <input name="present_upazilla" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>District</label>
                    <input name="present_district" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <br>
            <br>
            <h5 class="m-0">Parmanent Address</h5>
            <hr>
            <div class="form-group row">
                <div class="col-lg-12 col-md-12">
                    <label>Address</label>
                    <input name="per_adderessline" type="text" class="form-control" placeholder="">
                </div>

            </div>

            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Post Code</label>
                    <input name="permanent_post_code" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Post Office</label>
                    <input name="permanent_post_office" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Upazilla</label>
                    <input name="permanent_upazilla" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>District</label>
                    <input name="permanent_district" type="text" class="form-control" placeholder="">
                </div>
            </div>
            <br>
            <br>
            <h5 class="m-0">Qualifications</h5>
            <hr>
            <div class="form-group row">

                <div class="col-lg-6 col-md-6">
                    <label>Title Qualification</label>
                    <input name="title_qualification" type="text" class="form-control" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <label>Other Qualifications</label>
                    <input name="other_qualification" type="text" class="form-control" placeholder="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-secondary">Cancel</button>
    <button class="btn btn-success float-right">Submit</button>
</div>
</form>
</div>
</div>
<!-- content page ends -->

</div>

@include('frontend.inc.footer')
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
