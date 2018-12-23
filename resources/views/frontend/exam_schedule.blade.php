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
                    <div class="col-lg-4 col-md-4"></div>
                    <div align="center" class="col-lg-4 col-md-4">
                        <h2 class="content-color-primary page-title">View Exam Schedules</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 btn pull-right">
                        <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Create</span></button>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
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
    <!-- content page -->
    <div class="container mt-4 main-container">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-10 mx-auto">
                        <div align="center">
                            <div class="col-lg-10 col-md-10 mb-4">
                                <div class="mw-50 mt-4">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 drop_class">
                                            <?php $pass_key = session()->get('authentication');?>
                                            <?php $ins_id = session()->get('institute_id');?>
                                            <input type="hidden" value="<?php echo $pass_key?>" id="authkey">
                                            <input type="hidden" value="<?php echo $ins_id?>" id="ins_id">
                                            <select name="class_id" type="number" class="form-control class_id">
                                                <option selected>--Select--</option>
                                                <?php
                                                    $auth_key = session()->get('authentication');
                                                    $institute_id = session()->get('institute_id');
                                                    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                                    $api_url =  config('app.server_url')."class/{$institute_id}/all";

                                                    $response = Unirest\Request::get($api_url, $headers);
                                                    $decoded = json_decode($response->raw_body,true);

                                                    if($response->code == 200)
                                                    {
                                                        if(count($decoded['data']) > 0)
                                                        {
                                                            foreach ($decoded["data"] as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value["class_id"]; ?>">
                                                                <?php
                                                                    echo $value['class_name'];
                                                                ?>
                                                            </option>
                                                            <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                            <option >
                                                                <?php
                                                                    Print($decoded['message']);
                                                                ?>
                                                            </option>
                                                        <?php
                                                        }
                                                    }
                                                    else{
                                                        return redirect('/');
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <button class="btn btn-primary form-control showScheduleBtn">Show</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <th>Exam Name</th>
                                    <th>Exam Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Result Published</th>
                                    <th>Status</th>
                                </thead>
                                <tbody class="showScheduleTbl">
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.inc.footer')

<!-- modal for create form -->
<div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg hidden-after-submit" role="document">
        <div class="modal-content">
            <div class="modal-header" id="createOrderTitle">
                <div class="col text-center">
                    <h4>Create Exam Schedule</h4>
                    <br>

                </div>
                <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ action('FormDataPushToApi@examschedule') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Class Name</label>
                                    <select name="class_id" type="number" class="form-control" id="classID">
                                        <option selected>--Select--</option>
                                        <?php
                                            $auth_key = session()->get('authentication');
                                            $institute_id = session()->get('institute_id');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $api_url =  config('app.server_url')."class/{$institute_id}/all";

                                            $response = Unirest\Request::get($api_url, $headers);
                                            $decoded = json_decode($response->raw_body,true);

                                            if($response->code == 200)
                                            {
                                                if(count($decoded['data']) > 0)
                                                {
                                                    foreach ($decoded["data"] as $key => $value) {
                                                    ?>
                                                    <option value="<?php echo $value["class_id"]; ?>">
                                                        <?php
                                                            echo $value['class_name'];
                                                        ?>
                                                    </option>
                                                    <?php
                                                    }
                                                }
                                                else
                                                {
                                                ?>
                                                    <option >
                                                        <?php
                                                            Print($decoded['message']);
                                                        ?>
                                                    </option>
                                                <?php
                                                }
                                            }
                                            else{
                                                return redirect('/');
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6" >
                                    <label>Exam Type</label>
                                    <select name="exam_type_id" type="text" class="form-control" id="examTypeID">
                                        <option value="">--Select--</option>
                                        <?php
                                        $auth_key = session()->get('authentication');
                                        $institute_id = session()->get('institute_id');
                                        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                        
                                        $api_url =  config('app.server_url')."exam/{$institute_id}/examtype/list";
                                        $response = Unirest\Request::get($api_url, $headers);
                                        $decoded = json_decode($response->raw_body,true);

                                        foreach ($decoded["data"] as $key => $value) {
                                        ?>
                                        <option value = "<?php echo $value['name']; ?>">
                                        <?php
                                            print $value['name'];
                                        ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 drop_class" >
                                    <label>Select Exam</label>
                                    <select name="exam_id" type="text" class="form-control" id="ExamID">
                                        <option value="">--Select--</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Assign Teacher</label>
                                    <select name="teacher_id" type="text" class="form-control">
                                        <option>--Select--</option>
                                        <?php
                                            $institute_id = session()->get('institute_id');
                                            $auth_key = session()->get('authentication');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $api_url =  config('app.server_url')."teacher/{$institute_id}/all";

                                            $response = Unirest\Request::get($api_url, $headers);
                                            $decoded = json_decode($response->raw_body,true);

                                            if($response->code == 200)
                                            {
                                                if(count($decoded['data']) > 0){
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
                                                        ?>
                                                        <option value="<?php echo $value["teacher_id"]; ?> ">
                                                            <?php
                                                                print ($value['name']['first_name']." ".$value['name']['middle_name']." ".$value['name']['last_name']);
                                                            ?>
                                                        </option>
                                                    <?php
                                                    }
                                                }
                                                else{
                                                ?>
                                                <option>
                                                    <?php
                                                        print($decoded['message']);
                                                    ?>
                                                </option>
                                                <?php
                                                }
                                            }
                                            else
                                            {
                                                return redirect('/');
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>Exam Date</label>
                                    <input name="exam_date" type="date" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>Start Time</label>
                                    <input name="start_time" type="text" class="form-control" placeholder="Enter start time">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>End Time</label>
                                    <input name="end_time" type="text" class="form-control" placeholder="Enter end time">
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
        console.log('Document Ready');
    });
    $("#classID").change(function(){
        $("#examTypeID").val($("#examTypeID option:first").val());
        $("#ExamID").html(new Option("--Select--",""));
    });
    $("#examTypeID").change(function(){
        $("#ExamID").html(new Option("--Select--",""));
        let class_id = $("select#classID option").filter(":selected").val();
        let exam_type_id = $("select#examTypeID option").filter(":selected").val();
        if (class_id == undefined || exam_type_id == undefined){
            alert("Select Class and Exam Type First");
        }else {
            var uri = "<?php echo config('app.server_url');?>" +"exam/class/"+class_id+"/"+exam_type_id+"/all";
            var authkey = $('#authkey').val();
            $.ajax({
                type: 'GET',
                url: uri,
                beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
                success: function(response, textStatus, XmlHttpRequest) {
                    if(response.data.length > 0){
                        $('#ExamID').html(new Option("--Select--",""));
                        $.each(response.data, function (i, item) {
                            //var exam_id_array = [];
                            item.exams.forEach((ii)=>{
                                //exam_id_array.push(ii.exam_id);
                                $('#ExamID').append(new Option(ii.subject+" ("+ii.section+")", ii.exam_id));
                            });
                            // if(exam_id_array.length > 0){
                            //     $('#ExamID').append(new Option(item._id.subject+" ("+item.exams.length+")", exam_id_array)); 
                            // }
                        });
                    }
                    else{
                        $('#ExamID').html(new Option("--Select--",""));
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }
    });

    $(".showScheduleBtn").click(function() {
        $(".showScheduleTbl > tr").remove();
        $('#loader_mobi').show();
        var class_id = $("select.class_id option").filter(":selected").val();
        var authkey = $('#authkey').val();
        var ins_id = $('#ins_id').val();
        var uri = "<?php echo config('app.server_url');?>" +"exam/institute/"+ins_id+"/class/"+class_id+"/schedule";
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
            success: function(response, textStatus, XmlHttpRequest) {
                $('#loader_mobi').attr('style','display : none');
                if(response.data.length > 0){
                    $.each(response.data, function (i, item) {
                        $('.showScheduleTbl').append('<tr><td>'+item.exam.exam_code+' ('+item.section.name+')'+'</td><td>'+item.exam_date.slice(0,10)+'</td><td>'+item.start_time+'</td><td>'+item.end_time+'</td><td>'+item.result_published+'</td><td>'+item.status+'</td></tr>');
                    });
                }
                else{
                    $('.showScheduleTbl').append('<tr><td colspan="6">0 Exam Schedule Found</td></tr>');
                } 
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
</script>

</body>
</html>
