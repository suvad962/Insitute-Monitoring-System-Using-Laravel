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

    <div class="container mt-4 main-container">
        <div class="card mb-4">
            {{--<form action="{{ action('Loginsession@exam_papers') }}" method="post">--}}
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
                                $institute_id = session()->get('institute_id');

                             //   echo "$auth_key ";
                                $teacher_id = session()->get('username');
                                $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                $url = "http://153.92.4.251:3000/api/v1/exam/paper/{$teacher_id}";

                                $response = Unirest\Request::get($url, $headers);


                                $decoded = json_decode($response->raw_body,true);
                             //   var_dump($decoded);

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
                            <h5 class="m-0"></h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12">

                                    {{--<select name="section_id" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id='class_name'>--}}
                                        {{--<option>--Select--</option>--}}

                                        <table style="width:100%">
                                            <tr align="center">
                                                <th>Select Exam Papers</th>

                                            </tr>


                                        @php
                                            foreach ($decoded["data"] as $key => $value) {
                                        @endphp
                                            @php //echo "$institute_id "; @endphp
                                            @php //echo $value['section_id']; @endphp
                                            @php //echo $value['exam_id']; @endphp

                                        <tr align="center">
                                            <td>
                                                <div><a href="/exam_paper/@php echo $value['section_id']; @endphp/@php echo $value['exam_id']; @endphp">
                                                    {{--<input type="hidden" class="form-control" name="section_id" value="@php echo $value['section_id']; @endphp">--}}
                                                    @php
                                                            echo $value['class']." (".$value['section'].") ". ", ". $value['subject'];
                                                           // echo $value['section_id'];
                                                    @endphp</a>
                                                </div>
                                            </td>
                                        </tr>

                                        {{--<option value="@php echo $value['section_id']; @endphp">--}}
                                            {{--@php--}}
                                                {{--echo $value['class']." (".$value['section'].") ". ", ". $value['subject'];--}}
                                            {{--@endphp--}}
                                        {{--</option>--}}
                                        @php

                                            }


                                        @endphp

                                        </table>



                                </div>
                            </div>



                            {{--<div class="card-footer">--}}
                                {{--<button class="btn btn-success btn-block">Submit</button>--}}
                            {{--</div>--}}
                            @php } @endphp
                        </div>
                    </div>
                </div>

            {{--</form>--}}
        </div>
    </div>
    <!-- content page ends -->
    @include('frontend.includeFiles.all-js')
</body>



</html>

<!-- Localized -->
