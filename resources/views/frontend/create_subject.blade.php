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

        .required:before { content:" *";
            color:red;}

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
                            <h2 class="content-color-primary page-title">View Subjects</h2>
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
                            <div align="center">
                                <div class="col-lg-10 col-md-10 mb-4">
                                    <div class="mw-50 mt-4">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 drop_class">
                                                <select name="board_id" type="text" class="form-control board_id">
                                                    <option value="">--Select Board--</option>
                                                    <option value="1">General Education Board</option>
                                                    <option value="2">Madrasha Board</option>
                                                    <option value="3">Technical Board</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-4 drop_class">
                                                <select name="class_id" type="text" class="form-control class_id">
                                                    <option value="">--Select Class--</option>
                                                    <option value="01">ONE</option>
                                                    <option value="02">TWO</option>
                                                    <option value="03">THREE</option>
                                                    <option value="04">FOUR</option>
                                                    <option value="05">FIVE</option>
                                                    <option value="06">SIX</option>
                                                    <option value="07">SEVEN</option>
                                                    <option value="08">EIGHT</option>
                                                    <option value="09">NINE</option>
                                                    <option value="10">TEN</option>
                                                    <option value="11">ELEVEN</option>
                                                    <option value="12">TWELVE</option>
                                                </select>
                                            </div>
                                            <?php $pass_key = session()->get('authentication');?>
                                            <input type="hidden" value="<?php echo $pass_key?>" id="authkey">
                                            <div class="col-lg-4 col-md-4">
                                                <button class="btn btn-primary form-control showSubjectsBtn">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div align="center" class="card-body">
                                <table class="table table-bordered col-md-10" id="dataTables-example">
                                    <tr style="background-color: #e6e6fa">
                                        <th>Subject Name</th>
                                        <th>Subject Code</th>
                                    </tr>
                                    <tbody class="showSubjectsTbl">
                                        <tr>
                                            <td colspan="2">No Data Available</td>
                                        </tr>
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
        <div class="modal-dialog modal-lg  hidden-after-submit" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                    <h4>Create Subject</h4>
                    <br>
                    </div>
                    <!-- Loader Tag -->
                    <div align="center" class="align-center" style="padding-top:5px">
                        <div id="loader_mobi" class="loader1" style="display:none"></div>
                    </div>
                    <!-- Loader End -->
                    <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ action('FormDataPushToApi@addsubject') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                          <div class="form-group row">
                              <div class="col-lg-6 col-md-6 drop_class">
                                  <div class="required" >
                                      <label>Board Name</label>
                                      <select name="board_id" type="text" class="form-control">
                                          <option value="1">General Education Board</option>
                                          <option value="2">Madrasha Board</option>
                                          <option value="3">Technical Board</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 drop_class">
                                  <div class="required" >
                                  <label>Class Name</label>
                                  <select name="class_id" type="text" class="form-control class_id">
                                      <option value="01">ONE</option>
                                      <option value="02">TWO</option>
                                      <option value="03">THREE</option>
                                      <option value="04">FOUR</option>
                                      <option value="05">FIVE</option>
                                      <option value="06">SIX</option>
                                      <option value="07">SEVEN</option>
                                      <option value="08">EIGHT</option>
                                      <option value="09">NINE</option>
                                      <option value="10">TEN</option>
                                      <option value="11">ELEVEN</option>
                                      <option value="12">TWELVE</option>
                                  </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-6 col-md-6" style="align-content: center">
                                <div class="required" >
                                <label>Subject Name</label>
                                <input name="subject_name" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                              <div class="col-lg-6 col-md-6">
                                  <div class="required">
                                      <label>Subject Code</label>
                                      <input name="subject_code" type="text" class="form-control" placeholder="">
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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            "order": [
                [3, "desc"]
            ]
        });
    });

    $(".showSubjectsBtn").click(function() {
        $(".showSubjectsTbl > tr").remove();
        $('#loader_mobi').show();
        let board_id = $("select.board_id option").filter(":selected").val();
        let class_id = $("select.class_id option").filter(":selected").val();
        let authkey = $('#authkey').val();
        let uri = "<?php echo config('app.server_url');?>"+'subject/board/'+ board_id +'/class/'+ class_id +'/all';
        $.ajax({
            type: 'GET',
            url: uri,
            beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
            success: function(response, textStatus, XmlHttpRequest) {
                $('#loader_mobi').attr('style','display : none');
                if(response.data.length > 0){
                    $.each(response.data, function (i, item) {
                        $('.showSubjectsTbl').append('<tr><td>'+item.subject_name+'</td><td>'+item.subject_code+'</td></tr>');
                    });
                }
                else{
                    $('.showSubjectsTbl').append('<tr><td colspan="2">No Subject Found!</td></tr>');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    // $(".class_id").change(function(){
    //     $(".showSubjects > tr").remove();
    //     var class_id = $("select.class_id option").filter(":selected").val();
    //     var uri = 'http://153.92.4.251:3000/api/v1/class/'+ class_id +'/subject/list';
    //     var authkey = $('#authkey').val();
    //     $.ajax({
    //         type: 'GET',
    //         url: uri,
    //         beforeSend: function(xhr){xhr.setRequestHeader('Authorization', authkey);},
    //         success: function(response, textStatus, XmlHttpRequest) {
    //             $.each(response.data, function (i, item) {
    //                 $('.showSubjects').append('<tr><td>'+item.name+'</td><td>'+item.subject_code+'</td></tr>');
    //             });
    //         },
    //         error: function(XMLHttpRequest, textStatus, errorThrown) {
    //             alert(errorThrown);
    //         }
    //     });
    // });

</script>
</body>
</html>


