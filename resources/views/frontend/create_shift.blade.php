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
  $api_url = config('app.server_url')."institute/{$institute_id}/shift/all";

  $response = Unirest\Request::get($api_url, $headers);


  $decoded = json_decode($response->raw_body,true);

  if($decoded['message'] == "TOKEN EXPIRED"){
  return redirect('/');
}
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
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-4">
            <h2 class="content-color-primary page-title">View All Shift</h2>
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
  <!-- content page -->
  <div class="container mt-4 main-container">
    <div class="card mb-4">
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-md-10 mx-auto">
            <div class="row ">
              <div class="col-lg-12 col-md-12 text-left">
                <!--<img src="{{ asset('frontend') }}/img/logo.png" alt="" class="mw-100 mt-4">-->
                <div class="mw-50 mt-4">
                  <h2>View Shift</h2>          
                  <!-- @include('frontend.includeFiles.inside-loader') -->
                </div>
              </div>
            </div>
            <hr>

            <div class="card-body">
              <table class="table " id="dataTables-example">
                <thead>
                  <th>Shift Name</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                </thead>
                <tbody>
                  @php
                  $messagelength = strlen($decoded['message']);
                  if($messagelength != 40 && $decoded != null){
                  foreach ($decoded['data'] as $key => $value)
                  {
                    $start_time = $value['time']['start_time'];
                    $end_time = $value['time']['end_time'];
                    @endphp
                    <tr>
                      <td>
                        @php
                        getValue('name',$value);
                        @endphp
                      </td>
                      <td>
                        @php
                        echo $start_time
                        @endphp
                      </td>
                      <td>
                        @php
                        echo $end_time
                        @endphp
                      </td>

                    </tr>
                    @php
                  }
                }
                else{
                @endphp
                <td>
                  @php
                  print($decoded['message']);
                  @endphp
                </td>
                @php
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

@include('frontend.inc.footer')



<footer class="border-top">
  <div class="row">
    <div class="col-12 col-sm-6"></div>
    <div class="col-12 col-sm-6 text-right"><a href="" class="content-color-secondary"></a><a href="" class="content-color-secondary"></a></div>
  </div>
</footer>

<!-- modal for create form -->
<div class="modal fade" id="createOrder" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg hidden-after-submit" role="document">
    <div class="modal-content">
      <div class="modal-header" id="createOrderTitle">
        <div class="col text-center">
          <h4>Create Shift</h4>
          <br>
        </div>
        <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ action('FormDataPushToApi@addshift') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
          <div class="row justify-content-center">
            <div class="col-md-10 mx-auto">
              <div class="form-group row">

                <div class="col-lg-12 col-md-12">
                  <label>Shift Name</label>
                  <select name="name" type="text" class="form-control" data-live-search="true" tabindex="-1" aria-hidden="true">
                    <option selected disabled>--Select--</option>
                    <option value="Morning">Morning</option>
                    <option value="Day">Day</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
               <div class="col-lg-4 col-md-4">
                 <label>Start Time</label>
                 <input name="start_time" type="text" class="form-control" placeholder="">
               </div>

               <div class="col-lg-4 col-md-4">
                 <label>End Time</label>
                 <input name="end_time" type="text"  class="form-control" placeholder="">
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

<!-- New Modal -->
<!-- Modal -->
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
<!-- New Modal End -->

<!-- modal for create form ends-->
@include('frontend.includeFiles.all-js')
<!-- page specific script -->

<!-- <script type="text/javascript">
  $(document).ready(function(){
    console.log('document ready')
  })
  $( "#bbbbbb" ).click(function() {
    console.log('document ready');
    $( ".hidden-after-submit" ).css('display','none');
    $( ".show-after-submit" ).css('display','block');
  });
</script> -->

<script>
  "use strict"
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
