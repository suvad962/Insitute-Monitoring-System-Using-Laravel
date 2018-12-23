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
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
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


        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                        </div>
                        <div align="center" class="col-lg-4 col-md-4">
                            <h2 class="content-color-primary page-title">Assign Section and Teacher</h2>
                        </div>
                        <div class="col-lg-4 col-md-4 btn pull-right">
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#assignSubjectModal"><i class="material-icons">add</i> <span class="text-hide-xs">Assign</span></button>
                        </div>
                    </div>
                    <div align="center" class="mt-4">
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
                            <form action="{{ action('Loginsession@selectclassforsubject') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div align="center" class="mb-4">
                                <div class="col-lg-4 col-md-4">
                                    <div class="mw-50 mt-4">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-10 drop_class">
                                                <select name="class_id" type="text" class="form-control" id="class_id">
                                                    <option value="">--Select Class--</option>
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
                                            <div class="col-lg-2 col-md-2">
                                                <button type="submit" class="btn btn-primary">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="card-body">
                                <table class="table table-bordered" id="dataTables-example">
                                    <thead>
                                        <tr style="background-color: #e6e6fa">
                                            <th>Subject Name</th>
                                            <th>Section</th>
                                            <th>Teacher Name</th>
                                        </tr>
                                    </thead>
                                    <tbody class="showCoursesTbl">
                                    <?php
                                        $institute_id = session()->get('institute_id');
                                        $class_id_for_subject = session()->get('session_class_id');
                                        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                        if($class_id_for_subject == ""){
                                            $class_id_for_subject = "0";
                                        }
                                        $url = config('app.server_url')."class/".$class_id_for_subject."/institute/".$institute_id."/subject/all";
                                        $response = Unirest\Request::get($url, $headers);
                                        $decoded = json_decode($response->raw_body,true);
                                        $response_code = $response->code;
                                        if($response->code == 200)
                                        {
                                            if(count($decoded['data']) > 0)
                                            {
                                                foreach ($decoded['data'] as $key => $value)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td rowspan="<?php echo count($value['subjects']); ?>">
                                                            <?php
                                                                echo $value['_id']['name'];
                                                            ?>
                                                        </td>
                                                    <?php
                                                    if (array_key_exists('subjects', $value)) {
                                                        foreach ($value['subjects'] as $key => $subject)
                                                        {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                    if (array_key_exists('section_name', $subject))
                                                                    {
                                                                        echo $subject['section_name'];
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<span style='color:#999'>No section assigned</span>";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                    if (array_key_exists('teacher', $subject))
                                                                    {
                                                                        if(empty($subject['teacher']['name']['first_name']))
                                                                        {
                                                                            $subject['teacher']['name']['first_name'] = "";
                                                                        }
                                                                        if(empty($subject['teacher']['name']['middle_name']))
                                                                        {
                                                                            $subject['teacher']['name']['middle_name'] = "";
                                                                        }
                                                                        if(empty($subject['teacher']['name']['last_name']))
                                                                        {
                                                                            $subject['teacher']['name']['last_name'] = "";
                                                                        }
                                                                        $teachers_full_name = $subject['teacher']['name']['first_name']." ".$subject['teacher']['name']['middle_name']." ".$subject['teacher']['name']['last_name'];
                                                                        echo $teachers_full_name;
                                                                    }
                                                                    else
                                                                    {
                                                                        echo "<span style='color:#999'>No teacher assigned</span>";
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                            else
                                            {
                                            ?>
                                                <td colspan="3">
                                                    <?php
                                                        echo "No subject was found.";
                                                    ?>
                                                </td>
                                            <?php
                                            }
                                        }
                                        else
                                        {
                                            return redirect('/');
                                        }
                                        ?>
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
    <div class="modal fade" id="assignSubjectModal" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg  hidden-after-submit" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                        <h4>Assign Section and Teacher</h4>
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
                <form action="{{ action('FormDataPushToApi@addcourse') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                          <div class="form-group row">
                              <div class="col-lg-12 col-md-12 drop_class">
                                  <label>Board Name</label>
                                  <select name="board_id" type="text" class="form-control" id="board_id">
                                      <option value="1">General Education Board</option>
                                      <option value="2">Madrasha Board</option>
                                      <option value="3">Technical Board</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <?php $pass_key = session()->get('authentication');?>
                              <input type="hidden" value="<?php echo $pass_key?>" id="authkey">
                              <div class="col-lg-6 col-md-6 drop_class">
                                  <label>Class Name</label>
                                  <select name="class_id" type="text" class="form-control" id="class_name">
                                      <option>--Select Class--</option>
                                      <!--Class id API-->
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
                                      <option value="<?php echo $value['class_id'].'#'.$value['class_name']?>">
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
                              <div class="col-lg-6 col-md-6 drop_class ">
                                  <label>Section Name</label>
                                  <select name="section_id" type="text" class="form-control section_name">
                                  <option>--Select--</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group row drop_class">
                            <div class="col-lg-6 col-md-6">
                                <label>Subject Name</label>
                                <select name="subject_id" type="text" class="form-control subject_name">
                                    <option>--Select--</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label>Teacher Name</label>
                                <select name="teacher_id" type="text" class="form-control">
                                  <option value="">--Select--</option>
                                  <?php
                                  $institute_id = session()->get('institute_id');
                                  $auth_key = session()->get('authentication');
                                  $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

                                  $api_url = config('app.server_url')."teacher/{$institute_id}/all";
                                  $response = Unirest\Request::get($api_url, $headers);

                                  $decoded = json_decode($response->raw_body,true);
                                     $messagelength = strlen($decoded['message']);
                                     if(http_response_code() == 200){
                                         if($messagelength != 39 && $decoded != null){

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
                                        }}
                                      else{
                                    ?>
                                    <option>
                                        <?php
                                            print($decoded['message']);
                                        ?>
                                    </option>
                                    <?php
                                        }}else{
                                            return redirect('/');
                                        }
                                    ?>

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
    });

    $('.drop_class').on('change','#class_name',function(e){
        //Loader Start
        $('#loader_mobi').show();
        let class_all = $("select#class_name option").filter(":selected").val();
        let class_arr = class_all.split("#");
        let class_id = class_arr['0'];
        let uri =  "<?php echo config('app.server_url');?>" + "class/"+ class_id.trim() +"/institute/<?php echo session()->get('institute_id');?>/section/all";
        console.log(uri);
        let authkey = $('#authkey').val();
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
            success: function(response, textStatus, XmlHttpRequest) {
                if(response.data.length > 0){
                    $('.section_name').html(new Option("--Select--",""));
                    response.data.forEach((d)=>{
                        let section_id = d.section_id.replace(/' '/g,'');
                        $('.section_name').append(new Option(d.name, section_id));
                    });
                    $('#loader_mobi').attr('style','display : none');
                }
                else{
                    $('.section_name').html(new Option("--Select--",""));
                    $('#loader_mobi').attr('style','display : none');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    $('.drop_class').on('change','#class_name',function(e){
        //Loader Start
        let board_id = $("select#board_id option").filter(":selected").val();
        let class_all = $("select#class_name option").filter(":selected").val();
        let class_arr = class_all.split("#");
        let class_name = class_arr['1'];
        let class_id="";
        switch(class_name.toUpperCase()) {
            case "ONE":
                class_id = "01";
                break;
            case "TWO":
                class_id = "02";
                break;
            case "THREE":
                class_id = "03";
                break;
            case "FOUR":
                class_id = "04";
                break;
            case "FIVE":
                class_id = "05";
                break;
            case "SIX":
                class_id = "06";
                break;
            case "SEVEN":
                class_id = "07";
                break;
            case "EIGHT":
                class_id = "08";
                break;
            case "NINE":
                class_id = "09";
                break;
            case "TEN":
                class_id = "10";
                break;
            case "ELEVEN":
                class_id = "11";
                break;
            case "TWELVE":
                class_id = "12";
                break;
            default:
                class_id = "99";
        }
        let uri =  "<?php echo config('app.server_url');?>" +"subject/board/"+board_id.trim()+"/class/"+ class_id.trim() +"/all";
        console.log(uri);
        let authkey = $('#authkey').val();
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
            success: function(response, textStatus, XmlHttpRequest) {
                if(response.data.length > 0){
                    $('.subject_name').html(new Option("--Select--",""));
                    $.each(response.data, function (i, item) {
                         $('.subject_name').append(new Option(item.subject_name, item.subject_id));
                    });
                }
                else{
                    $('.subject_name').html(new Option("--Select--",""));
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
