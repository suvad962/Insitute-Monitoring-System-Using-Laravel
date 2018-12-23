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
                <form action="{{ action('Loginsession@selectinstitute') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10 mx-auto">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12 text-center">
                                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                        <div class="mw-100 mt-4">
                                           <p>Please select any institute first.</p>
                                        </div>
                                        <br>
                                        @if (session('status'))
                                            <div class="alert alert-danger">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>


 @php
         $auth_key = session()->get('authentication');
         $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
         $response = Unirest\Request::get(config("app.server_url")."institute/all", $headers);
         $decoded = json_decode($response->raw_body,true);

         if($decoded['message']=="TOKEN EXPIRED")
              { @endphp
                <div class="row ">
                    <div class="col-lg-12 col-md-12 text-center">
                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                        <div class="mw-100 mt-4">
                            <h1 aligh = "center"> Login Again. </h1>
                        </div>
                        <br>

                    </div>
                </div>
             @php
              }
         else{
                @endphp
                                <div align="center" class="form-group">
                                    @php
                                    //    $institute_id = session()->get('institute_id');
                                         //   echo $institute_id;
                                    @endphp
                                    <div class="col-lg-8 col-md-8 drop_class">

                                        <select name="select_institute" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id='class_name'>
                                            <option selected disabled>--Select--</option>

                                            
                                            @php 
                                                 foreach ($decoded["data"] as $key => $value) {
                                            @endphp

                                            <option value="<?php  echo $value["institute_id"] ; ?> ">
                                               
                                                @php
                                                print ($value['name'].' ('.$value['institute_id'].')');
                                                   

                                                @endphp
                                            </option>
                                            @php

                                                }
                                           
                                            @endphp

                                        </select>
                                        <button class="btn btn-success btn-block mt-4 mb-4">Select</button>
                                    </div>
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
