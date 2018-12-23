<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon-apple.png">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png">
    <!-- Loader CSS-->
    @include('frontend.includeFiles.all-css')
    
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
        @include('frontend.inc.education-institute')
        <!-- sidebar left ends -->

        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <h2 class="content-color-primary page-title">Add Student</h2>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            @if (session('statuss'))
                                <div class="alert alert-danger text text-center">
                                    {{ session('statuss') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-4 btn pull-right">
                            <h2 class="content-color-primary page-title"></h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
              <form action="{{ action('FormDataPushToApi@addstudent') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                    <div class="mw-100 mt-4">
                                      <h2>New Student Registration</h2>
                                  </div>
                                  <!-- Loader Tag -->
                            </div>
                        </div>
                        <hr>

                        <br>
                            <br>

                            <h5 class="m-0">Academy Informtion</h5>
                            <hr>
                            <br>
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-6 drop_class">
                                <label>* Class Name</label>
                                <select name="class_id" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id='class_name'>
                                  <option>--Select--</option>
                                  <!--Class id API-->
                                  @php
                                  $auth_key = session()->get('authentication');
                                  $institute_id = session()->get('institute_id');
                                  $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                  $query = array('foo' => 'hello', 'bar' => 'world');
                                  $api_url = config("app.server_url")."class/{$institute_id}/all";

                                  $response = Unirest\Request::get($api_url, $headers);


                                  $decoded = json_decode($response->raw_body,true);

                                  foreach ($decoded["data"] as $key => $value) {
                                  @endphp
                                  <option value="<?php echo $value["class_id"]; ?> ">
                                    @php
                                    $selected_class_id = $value["class_id"];
                                    print ($value['class_name'].'<br>');


                                    @endphp


                                </option>

                                @php
                            }
                            @endphp
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label>* Section Name</label>
                        <select name="section_id" type="text" class="form-control section_name" data-live-search="true" tabindex="-1" aria-hidden="true">
                          <option>--Select--</option>
                      </select>
                  </div>

              </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Roll Number</label>
                                    <input name="roll_no" type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Year</label>
                                    <input name="year" type="text" class="form-control" placeholder="">
                                </div>
                            </div>

              <div class="form-group row">
                <div class="col-lg-4 col-md-4">
                    <div class="required">
                        <label>* First Name</label>
                        <input name="first_name" type="text" class="form-control" placeholder="" required >
                    </div>

                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Middle Name</label>
                    <input name="middle_name" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="" required>
                </div>
            </div>
                            <hr>
                            <h5 class="m-0">Student Details</h5>
                            <hr>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6">
                    <label>Gender</label>
                    <select name="gender" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                      <option>--Select--</option>
                      <option value="MALE">Male</option>
                      <option value="FEMALE">Female</option>
                      <option value="OTHERS">Others</option>
                  </select>
              </div>
              <div class="col-lg-6 col-md-6">
                <label>Date Of Birth</label>
                <input name="date_of_birth" type="date" class="form-control" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-6 col-md-6">
                <label>Nationality</label>
                <input name="nationality" type="text" class="form-control" placeholder="">
            </div>
            <div class="col-lg-6 col-md-6">
                <label>Religion</label>
                <input name="religion" type="text" class="form-control" placeholder="">
            </div>

        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4">
                <label>Blood Group</label>
                <input name="blood_group" type="text" class="form-control" placeholder="">
            </div>
            <div class="col-lg-4 col-md-4">
                <label>Email address</label>
                <input name="email" type="email" class="form-control" placeholder="">
            </div>
            <div class="col-lg-4 col-md-4">
                <label>Status</label>
                <select name="status" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                  <option>--Select--</option>
                  <option value="AVAILABLE">Available</option>
                  <option value="NOT AVAILABLE">Not Available</option>
              </select>
          </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-6 col-md-6">
            <label>Phone Number</label>
            <input name="phone_no" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="required">
                <label>* Mobile Number</label>
                <input name="mobile_no" type="text" class="form-control" placeholder="">
             </div>

        </div>
    </div>
    <br>
    <br>
    <h5 class="m-0">Parents Information</h5>
                            <hr>
                            <br>
    <div class="form-group row">
        <div class="col-lg-4 col-md-4">
            <label>Father's Name</label>
            <input name="father_name" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-4 col-md-6">
            <label>Father's Profession</label>
            <input name="father_profession" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-4 col-md-4">
            <label>Father's Mobile No.</label>
            <input name="father_mobile_no" type="text" class="form-control" placeholder="">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-4 col-md-4">
            <label>Mother's Name</label>
            <input name="mother_name" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-4 col-md-6">
            <label>Mother's Profession</label>
            <input name="mother_profession" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-4 col-md-4">
            <label>Mother's Mobile No.</label>
            <input name="mother_mobile_no" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <br>
    <br>
    <h5 class="m-0">Address details</h5>
    <hr>
    <div class="form-group row">
        <div class="col-lg-12 col-md-12">
            <label>Address</label>
            <input name="addressline" type="text" class="form-control" placeholder="">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6 col-md-6">
            <label>Post Code</label>
            <input name="post_code" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-6 col-md-6">
            <label>Post Office</label>
            <input name="postOffice" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6 col-md-6">
            <label>Upazilla</label>
            <input name="upazilla" type="text" class="form-control" placeholder="">
        </div>
        <div class="col-lg-6 col-md-6">
            <label>District</label>
            <input name="district" type="text" class="form-control" placeholder="">
        </div>
    </div>
    <br>
    <br>

</div>
</div>
</div>
<div class="card-footer">
    <button class="btn btn-secondary">Cancel</button>
    <button class="btn btn-success float-right">Submit</button>
</div>
</form>
</div>
</div>
<!-- content page ends -->

</div>

@include('frontend.inc.footer')

<!-- page specific script -->
<script>
    "use strict"

    $(document).ready(function(){
      console.log('Document Ready');
  });
    $('.drop_class').on('change','#class_name',function(e){
            //Loader Start
            $('#loader_mobi').show();

            let uri = '/class/'+$(this).val().trim()+'/section/all';
          //console.log(uri.replace(/' '/g,''));
          $.ajax({
           type:'GET',
           url:uri.replace(/' '/g,''),
              //headers: {'Authorization': 'sha1$8132bafa$1$2ef4738c64833491bae427847cedd879893e1707' },
             //dataType: "jsonp",
             success:function(data,status){

                 //Loader Close
                 $('#loader_mobi').attr('style','display : none');

                 let response = JSON.parse(data);
                //console.log(response);
                $('.section_name').html(new Option("--Select--",""));
                response.data.forEach((d)=>{
                  let section_id = d.section_id.replace(/' '/g,'');
                  $('.section_name').append(new Option(d.name, section_id));
              });
            },
            error:function(e) {
               //console.log(e.status);
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


<script>

 function getClassSections(){


 }

</script>
@include('frontend.includeFiles.all-js')
</body>

</html>

<!-- Localized -->
