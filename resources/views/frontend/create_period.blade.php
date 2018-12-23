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

<!-- Loader CSS-->
    <style type="text/css">
        .loader1 {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #3498db;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }
        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <!-- Loader End -->

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


    <!-- content page title -->
    <div class="container-fluid bg-light-opac">
        <div class="row">
            <div class="container my-3 main-container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <h2 class="content-color-primary page-title">View Class Schedule</h2>
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
                        <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Create</span></button>
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
                        <form action="{{ action('Loginsession@selectclassforperiod') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12">
                                   
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div align="center">
                                        <label class="text-danger">* Select class first to create *</label>
                                    </div>
                                    <div class="row  mt-4 mb-4">
                                        <div class="col-lg-4 col-md-4 drop_class">
                                            <select name="class_id" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id="class_id_for_period">
                                                <option selected disabled>Select Class</option>
                                                <!--Class id API-->
                                                @php
                                                    $auth_key = session()->get('authentication');
                                                    $institute_id = session()->get('institute_id');
                                                    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                                    $query = array('foo' => 'hello', 'bar' => 'world');
                                                    $api_url = "http://153.92.4.251:3000/api/v1/class/{$institute_id}/all";

                                                    $response = Unirest\Request::get($api_url, $headers);


                                                    $decoded = json_decode($response->raw_body,true);

                                                    $messagelength = strlen($decoded['message']);
                                                        if(http_response_code() == 200){
                                                        if($messagelength != 38){

                                                    foreach ($decoded["data"] as $key => $value) {
                                                @endphp
                                                <option value="<?php echo $value["class_id"]; ?> ">
                                                    @php
                                                        $selected_class_id = $value["class_id"];
                                                        print ($value['class_name'].'<br>');


                                                    @endphp


                                                </option>

                                                @php
                                                    }}
                                                 else{
                                                @endphp
                                                <option>
                                                    @php
                                                        print($decoded['message']);
                                                    @endphp
                                                </option>
                                                @php
                                                    }}else{
                                                        return redirect('/');
                                                    }
                                                @endphp
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 drop_class">
                                            <select name="section_id" type="number" class="form-control section_id_for_period" data-live-search="true" tabindex="-1" aria-hidden="true">
                                                <option selected disabled>Select Section</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label></label>
                                            <button type="submit" class="btn btn-primary">Go</button>
                                        </div>
                                    </div>
                                </div>

                        </form>
                        <hr>

                        <div class="card-body">
                            <table class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <th>Period Name</th>
                                    <th>Subject Name</th>
                                    <th>Day</th>
                                    <th>Teacher</th>
                                </thead>
                                <tbody>
                                @php
                                    if(session()->has('section_id_period')){

                                        $section_id_for_period = session()->get('section_id_period');
                                    }else{
                                        $section_id_for_period = 'initsection';
                                    }
                                    $auth_key = session()->get('authentication');
                                    $institute_id = session()->get('institute_id');
                                    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                    $query = array('foo' => 'hello', 'bar' => 'world');
                                    $api_url = "http://153.92.4.251:3000/api/v1/class/section/{$section_id_for_period}/period/all";

                                    $response = Unirest\Request::get($api_url, $headers);
                                    $decoded = json_decode($response->raw_body,true);

                                    function getperiod($key,$array){
                                      if(array_key_exists($key,$array)){
                                        print $array[$key];
                                      }else{
                                        print "N/A";
                                      }
                                    }

                                    if($response->code === 200){
                                        if($decoded['success'] === true){
                                            if(count($decoded['data']) > 0){
                                                foreach($decoded['data'] as $key=> $value){
                                                   @endphp
                                                        <tr>
                                                            <td>
                                                                @php
                                                                    getperiod('period_name',$value);
                                                                 @endphp
                                                            </td>
                                                            <td>
                                                                @php
                                                                    getperiod('subject_name',$value);
                                                                @endphp
                                                            </td>
                                                            <td>
                                                                @php
                                                                    getperiod('day',$value);
                                                                @endphp
                                                            </td>
                                                            <td>
                                                                @php
                                                                    if ( empty($value['teacher_name']['first_name'])){
                                                                        $value['teacher_name']['first_name'] = "";
                                                                    }
                                                                    if ( empty($value['teacher_name']['middle_name'])){
                                                                        $value['teacher_name']['middle_name'] = "";
                                                                    }
                                                                    if ( empty($value['teacher_name']['last_name'])){
                                                                        $value['teacher_name']['last_name'] = "";
                                                                    }
                                                                    $teacher = $value['teacher_name']['first_name']." ".$value['teacher_name']['middle_name']." ".$value['teacher_name']['last_name'];
                                                                    print($teacher);
                                                                @endphp
                                                            </td>
                                                        </tr>
                                                    @php
                                                }
                                            }else{
                                                @endphp
                                                    <td>
                                                        @php
                                                            print('No Data Found');
                                                        @endphp
                                                    </td>
                                                @php
                                            }

                                        }else{
                                            @endphp
                                                <td>
                                                    @php
                                                        print("Server Error");
                                                    @endphp
                                                </td>
                                            @php

                                        }

                                    }else{
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
</div>
<!-- content page ends -->
</div>

@include('frontend.inc.footer')



<footer class="border-top">
    <div class="row">
        <div class="col-12 col-sm-6"></div>
        <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary"></a><a href="" class="content-color-secondary"></a></div>
    </div>
</footer>

<!-- modal for create form -->
<div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" id="createOrderTitle">
                <div class="col text-center">
                    <h4>Create Periods</h4>
                    <br>
                </div>
                <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('FormDataPushToApi@addperiod') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Period Name</label>
                                    <select name="period_name" type="text" class="form-control" data-live-search="true"
                                            tabindex="-1" aria-hidden="true">
                                        <option>--Select--</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                        <option value="4th">4th</option>
                                        <option value="5th">5th</option>
                                        <option value="6th">6th</option>
                                        <option value="7th">7th</option>
                                        <option value="8th">8th</option>
                                        <option value="9th">9th</option>
                                        <option value="10th">10th</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Subject Name</label>
                                    <select name="subject_id" type="text" class="form-control" data-live-search="true"
                                            tabindex="-1" aria-hidden="true">
                                        <option>--Select--</option>
                                        @php
                                            $class_id_for_period = session()->get('class_id_period');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $query = array('foo' => 'hello', 'bar' => 'world');
                                            $url = "http://153.92.4.251:3000/api/v1/class/{$class_id_for_period}/subject/all";

                                            $response = Unirest\Request::get($url, $headers);
                                            $decoded = json_decode($response->raw_body,true);

                                            function getsubject($key,$array){
                                              if(array_key_exists($key,$array)){
                                                print $array[$key];
                                              }else{
                                                print "N/A";
                                              }

                                            }

                                            $response_code = $response->code;

                                            //var_dump($decoded['data']);
                                                $messagelength = strlen($decoded['message']);
                                              if($response->code === 200){
                                              if($messagelength != 22 ){
                                             foreach ($decoded['data'] as $key => $value)
                                             {

                                                 if(empty($value['teacher']))
                                                    {
                                                        echo "No teacher assigned";
                                                    }
                                                    else{
                                                        if ( empty($value['course']['course_id'])){
                                                          $value['course']['course_id'] = "";
                                                    }
                                                    //if(count($value[course]) >0){

                                                   // }

                                                     //$course_id = $value['course']['course_id'];
                                                     $subject_id = getsubject('subject_id',$value);
                                                     //$subjectandcourseid = $course_id."#".$subject_id;
                                                                //print($teacher);

                                                 }

                                        @endphp

                                        <option value="@php //echo $subject_id @endphp">
                                            @php
                                                getsubject('name',$value);
                                            @endphp
                                        </option>

                                        @php
                                            }
                                        }else
                                        {
                                        $message =  $decoded['message'];
                                        @endphp

                                        <td>
                                            @php
                                                print($message);
                                            @endphp
                                        </td>

                                        @php

                                            }}
                                            else{
                                                return redirect('/');
                                            }
                                        @endphp

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Teacher Name</label>
                                    <select name="teacher_id" type="text" class="form-control" data-live-search="true"
                                            tabindex="-1" aria-hidden="true">
                                        <option>--Select--</option>
                                        @php
                                            $auth_key = session()->get('authentication');

                                            $institute_id = session()->get('institute_id');
                                            $api_url = "http://153.92.4.251:3000/api/v1/teacher/{$institute_id}/all";
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key );
                                            $query = array('foo' => 'hello', 'bar' => 'world');

                                            $response = Unirest\Request::get($api_url, $headers);


                                            $decoded = json_decode($response->raw_body,true);

                                               function getTeacher($key,$name,$array){
                                                    $value= $key;
                                                    if(array_key_exists($key,$array)){
                                                      print $name;
                                                    }else{
                                                      print "N/A";
                                                    }
                                                  }

                                             $messageLength = strlen($decoded['message']);
                                                if(http_response_code() == 200){
                                                if($messageLength != 39 && $decoded != null){
                                             foreach ($decoded["data"] as $key => $value) {
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
                                        <option value="<?php echo $value["teacher_id"]; ?> ">
                                            @php
                                                //print ($value['name']['first_name']." ".$value['name']['last_name'].'<br>');

                                                $teaceherName =  $value['name']['first_name']." ".$value['name']['middle_name']." ".$value['name']['last_name'] ;

                                                $value= $value;
                                                getTeacher('name',$teaceherName, $value);
                                            @endphp
                                        </option>
                                        @php
                                            }}
                                          else{
                                        @endphp
                                        <option>
                                            @php
                                                print($decoded['message']);
                                            @endphp
                                        </option>
                                        @php
                                            }}else{
                                                return redirect('/');
                                            }
                                        @endphp
                                    </select>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <label>Day</label>
                                    <select name="day" type="text" class="form-control" data-live-search="true"
                                            tabindex="-1" aria-hidden="true">
                                        <option>--Select--</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div>


                            </div>


                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Start Time</label>
                                    <input name="start_time" type="datetime-local" class="form-control"
                                           placeholder="hh:mm">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>End Time</label>
                                    <input name="end_time" type="datetime-local" class="form-control"
                                           placeholder="hh:mm">
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
  
@include('frontend.includeFiles.all-js')
<!-- page specific script -->
<script type="text/javascript">
    $(document).ready(function(){
        console.log('document ready')
    })
    $( "#bbbbbb" ).click(function() {
        console.log('document ready');
        $( ".hidden-after-submit" ).css('display','none');
        $( ".show-after-submit" ).css('display','block');
    });
</script>

<script>
    "use strict"

    $(document).ready(function(){
        console.log('Document Ready');
    });
    $('.drop_class').on('change','#class_id_for_period',function(e){

        //Loader Start
        $('#loader_mobi').show();

        let uri = '/class/'+$(this).val().trim()+'/period/all';
        console.log(uri.replace(/' '/g,''));
        $.ajax({
            type:'GET',
            url:uri.replace(/' '/g,''),
            //headers: {'Authorization': 'sha1$8132bafa$1$2ef4738c64833491bae427847cedd879893e1707' },
            //dataType: "jsonp",
            success:function(data,status){

                //Loader Close
                $('#loader_mobi').attr('style','display : none');

                let response = JSON.parse(data);
                console.log(response);
                $('.section_id_for_period').html(new Option("--Select--",""));
                response.data.forEach((d)=>{
                    let section_id = d.section_id.replace(/' '/g,'');
                    $('.section_id_for_period').append(new Option(d.name, section_id));
                });
            },
            error:function(e) {
                console.log(e.status);
            }
        });


    });




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
