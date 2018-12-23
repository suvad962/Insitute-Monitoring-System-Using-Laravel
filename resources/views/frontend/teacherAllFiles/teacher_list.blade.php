<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/bootstrap-4.1.3/css/bootstrap.min.css">

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/materializeicon/material-icons.css">

    <!-- aniamte CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/animatecss/animate.css">

    <!-- swiper carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/swiper/css/swiper.min.css">

    <!-- daterange CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/daterangepicker.css">

    <!-- dataTable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <!-- jvector map CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- app CSS -->
    <link id="theme" rel="stylesheet" href="{{ asset('frontend') }}/css/purplesidebar.css" type="text/css">

    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close">


<!--Api-->
@php
    $auth_key = session()->get('authentication');

    $institute_id = session()->get('institute_id');
    $api_url = config("app.server_url")."teacher/{$institute_id}/all";

    $headers = array('Accept' => 'application/json','Authorization' => $auth_key );
    $query = array('foo' => 'hello', 'bar' => 'world');

    $response = Unirest\Request::get($api_url, $headers);


    $decoded = json_decode($response->raw_body,true);
    function getValue($key,$array){
      if(array_key_exists($key,$array)){
        print $array[$key];
      }else{
        print "N/A";
      }
    }
@endphp
<!--Api-->

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
                    <div class="col">
                        <?php // echo $institute_id; ?>
                        <h2 class="content-color-primary page-title">All Teacher List</h2>
                        <p class="content-color-secondary page-sub-title">All Teacher are Here...</p>
                    </div>
                    <div class="btn pull-center">
                        @if (session('status'))
                            <div class="alert alert-success text text-center">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content page title ends -->

    <!-- content page -->
    <div class="container mt-4 main-container">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
                <div class="card mb-4 fullscreen">
                    <div class="card-header">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="content-color-primary mb-0">Teacher List</h4>
                            </div>
                            <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                <i class="material-icons ">crop_free</i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table striped class="table " id="dataTables-example">
                            <thead>
                            <th>Teacher Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject Speciality</th>

                            </thead>
                            <tbody>

                            @php
                                //echo http_response_code();
                               // var_dump("Data" . $decoded['data']) ;
                                if(http_response_code()== 200){

                                  if($decoded['success'] === true && count($decoded['data']) > 0){

                                      foreach ($decoded['data'] as $key => $value){
                                        if ( empty($value['name']['first_name'])){
                                          $value['name']['first_name'] = "";
                                        }
                                        if ( empty($value['name']['middle_name'])){
                                          $value['name']['middle_name'] = "";
                                        }
                                        if ( empty($value['name']['last_name'])){
                                          $value['name']['last_name'] = "";
                                        }
                            @endphp
                            <tr>
                                <td>
                                    @php
                                        echo $value['name']['first_name']. " " . $value['name']['middle_name']. " " . $value['name']['last_name'];
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        getValue('gender',$value);
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        getValue('email',$value);
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        getValue('phone_no',$value);
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        getValue('subject_speciality',$value);
                                    @endphp
                                </td>
                            </tr>
                            @php
                                }
                            }
                            else{
                                echo '<div align="center">No Teachers Found!</div>';
                            }
                          }
                          else {
                            echo '<div align="center">Server Error!</div>';
                          }
                            @endphp


                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- main container ends -->

</div>
<footer class="border-top">
    <div class="row">
        <div class="col-12 col-sm-6">All the rights reserved to © <b>Mobipath</b> </div>
        <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary">Privacy Policy</a> | <a href="" class="content-color-secondary">Terms of use</a></div>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>

<!-- Cookie jquery file -->
<script src="{{ asset('frontend') }}/vendor/cookie/jquery.cookie.js"></script>

<!-- sparklines chart jquery file -->
<script src="{{ asset('frontend') }}/vendor/sparklines/jquery.sparkline.min.js"></script>

<!-- Circular progress gauge jquery file -->
<script src="{{ asset('frontend') }}/vendor/circle-progress/circle-progress.min.js"></script>

<!-- Swiper carousel jquery file -->
<script src="{{ asset('frontend') }}/vendor/swiper/js/swiper.min.js"></script>

<!-- Chart js jquery file -->
<script src="{{ asset('frontend') }}/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/chartjs/utils.js"></script>

<!-- DataTable jquery file -->
<script src="{{ asset('frontend') }}/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('frontend') }}/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

<!-- datepicker jquery file -->
<script src="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/moment.js"></script>
<script src="{{ asset('frontend') }}/vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>

<!-- jVector map jquery file -->
<script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
<script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- circular progress file -->
<script src="{{ asset('frontend') }}/vendor/circle-progress/circle-progress.min.js"></script>

<!-- Application main common jquery file -->
<script src="{{ asset('frontend') }}/js/main.js"></script>

<!-- page specific script -->
<script>
    "use strict"
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            "order": [
                [3, "desc"]
            ]
        });
    });

</script>
</body>

</html>

<!-- Localized -->
