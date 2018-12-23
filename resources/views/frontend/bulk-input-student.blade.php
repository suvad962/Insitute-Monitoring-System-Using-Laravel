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
        @include('frontend.inc.education-institute')

        
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




@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('status2'))
    <div class="alert alert-danger">
        {{ session('status2') }}
    </div>
@endif 

@if (session('status3'))
    <div class="alert alert-danger">
        {{ session('status3') }}
    </div>
@endif

<!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
            	<form class="form-horizontal" action="{{URL::to('/bulkOutputStudent')}}" enctype="multipart/form-data" method="post">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                                    <div class="mw-100 mt-4">

                                    </div>
                                    <br>

                                </div>
                            </div>
                            @php
                                 $auth_key = session()->get('authentication');
                                $institute_id = session()->get('institute_id');
                                $url = config("app.server_url")."class/{$institute_id}/all ";
                              

                                $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                $query = array('foo' => 'hello', 'bar' => 'world');
                                 $response = Unirest\Request::get($url, $headers);

                                    
                            @endphp

                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 drop_class">
                                    <div class="row">
                                        <label>Class Name</label>
                                        <select name="class_id" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id='class_name'>
                                            <option>--Select Class--</option>
                                            <!--Class id API-->
                                            @php
                                           
                                            $decoded = json_decode($response->raw_body,true);
                                            if(is_null($institute_id)){
                                                @endphp
                                            <option>
                                                @php
                                                print("No Institution is selected");
                                            @endphp
                                            </option>

                                            @php
                                            }
                                            else{

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
                                                }}
                                            @endphp
                                        </select>



                                    </div>
                                </div>
                                <div align="center" class="col-lg-4 col-md-4" style="padding-top:25px">
                                    <div id="loader_mobi" class="loader1" style="display:none"></div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="row">
                                        <label>Section Name</label>
                                        <select name="section_name" type="text" class="form-control section_name" data-live-search="true" tabindex="-1" aria-hidden="true">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" style="padding-top:20px">
                                    <div class="row">
                                        <label>Attachments</label>
                                        <div  class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                            <input id="csv_file" type="file" class="form-control" name="csv_file" required disabled>

                                            @if ($errors->has('csv_file'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('csv_file') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4"></div>
                                <div class="col-lg-4 col-md-4" style="padding-top:20px; padding-right:0px; margin-top:20px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                    <div>
                                        <button id="btn_submit" class="btn btn-success float-right" disabled>Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
  
			</form>


                            </div>
        </div>



        <!-- content page ends -->

        <div class="modal fade" id="student_data_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 80% !important;" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informations of Students</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Roll</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Mobile Number</th>
                        </tr>
                      </thead>
                      <tbody class="uploaded_student">
                      </tbody>
                    </table>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
              </div>
            </div>
          </div>
        </div>





        <div class="modal fade" id="invalid_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 50% !important;" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" align="center">Warning !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>
                    <h1 align="center" font="roboto">Your file is invalid. Please, upload the valid file.</h1>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
              </div>
            </div>
          </div>
        </div>

   


    </div>


    @include('frontend.inc.footer')

    @include('frontend.includeFiles.all-js')

    <!-- page specific script -->
    <script>
        "use strict"
        $(document).ready(function() {

             console.log("document ready Y");
             var obj;

            $('#csv_file').change(function(e){
                //console.log("document ready csv_file");
                //csvToObject(e.target.files[0]);
                //console.log(obj);
                let formData = new FormData();

                formData.append('file',e.target.files[0]);
                formData.append('_token', '{{csrf_token()}}');
                //$('#student_data_list').modal('show');
                //formData.append('name','Faisal');
                //console.log(e.target.files[0]);

              $.ajax({
                 type:'POST',
                 url:"{{ route('ajaxupload.action') }}",
                 data: formData,
                 cache: false,
                 global: false,
                 contentType: false,
                 processData: false,
                 //headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                 success:function(data){
                    let res = JSON.parse(data);
                
                    console.log(res.size);

                    // check if CSV is valid : if invalid then array size == 0 
                    if(res.size==0){
                        $('#invalid_modal').modal('show');
                    }
                    // $('#student_data_list').modal('show');
                    $("body .uploaded_student").html();
                    for(let i = 1;i<=res.size;i++){

                    Object.size = function(obj) {
                    var size = 0, key;
                    for (key in obj) {
                        if (obj.hasOwnProperty(key)) size++;  
                    }
                    return size;
                    };

                    var size = Object.size(res.student[1]);
                    console.log(size);
                    //console.log(" Student array size"+ res.student[1].first_name);
                       

                       if(size==24){
                           // console.log("if"+size);
                        $('#student_data_list').modal('show');
                        $("body .uploaded_student").append("<tr><th scope='row'>"+i+"</th><td>"+res.student[i].first_name+"</td><td>"+res.student[i].roll_no+"</td><td>"+res.student[i].gender+"</td><td>"+res.student[i].mobile_no+"</td></tr>");
                        $('#btn_submit').removeAttr('disabled');
                        }
                        else{
                           // console.log("Else"+size);

                             $('#invalid_modal').modal('show');
                            
                             //$("body .uploaded_student").append("<p>dffgggh </p>");
                            // break;
                        }

                    }

                 }
              });
              //console.log(uri.replace(/' '/g,''));
              /*$.ajax({
                 type:'GET',
                 url:uri.replace(/' '/g,''),
                  //headers: {'Authorization': 'sha1$8132bafa$1$2ef4738c64833491bae427847cedd879893e1707' },
                 //dataType: "jsonp",
                 success:function(data,status){
                    let response = JSON.parse(data);
                    console.log(response);
                      $('.section_name').html(new Option("--Select--",""));
                    response.data.forEach((d)=>{
                      let section_id = d.section_id. replace(/' '/g,'');
                      //let subject_id = d.section_id.replace(/' '/g,'');
                      $('.section_name').append(new Option(d.name, section_id));
                    });
                 },
                 error:function(e) {
                   console.log(e.status);
                 }
              });*/


            });

            function csvToObject(readFile) {

              var reader = new FileReader();

              // Read file into memory as UTF-16
              reader.readAsText(readFile, "UTF-8");
              //reader.readAsDataURL(readFile);
                //reader.readAsArrayBuffer(readFile);
              // Handle progress, success, and errors
              //reader.onprogress = updateProgress;
              reader.onload = loaded;
              //reader.onerror = errorHandler;
            }

            function loaded(evt) {

              var fileString = evt.target.result;
              console.log($.csv.toObjects(fileString));
              //obj = $.csv.toObjects(fileString);

            }


            $('#dataTables-example').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });

    </script>

    <script>
    $(document).ready(function(){
          console.log(' Ready');
        });
        $('.drop_class').on('change','#class_name',function(e){
            console.log('hello faisal');
            // loder start
            
            $('#loader_mobi').show();
          let uri = '<?php echo config("app.server_url");?>class/'+$(this).val().trim()+'/institute/<?php echo session()->get("institute_id"); ?>/section/all';
          console.log(uri.replace(/' '/g,''));
          $.ajax({
             type:'GET',
             url:uri.replace(/' '/g,''),
              headers: {'Authorization': "<?php echo session()->get('authentication')?>"},
             //dataType: "jsonp",
             success:function(data,status){

              $('#loader_mobi').attr('style','display : none');
                // loder close
                let response = data;
                console.log(response);
                  $('.section_name').html(new Option("--Select Section--",""));
                response.data.forEach((d)=>{
                  let section_id = d.section_id.replace(/' '/g,'');
                  //let subject_id = d.section_id.replace(/' '/g,'');
                  $('.section_name').append(new Option(d.name, section_id));
                  $('.section_name').change(function () {
                    $('#csv_file').removeAttr('disabled');
                    });
                });
             },
             error:function(e) {
              console.log(e.status);
             }
          });


        });




        


    </script>
</body>

</html>

<!-- Localized -->
