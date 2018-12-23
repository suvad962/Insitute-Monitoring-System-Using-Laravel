<!DOCTYPE html>
<html>
<head>
<title>Upload file</title>
</head>
<body>



<form class="form-horizontal" action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
  

  <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file">

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
  
  <input type="hidden" name="_token" value="{{ csrf_token()}}">
  <br> 
  <button type="submit" name="button"> up csv</button>
  
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>

</body>
</html>