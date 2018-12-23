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
   
    <title>Welcome to Mobipath</title>
    <style>
        .required:before { content:" *";
        color:red;}
    </style>
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

        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <h2 class="content-color-primary page-title">Add New Institute</h2>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            @if (session('status'))
                                <div class="alert alert-success text text-center">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('statuss'))
                                <div class="alert alert-danger text text-center">
                                    {{ session('statuss') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-4 btn pull-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
                <form action="{{ action('FormDataPushToApi@addinstitution') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                    <div class="mw-100 mt-4">
                                      <h2>Welcome to Mobipath</h2>
                                    </div>
                                    <br>
                                    <p class="text-secondary mt-3">Add New Institution</p>
                                </div>
                            </div>
                            <hr>

                            <br>
                            <h5 class="m-0">Institution Name and Details</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>Short Name</label>
                                    <input name="short_name" type="text" class="form-control" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>School Code</label>
                                    <input name="school_code" type="text" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>College Code</label>
                                    <input name="college_code" type="text" class="form-control" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>EIIN Code</label>
                                    <input name="eiin_code" type="number" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>ESTD</label>
                                    <input name="estd_number" type="number" class="form-control" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="">
                                    <label>Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="">
                                    <label>Telephone Number</label>
                                    <input name="phone_number" type="number" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Mobile Number</label>
                                    <input name="mobile_number" type="number" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Total Student</label>
                                    <input name="total_student" type="number" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Instition Type</label>
                                    <select name="type" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" required>
                                        <option>-- Select --</option>
                                        <option value="School">School</option>
                                        <option value="College">College</option>
                                        <option value="Madrasha">Madrasha</option>
                                        <option value="Kindergarten">Kindergarten</option>
                                        <option value="Technical">Technical School</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h5 class="m-0">Location details</h5>
                            <hr>

                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="">
                                    <label>Address</label>
                                    <input name="addressline" type="text" class="form-control" placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Post Code</label>
                                    <input name="postcode" type="number" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">

                                    <label>Post Office</label>
                                    <input name="postOffice" type="text" class="form-control" placeholder="">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Upazilla</label>
                                    <input name="upazilla" type="text" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>District</label>
                                    <input name="district" type="text" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>

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
    <!-- <footer class="border-top">
        <div class="row">
            <div class="col-12 col-sm-6">All the rights reserved to © <b>Mobipath</b> </div>
            <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary">Privacy Policy</a> | <a href="" class="content-color-secondary">Terms of use</a></div>
        </div>
    </footer> -->
@include('frontend.inc.footer')

    <!-- Footable jquery file -->
    <script src="{{ asset('frontend') }}/vendor/footable-bootstrap/js/footable.min.js"></script>
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
