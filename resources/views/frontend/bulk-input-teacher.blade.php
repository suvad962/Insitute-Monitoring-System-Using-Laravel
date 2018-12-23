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
                            <h2 class="content-color-primary page-title">Bulk Input for Teachers</h2>
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
                                <div class="col-md-12">
                                    <label>Attachments</label>
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
                    <button class="btn btn-success float-right">Submit</button>
                </div>

        <?php





        // foreach ($data as $key => $value) {



        //      for ($i=0; $i < count($h[0]); $i++) {
        //          # code...
        //         ?>
                <!--  <pre> -->
                 <?php// echo $data[$key][$h[0][$i]]; ?>
               <!--   </pre> -->
                 <?php
        //      }

        // }

 ?>



            <html>

            <body>
                <div class="container mt-4 main-container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="card mb-4 fullscreen">
                          <div class="card-body">
                            <table border="1">

                                     <tr>
                                        <!-- <th>Student ID</th> -->
                                        <th colspan="3">Student Name</th>
                                        <th>Gender</th>
                                        <th>Mobile No</th>
                                        <th>Religion</th>
                                        <th>Date Of Birth</th>
                                        <th>Email</th>
                                    </tr>



                    <?php    foreach ($data as $key => $value) {

                                     ?>
                                            <tr> <?php
                                        for ($i=0; $i < count($h[0]); $i++) { ?>
                                      <td>
                                        <?php
                                              if(($i==5) || ($i==6) || ($i==7) || ($i==8) || ($i==9) || ($i==10) || ($i==11) || ($i==14))
                                              {
                                                echo $data[$key][$h[0][$i]];
                                              }  ?>
                                      </td>
                                    <?php    } ?> </tr> <?php }




        ?>

                            </table>
                            <!-- /.table-responsive -->
                             </div>
                    </div>
                </div>

            </div>
        </div>

       </body> </html>


        <!-- content page ends -->



    </div>

    @include('frontend.inc.footer');

    @include('frontend.includeFiles.all-js')

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
