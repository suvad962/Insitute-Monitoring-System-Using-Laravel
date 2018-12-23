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
                        <h2 class="content-color-primary page-title">View Exams</h2>
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
    <div class="container mt-4 main-container">
        <div class="card mb-4">
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-md-10 mx-auto">
                        <div align="center">
                            <div class="col-lg-10 col-md-10 mb-4">
                                <div class="mw-50 mt-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 drop_class">
                                            <select name="class_id" type="text" class="form-control class_id">
                                                <option>--Select Class--</option>
                                                <?php
                                                    $auth_key = session()->get('authentication');
                                                    $institute_id = session()->get('institute_id');
                                                    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                                    $api_url = config('app.server_url')."class/{$institute_id}/all";

                                                    $response = Unirest\Request::get($api_url, $headers);
                                                    $decoded = json_decode($response->raw_body,true);

                                                    if($response->code === 200){
                                                        if($decoded['success'] === true){
                                                            if(count($decoded['data']) > 0){
                                                                foreach($decoded['data'] as $key=> $value){
                                                                    ?>
                                                                        <option value="<?php echo $value['class_id']?>">
                                                                            <?php
                                                                                if(array_key_exists('class_name', $value)){
                                                                                     print($value['class_name']);
                                                                                }else{
                                                                                    print('N/A');
                                                                                }
                                                                            ?>
                                                                        </option>
                                                                    <?php
                                                                }
                                                            }else{
                                                                print("No Data Found");
                                                            }
                                                        }else{
                                                            print('There Are Some Problems');
                                                        }
                                                    }else{
                                                        return redirect('/');
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 drop_class">
                                            <select name="exam_type_name" type="text" class="form-control exam_type_name">
                                                <option>--Select Exam Type--</option>
                                                <?php
                                                    $auth_key = session()->get('authentication');
                                                    $institute_id = session()->get('institute_id');
                                                    $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                                    $api_url = config('app.server_url')."exam/{$institute_id}/examtype/list";
                                                    var_dump($api_url);
                                                    $response = Unirest\Request::get($api_url, $headers);
                                                    $decoded = json_decode($response->raw_body,true);

                                                    if($response->code == 200)
                                                    {
                                                        if(count($decoded['data']) > 0)
                                                        {
                                                            foreach ($decoded["data"] as $key => $value) {
                                                            ?>
                                                            <option value="<?php echo $value["name"];?>">
                                                                <?php
                                                                    echo $value['name'];
                                                                ?>
                                                            </option>
                                                            <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                            <option>
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
                                        <div class="col-lg-4 col-md-4">
                                            <button class="btn btn-primary form-control showExamsBtn">Show</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <th>Exam Name</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Total Marks</th>
                                    <th>Passed Marks</th>
                                </thead>
                                <tbody class="showExamsTbl">
                                    
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

<!-- modal for create form -->
<div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg hidden-after-submit" role="document">
        <div class="modal-content">
            <div class="modal-header" id="createOrderTitle">
                <div class="col text-center">
                    <h4>Create Exam</h4>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Loader Tag -->
            <div align="center" class="align-center" style="padding-top:5px">
                <div id="loader_mobi" class="loader1" style="display:none"></div>
            </div>
            <!-- Loader End -->
            <form action="{{ action('FormDataPushToApi@addexam') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6 drop_class">
                                    <label>Class Name</label>
                                    <?php $pass_key = session()->get('authentication');?>
                                    <input type="hidden" value="<?php echo $pass_key?>" id="authkey">
                                    <select name="class_id" type="number" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true" id="class_name">
                                        <option selected>--Select--</option>

                                        <?php
                                            $auth_key = session()->get('authentication');
                                            $institute_id = session()->get('institute_id');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $api_url = config('app.server_url')."class/{$institute_id}/all";

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
                                    <label>Subject Name</label>
                                    <select name="course_id" class="form-control course_name"></select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Exam Type</label>
                                    <select name="exam_type_id" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                                        <option selected disabled>--Select--</option>
                                        <?php
                                            $auth_key = session()->get('authentication');
                                            $institute_id = session()->get('institute_id');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $api_url = config('app.server_url')."exam/{$institute_id}/examtype/list";
                                            
                                            $response = Unirest\Request::get($api_url, $headers);
                                            $decoded = json_decode($response->raw_body,true);

                                            if($response->code == 200)
                                            {
                                                if(count($decoded['data']) > 0)
                                                {
                                                    foreach ($decoded["data"] as $key => $value) {
                                                    ?>
                                                    <option value="<?php echo $value["exam_type_id"]; ?> ">
                                                        <?php
                                                            echo $value['name'];
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
                                    <label>Exam Name</label>
                                    <input name="exam_code" required="true" type="text" class="form-control exam_code" placeholder="Enter Exam Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>Total Marks</label>
                                    <input name="total_marks" type="number" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>Passed Marks</label>
                                    <input name="passed_marks" type="number" class="form-control" placeholder="">
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
    $('.drop_class').on('change','#class_name',function(e){
        $('#loader_mobi').show();
        var class_id = $("select#class_name option").filter(":selected").val();
        var uri = "<?php echo config('app.server_url');?>" + "class/"+ class_id +"/subject/all";
        var authkey = $('#authkey').val();
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
            success: function(response, textStatus, XmlHttpRequest) {
                // $('#loader_mobi').attr('style','display : none');
                if(response.data.length > 0){
                    $('.course_name').html(new Option("--Select--",""));
                    $.each(response.data, function (i, item) {
                        var course_id_array = [];
                        item.subjects.forEach((ii)=>{
                            if(ii.course_id === undefined){
                                return true;
                            }
                            course_id_array.push(ii.course_id);
                        });
                        if(course_id_array.length > 0){
                            $('.course_name').append(new Option(item._id.name, course_id_array)); 
                        }
                    });
                }
                else{
                    $('.course_name').html(new Option("--Select--",""));
                } 
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
    $(".showExamsBtn").click(function() {
        $(".showExamsTbl > tr").remove();
        $('#loader_mobi').show();
        let class_id = $("select.class_id option").filter(":selected").val();
        let exam_type_name = $("select.exam_type_name option").filter(":selected").val();
        let uri = "<?php echo config('app.server_url');?>" + "exam/class/"+ class_id + "/" + exam_type_name + "/all";
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', "<?php echo session()->get('authentication'); ?>");},
            success: function(response, textStatus, XmlHttpRequest) {
                if(response.data.length > 0){
                    $.each(response.data, function (i, item) {
                        item.exams.forEach((ii)=>{
                            $('.showExamsTbl').append('<tr><td>'+ii.exam_code+'</td><td>'+ii.section+'</td><td>'+ii.subject+'</td><td>'+ii.total_marks+'</td><td>'+ii.passed_marks+'</td></tr>');
                        });
                    });
                    $('#loader_mobi').attr('style','display : none');
                }
                else{
                    $('.showExamsTbl').append('<tr><td colspan="5">0 Exam Found</td></tr>');
                    $('#loader_mobi').attr('style','display : none');
                } 
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });


    $('.exam_code').on('keypress', function(e) {
        if (e.which == 32){
            alert("No space allowed in exam name!");
            return false;
        }
    });

</script>

</body>
</html>
