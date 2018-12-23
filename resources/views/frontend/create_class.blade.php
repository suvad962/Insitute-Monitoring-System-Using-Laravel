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
    @include('frontend.includeFiles.loader-css')
    <title>Mobipath</title>
</head>

<body class="fixed-header sidebar-right-close">


<!--Api-->
@php
    $auth_key = session()->get('authentication');
    $institute_id = session()->get('institute_id');
    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
    $api_url =config('app.server_url')."class/{$institute_id}/all";
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


    <!-- content page title -->
    <div class="container-fluid bg-light-opac">
        <div class="row">
            <div class="container my-3 main-container">
                <div class="row">
                    <div class="col-lg-4 col-md-4"></div>
                    <div align="center" class="col-lg-4 col-md-4">
                        <h2 class="content-color-primary page-title">View All Class</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 btn pull-right">
                        <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal"
                                data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Create</span>
                        </button>
                    </div>
                </div>
                <div align="center">
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
                        <div class="card-body">
                            <table class="table table-bordered table-striped text-center" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th class="">Class Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $messagelength = strlen($decoded['message']);
                                    if(http_response_code() == 200){
                                       if($decoded['success'] === true && count($decoded['data']) > 0){
                                   foreach ($decoded['data'] as $key => $value)
                                   {

                                @endphp
                                <tr>
                                    <td>
                                        @php
                                            getValue('class_name',$value);
                                        @endphp
                                    </td>
                                </tr>
                                @php
                                    }}
                                     else{
                                @endphp
                                <td>
                                    @php
                                        print($decoded['message']);
                                    @endphp
                                </td>
                                @php
                                    }}
                                    else{
                                      return redirect('/');
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
    </div>
    <!-- content page ends -->

</div>

@include('frontend.inc.footer');

<!-- modal for create form -->
<div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg hidden-after-submit" role="document">
        <div class="modal-content">
            <div class="modal-header" id="createOrderTitle">
                <div class="col text-center">
                    <h4>Create Class</h4>
                    <br>
                </div>
                <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('FormDataPushToApi@addclass') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <!-- <div class="form-group row">
                                <div class="col-lg-12 col-md-12">
                                    <h6>From which class your school start and which class to end?</h6>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <div class="col-lg-12 col-md-12">
                                    <label>Class Name</label>
                                    <select name="class_name" type="text" class="form-control">
                                        <option value="">--Select Class--</option>
                                        <option value="ONE">ONE</option>
                                        <option value="TWO">TWO</option>
                                        <option value="THREE">THREE</option>
                                        <option value="FOUR">FOUR</option>
                                        <option value="FIVE">FIVE</option>
                                        <option value="SIX">SIX</option>
                                        <option value="SEVEN">SEVEN</option>
                                        <option value="EIGHT">EIGHT</option>
                                        <option value="NINE">NINE</option>
                                        <option value="TEN">TEN</option>
                                        <option value="ELEVEN">ELEVEN</option>
                                        <option value="TWELVE">TWELVE</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-rounded pink-gradient text-uppercase pr-3" type="submit" data-toggle="modal" data-target="#createModalNew"><i class="material-icons"></i> <span class="text-hide-xs">Submit</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal for create form ends-->
@include('frontend.includeFiles.all-js')
<!-- page specific script -->
<div class="modal fade" id="createModalNew" style="margin: 100px auto;" role="dialog">
    <div class="sk-cube-grid ">
  <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>
  </div>
  
<script type="text/javascript">
    $(document).ready(function () {
        console.log('document ready')
    })
    $("#bbbbbb").click(function () {
        console.log('document ready');
        $(".hidden-after-submit").css('display', 'none');
        $(".show-after-submit").css('display', 'block');
    });
</script>

<script>
    "use strict"
    $("#my-dropzone").dropzone({
        url: "../file-upload",
        addRemoveLinks: "dictRemoveFile"
    });

    $(function () {
        $('.datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901
        }, function (start, end, label) {
        });
    });
</script>
</body>
</html>
<!-- Localized -->
