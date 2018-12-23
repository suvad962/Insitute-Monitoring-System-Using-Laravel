<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unirest;

class Apitest extends Controller
{
    public function testapi(){
      $headers = array('Accept' => 'application/json','Authorization' => 'Bearer Auth');
      $query = array('foo' => 'hello', 'bar' => 'world');

      $response = Unirest\Request::get('http://153.92.4.251:3000/api/v1/institute/all', $headers);


      $decoded = json_decode($response->raw_body,true);
      if ($decoded['success']) {
// code...
        foreach ($decoded["data"] as $key => $value) {
  // code...
          print ($value['address']['village'].'<br>');


          }
        }
      }
    }
