
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
    $query = array('foo' => 'hello', 'bar' => 'world');

    $response = Unirest\Request::get('http://153.92.4.251:3000/api/v1/student/list', $headers);


    $decoded = json_decode($response->raw_body,true);
  
    @endphp

      <table>
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>Roll</th>
        </thead>
        <tbody>
          <td>
          @php
            foreach ($decoded["data"] as $key => $value) {

              print ($value['student_id'].'<br>');

            }
          @endphp
        </td>
          <td>
            @php
              foreach ($decoded["data"] as $key => $value) {

                print ($value['name']['first_name'].'<br>');

              }
            @endphp
          </td>
          <td>
            @php
              foreach ($decoded["data"] as $key => $value) {

                print ($value['mobile_no'].'<br>');

              }
            @endphp
          </td>
        </tbody>
      </table>

  </body>
</html>
