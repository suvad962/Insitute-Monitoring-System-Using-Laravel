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
                            <h2 class="content-color-primary page-title">Edit Exam Form</h2>
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
                                    <p class="text-secondary mt-3">Edit Exam</p>
                                </div>
                            </div>
                            <hr>

                            <br>
                            <h5 class="m-0">Exam Details</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Class</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will fill this-->">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Section</label>
                                    <input type="text" class="form-control" placeholder="<!--API data will fill this-->">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Subject</label>
                                    <select type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">   <!--API data will fill this-->
                                      <option>--Select--</option>
                                      <option value="ban1">Bangla 1</option>
                                      <option value="ban2">Bangla 2</option>
                                      <option value="eng1">English 1</option>
                                      <option value="eng2">English 2</option>
                                      <option value="math">Mathametics</option>
                                      <option value="phy">Physics</option>
                                      <option value="che">Chemistry</option>
                                      <option value="bio">Biology</option>
                                      <option value="hmath">Higher Mathametics</option>
                                      <option value="ict">ICT</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Date Of Exam</label>
                                    <input type="date" class="form-control" placeholder="<!--API data will fill this-->"> <!--Be carefull. this is date format-->
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Exam Start Time</label>
                                    <input type="time" class="form-control" placeholder="<!--API data will fill this-->"> <!--Be carefull. this is time format-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Exam End Time</label>
                                    <input type="time" class="form-control" placeholder="<!--API data will fill this-->"> <!--Be carefull. this is time format-->
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
    @include('frontend.includeFiles.all-js')
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
</body>

</html>

<!-- Localized -->
