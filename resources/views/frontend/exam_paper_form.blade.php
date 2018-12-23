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
                    <div class="col">
                        <h2 class="content-color-primary page-title"></h2>
                        <p class="content-color-secondary page-sub-title"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content page title ends -->

    <!-- content page -->
    @php
    $section_id = "";
    $exam_id = "";
        if (session('section_id'))

      $section_id =  session('section_id');
     //  echo "$section_id ";

        if (session('exam_id'))

      $exam_id =  session('exam_id');
     //  echo $exam_id;


    @endphp

    <div class="container mt-4 main-container">
        <div class="card mb-4">
            <form action="{{ action('FormDataPushToApi@exam_papers_form_data') }}" method="post">
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

                                </div>
                            </div>


                            @php
                                $auth_key = session()->get('authentication');

                                $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                $url = "http://153.92.4.251:3000/api/v1/class/section/{$section_id}/student/list";
                                $response = Unirest\Request::get($url, $headers);


                                $decoded = json_decode($response->raw_body,true);
                              //  var_dump($decoded);

                                if($decoded['message']=="TOKEN EXPIRED")
                                     { @endphp

                            <div class="row ">
                                <div class="col-lg-12 col-md-12 text-center">
                                <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                    <div class="mw-100 mt-4">
                                        <h1 align = "center"> Login Again. </h1>
                                    </div>
                                    <br>

                                </div>
                            </div>

                            @php

                                }

                           else{
                            @endphp

                            <hr>

                            <br>
                            <h5 class="m-0">Exam Information</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12">

                                        <table style="width:100%" border="1">
                                            <tr align="center">
                                                <th>Student Name</th>
                                                <th>Roll</th>
                                                <th>Marks</th>
                                            </tr>
                                                    @php
                                                        foreach ($decoded["data"] as $key => $value) {
                                                    @endphp
                                            <tr>
                                                <td>
                                                    <input type="hidden" class="form-control" name="student_id[]" value="@php echo $value['student_id']; @endphp">
                                                    @php
                                                        if ( empty($value['name']['first_name'])){
                                                           $value['name']['first_name'] = "";
                                                         }
                                                         if ( empty($value['name']['last_name'])){
                                                           $value['name']['last_name'] = "";
                                                         }
                                                       echo "<div align='center'>".$value['name']['first_name'] . " " . $value['name']['last_name']."</div>";
                                                    @endphp
                                                </td>
                                                <td>
                                                    <input type="hidden" class="form-control" name="exam_id[]" value="@php echo $exam_id; @endphp">
                                                    @php
                                                        echo "<div align='center'>".$value['roll_no']."</div>";
                                                    @endphp
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="marks[]" placeholder="N/A" maxlength="3" required>
                                                </td>
                                            </tr>
                                                @php

                                            }


                                        @endphp


                                        </table>


                                </div>
                            </div>



                            <div class="card-footer">
                                <button class="btn btn-success btn-block">Submit</button>
                            </div>
                            @php } @endphp
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- content page ends -->

    @include('frontend.includeFiles.all-js')
</body>



</html>

<!-- Localized -->
