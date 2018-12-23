
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hello</title>
  </head>
  <body>
    <h1>Hello village</h1>
    @php
    $headers = array('Accept' => 'application/json','Authorization' => 'Bearer Auth');
    $query = array('name' => , 'password' => '00002');
    $body = Unirest\Request\Body::form($query);
    $response = Unirest\Request::post('http://httpbin.org/post', $headers, $body);

    print_r($response->raw_body);



      @endphp


  </body>
</html>
