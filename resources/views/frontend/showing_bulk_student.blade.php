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
    <!-- page loader -->
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="{{ asset('frontend') }}/img/loader-hole.png" alt="" class="logo-image">
                <img src="{{ asset('frontend') }}/img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">Mobipath</h2>
        </div>
    </div>
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
                            <h2 class="content-color-primary page-title">Bulk Input for Students</h2>
                            <!-- <p class="content-color-secondary page-sub-title">All Institutes are Here...</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->







  

  
  
  





<!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
              <form class="form-horizontal" action="{{URL::to('/showing_bulk_student')}}" enctype="multipart/form-data" method="post">
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
                                    
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Class</label>
                                            <select name="_class" class="form-control">
                                                <option value="One">One</option>
                                                <option value="Two">Two</option>
                                                <option value="Three">Three</option>
                                                <option value="Four">Four</option>
                                                <option value="Five">Five</option>
                                                <option value="Six">Six</option>
                                                <option value="Seven">Seven</option>
                                                <option value="Eight">Eight</option>
                                                <option value="Nine">Nine</option>
                                                <option value="Ten">Ten</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Section</label>
                                            <select name="sec" class="form-control">
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                                
                                    <label>Attachments</label>
                                    <br>
                                    <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file">

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                
                            
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancel</button>
                    <button class="btn btn-success float-right">Submit</button>
                </div>
                
  
      </form>
            
        <table align="center">
                                
                                     <tr align="center">
                                        <!-- <th>Student ID</th> -->
                                        <th colspan="2">Student Name</th>
                                        <th>Gender</th>
                                        <th>Mobile No</th>
                                        <th>Email</th>
                                        <th>Religion</th>
                                        <th>Date Of Birth</th>
                                        
                                    </tr>
                                
                                
                     <?php 
                     $dt = $data;
                       foreach ($dt as $key => $value) {                                  
                                    
                                     ?>
                                <tr align="center"> <?php
                                        for ($i=0; $i < count($h[0]); $i++) { ?>
                                      
                                        <?php  
                                              if(($i==5) || ($i==7) || ($i==8) || ($i==9) || ($i==10) || ($i==11) || ($i==14))
                                              { if($dt[$key][$h[0][$i]] == ""){ ?>
                                                    <td><?php echo "_"; ?></td>
                                           <?php }
                                                else
                                                { ?>
                                               <td> <?php echo $dt[$key][$h[0][$i]]; ?> </td>
                                               <?php
                                               }
                                               
                                              }  ?>
                                      
                                    <?php    } ?> </tr> <?php } 

        ?>
                    
                    
                                    

                
        
                                
                            </table>
                            
                                    
                                    <div class="card-footer">
                                      
                                      <a href="/bulkOutputStudentJson" class="btn btn-primary">Upld</a>


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
