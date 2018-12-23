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

    <style>
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
    <style>
        .required:before { content:" *";
            color:red;}
    </style>
</head>

<body class="fixed-header sidebar-right-close">

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
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4"></div>
                        <div align="center" class="col-lg-4 col-md-4">
                            <h2 class="content-color-primary page-title">View All Section</h2>
                        </div>
                        <div class="col-lg-4 col-md-4 btn pull-right">
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Create</span></button>
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
                            <div class="row">
                                <div class="col-lg-4 col-md-4"></div>
                                <div class="col-lg-4 col-md-4 drop_class">
                                    <select name="class_id" type="text" class="form-control" id="class_id">
                                        <option disabled>--Select Class--</option>
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
                                <div class="col-lg-4 col-md-4">
                                    <button type="submit" class="btn btn-primary showSectionsBtn">Show</button>
                                </div>
                            </div>
                            <div align="center" class="card-body mt-4">
                                <table class="table table-bordered col-md-10" id="dataTables-example">
                                    <tr style="background-color: #e6e6fa">
                                        <th>Section Name</th>
                                        <th>Section Capacity</th>
                                    </tr>
                                    <tbody class="showSectionsTbl">
                                    <tr>
                                        <td colspan="2">No Data Available</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- Loader Tag -->
                                <div align="center" class="align-center" style="padding-top:5px">
                                    <div id="loader_mobi" class="loader1" style="display:none"></div>
                                </div>
                                <!-- Loader End -->
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
        <div class="modal-dialog modal-lg  hidden-after-submit" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                    <h4>Create Section</h4>
                    <br>
                    </div>
                    <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ action('FormDataPushToApi@addsection') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                        <label>Select Shift</label>
                                        <select name="shift_id" type="text" class="form-control">
                                            <option disabled>--Select--</option>
                                            <?php
                                            $auth_key = session()->get('authentication');
                                            $institute_id = session()->get('institute_id');
                                            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
                                            $api_url = config('app.server_url')."institute/{$institute_id}/shift/all";
                                            $response = Unirest\Request::get($api_url, $headers);
                                            $decoded = json_decode($response->raw_body,true);
                                            if($response->code === 200){
                                            if($decoded['success'] === true){
                                            if(count($decoded['data']) > 0){
                                            foreach ($decoded["data"] as $key => $value) { ?>
                                            <option value="<?php echo $value['shift_id']; ?>">
                                                <?php echo $value['name'];?>
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
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                        <label>Select Class</label>
                                        <select name="class_id" type="text" class="form-control">
                                            <option disabled>--Select Class--</option>
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
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Section Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Enter Section Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="required">
                                    <label>Section Capacity</label>
                                    <input name="capacity" type="number" class="form-control" placeholder="Enter Section Capacity">
                                    </div>
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

<script type="text/javascript">
  $(document).ready(function(){
    console.log('document ready')
  });
  $(".showSectionsBtn").click(function() {
      $('#loader_mobi').show();
      $(".showSectionsTbl > tr").remove();
      let class_id = $("select#class_id option").filter(":selected").val();
      let uri = "<?php echo config('app.server_url');?>" + "class/" + class_id + "/institute/<?php echo session()->get('institute_id'); ?>/section/all";
      $.ajax({
          type: 'GET',
          url: uri,
          beforeSend: function(xhr){xhr.setRequestHeader('Authorization', "<?php echo session()->get('authentication'); ?>");},
          success: function(response, textStatus, XmlHttpRequest) {
              console.log(response);
              if(response.data.length > 0){
                  $.each(response.data, function (i, item) {
                      $('.showSectionsTbl').append('<tr><td>'+item.name+'</td><td>'+item.capacity+'</td></tr>');
                      $('#loader_mobi').attr('style','display : none');
                  });
              }
              else{
                  $('.showSectionsTbl').append('<tr><td colspan="2">'+ response.message + '</td></tr>');
                  $('#loader_mobi').attr('style','display : none');
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
