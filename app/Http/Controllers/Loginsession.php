<?php

namespace App\Http\Controllers;
use Unirest;
use Illuminate\Http\Request;

class Loginsession extends Controller
{
  public function login(Request $request){
    $user_name =$request->input('username');
    $password = $request->input('password');

    $headers = array('Accept' => 'application/json');
    $query = array('user_code' => $user_name, 'password' =>$password );
    $body = Unirest\Request\Body::form($query);
    $response = Unirest\Request::post(config('app.server_url')."auth/login", $headers, $body);

    $decoded_response = json_decode($response->raw_body,true);

    if($decoded_response['success']){
      $auth_user_code = $decoded_response['data']['auth_user_code'];
      $auth_token = $decoded_response['data']['auth_token'];
      session(['username' => $auth_user_code, 'authentication'=>$auth_token]);
      return redirect('/select_institute');
    }
    if($decoded_response['success'] == false){
      return view('/frontend.login');
    }
  }

  public function selectinstitute(Request $request){


   $institute_id = $request->input('select_institute');

   session(['institute_id' => $institute_id]);

   $auth_key = session()->get('authentication');
   $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
   $query = array('foo' => 'hello', 'bar' => 'world');

   $response = Unirest\Request::get(config('app.server_url')."institute/all", $headers);


   $decoded = json_decode($response->raw_body,true);
   foreach ($decoded["data"] as $key => $value) {
    if($value["institute_id"] == $institute_id){
      $institute_name = $value['name'];
      break;
    }

  }


  session(['institute_name' => $institute_name]);




        //print_r(session()->get('institute_id'));
  return redirect('/institution_settings');
}

public function selectclass($class_id, $class_name){
  $class_id = $class_id;
  $class_name = $class_name;
  session(['class_id' => $class_id]);
  $status = "Class $class_name Selected";
  return redirect('/create_section')->with('status',$status);

}
/////////////$class id for subject/////////////////////////
public function selectclassforsubject(Request $request){
    $session_class_id = $request->input('class_id');
    session(['session_class_id' => $session_class_id]);

    return redirect('/create_course')->with('status','Class: '.$session_class_id.' Selected');
}


public function selectclassforlist(Request $request){
  $class_name = $request->input('class_id');
  //session(['class_name' => $class_name]);                   //Student List is selected by only institute

  return redirect('/student_list')->with('status',"Class Selected");
}

public function selectclassforperiod(Request $request){
      $class_id_period = $request->input('class_id');
      $section_id_period = $request->input('section_id');
      session(['class_id_period' => $class_id_period, 'section_id_period' => $section_id_period]);

      return redirect('/create_period')->with('status',"Class Selected");
  }

public function selectclassforcourse($class_id, $class_name){
    $class_name_course = $class_id;
    $class_name = $class_name;
    session(['class_name_course' => $class_name_course]);
    $status = "Class $class_name Selected";
    return redirect('/create_course')->with('status',$status);
}


    public function selectclassforexam(Request $request){
        $class_name_exam = $request->input('class_id');
        $teacher_id = $request->input('course_id');
        $auth_key = session()->get('authentication');
        session(['teacher_id' => $teacher_id]);
        //$teacher = session()->get('teacher_id');
        //var_dump($teacher);

        return redirect('/create_exam')->with('status',"Class and Course Selected");
    }
    public function selectclassforschedule(Request $request){
        $class_name_schedule = $request->input('class_id');
        $teacher_id_schedule = $request->input('course_id');
        session(['teacher_id_schedule' => $teacher_id_schedule, 'class_name_schedule' => $class_name_schedule]);

        //$teacher = session()->get('teacher_id_schedule');
        //var_dump($teacher);

        return redirect('/exam_schedule')->with('status','Class and Course Already Selected');
    }



public function sessiondelete(){
      session()->flush();
      return redirect('/');
}


public function show(){
  print_r(session()->get('class_name_schedule'));
      //print_r($value);
}


public function exam_papers($section_id, $exam_id){
    $section_id = $section_id;
    $exam_id = $exam_id;

    //echo $section_id;
    return redirect('/exam_paper_form')->with('section_id', $section_id)
                                           ->with('exam_id', $exam_id);
    }
}
