<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">

    <!-- dataTable CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    @include('frontend.includeFiles.all-css')
    @include('frontend.includeFiles.all-js')
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
                        <div class="col">
                            <h2 class="content-color-primary page-title">All Institute List</h2>
                            <p class="content-color-secondary page-sub-title">All Institutes are Here...</p>
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
                                    <h4 class="content-color-primary mb-0">Institute List</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table striped class="table " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Institute</th>
                                        <th>Type</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Total Student</th>
                                        <th>District</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>NDC<!--School Name--></td>
                                        <td>Government<!--Type--></td>
                                        <td class="center">NDC@example.com<!--Email--></td>
                                        <td class="center">+8801xxxxxxxxx<!--Phone Number--></td>
                                        <td class="center">1200<!--Total Student--></td>
                                        <td class="center">Dhaka<!--District--></td>
                                        <td class="center"><span class="btn btn-outline-success btn-sm">
                                            <a href="edit_istitute.html" class="btn btn-link btn-sm"><i class="material-icons icon">border_color</i> <span></span></a>
                                            <a href="#" class="btn btn-link btn-sm"><i class="material-icons icon">account_circle</i> <span></span></a>
                                            </span>
                                        </td>
                                    </tr>
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


 
    <!-- DataTable jquery file -->
    <script src="{{ asset('frontend') }}/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <!-- jVector map jquery file -->
    <script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="{{ asset('frontend') }}/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>


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
 