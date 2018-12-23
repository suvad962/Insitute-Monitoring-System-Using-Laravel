<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unirest;

class FormDataPushToApi extends Controller
{

    public function addclass(Request $request)
    {
        $class_name = $request->input('class_name');

        $auth_key = session()->get('authentication');
        $institute_id = session()->get('institute_id');


           $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
           $query = array('class_name' => $class_name, 'institute_id' =>$institute_id );
           $body = Unirest\Request\Body::form($query);
           $response = Unirest\Request::post(config('app.server_url').'class/create/new', $headers, $body);
           $decoded = json_decode($response->raw_body,true);

           if($decoded['success']){
               return redirect('/create_class')->with('status', 'Class Created Successfully');
           }
           else{
               return redirect('/create_class')->with('statuss', 'Opps!! Class Could Not Created');
           }


    }

    public function getSection($id){
              $auth_key = session()->get('authentication');

              $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

              $response = Unirest\Request::get(config('app.server_url')."class/{$id}/section/all", $headers);

              //$body = json_decode($response->body);
              //var_dump($response->raw_body);
              return $response->raw_body;

    }
    public function getSubject($id){
              $auth_key = session()->get('authentication');
              $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

              $response = Unirest\Request::get(config('app.server_url')."class/{$id}/subject/all", $headers);

              //$body = json_decode($response->body);
            //  print_r($response->raw_body);
              return $response->raw_body;

    }


    public function getcourse($id){
        $auth_key = session()->get('authentication');
            $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

            $response = Unirest\Request::get(config('app.server_url')."class/{$id}/course/all", $headers);

            //$body = json_decode($response->body);
            //  print_r($response->raw_body);
            return $response->raw_body;

    }
    public function getcourseschedule($id){
        $auth_key = session()->get('authentication');
        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

        $response = Unirest\Request::get(config('app.server_url')."class/{$id}/course/all", $headers);

        //$body = json_decode($response->body);
        //  print_r($response->raw_body);
        return $response->raw_body;

    }
    public function getteacherid($id){
        $auth_key = session()->get('authentication');
        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

        $response = Unirest\Request::get(config('app.server_url')."exam/{id}/list", $headers);

        //$body = json_decode($response->body);
        //  print_r($response->raw_body);
        return $response->raw_body;

    }

    public function getcourseexam($id){
        $auth_key = session()->get('authentication');
        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

        $response = Unirest\Request::get(config('app.server_url')."class/{$id}/subject/all", $headers);

        //$body = json_decode($response->body);
        //  print_r($response->raw_body);
        return $response->raw_body;

    }




    public function addsection(Request $request){
      $institute_id = session()->get('institute_id');
      $name = $request->input('name');
      $class_id = $request->input('class_id');
      $shift_id = $request->input('shift_id');
      $capacity = $request->input('capacity');
      $auth_key = session()->get('authentication');



        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
        $query = array('institute_id' => $institute_id, 'name' => $name, 'class_id' => $class_id, 'shift_id' => $shift_id, 'capacity' =>$capacity);
        $body = Unirest\Request\Body::form($query);
        $response = Unirest\Request::post(config('app.server_url').'class/section/create', $headers, $body);

        $decoded = json_decode($response->raw_body,true);

        if($decoded['success']){
            return redirect('/create_section')->with('status', 'Section Created Successfully');
        }
        else{
            return redirect('/create_section')->with('statuss', 'Opps!! Section Could Not Created');
        }

    }


    public function uploadCsv(Request $request){

      if ($request::ajax()) {
        # code...
        return json_encode($request);
      }


    }

    public function addsubject(Request $request){
          $institute_id = session()->get('institute_id');
          $board_id = $request->input('board_id');
          $class_id = $request->input('class_id');
          $subject_name = $request->input('subject_name');
          $subject_code = $request->input('subject_code');
          $auth_key = session()->get('authentication');

        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
        $query = array('institute_id' => $institute_id, 'board_id' => $board_id, 'class_id' => $class_id, 'subject_name' => $subject_name,  'subject_code' => $subject_code);
        $body = Unirest\Request\Body::form($query);
        $response = Unirest\Request::post(config('app.server_url')."subject/create/new", $headers, $body);
        $decoded = json_decode($response->raw_body,true);
        if($decoded['success']){
            return redirect('/create_subject')->with('status',"Subject Created Successfully");
        }
        else{
            return redirect('/create_subject')->with('statuss', 'Opps!! Subject Could Not Created');
        }
    }

    public function addperiod(Request $request){
      $institute_id = session()->get('institute_id');

      $teacher_id = $request->input('teacher_id');
      $name = $request->input('period_name');
      $subjectandcourseid =  $request->input('subject_id');
      $subjectandcourseArray = explode("#", $subjectandcourseid);
      $course_id = $subjectandcourseArray[0];
      $subject_id = $subjectandcourseArray[1];
      $start_time = $request->input('start_time');
      $end_time = $request->input('end_time');
      $day = $request->input('day');
      $comment = "Comment";
      $descriptiion = "Description";
      $auth_key = session()->get('authentication');


       $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
       $query = array('institute_id' => $institute_id, 'subject_id' =>$subject_id, 'course_id'=>$course_id, 'teacher_id' => $teacher_id, 'name' => $name, 'start_time' => $start_time, 'end_time' => $end_time, 'day' => $day, 'comments' => $comment, 'description' => $descriptiion);
       $body = Unirest\Request\Body::form($query);
       $response = Unirest\Request::post(config('app.server_url')."class/period/create", $headers, $body);

        $decoded = json_decode($response->raw_body,true);

        if($decoded['success']){
            return redirect('/create_period')->with('status',"Period Created Successfully");
            //var_dump($decoded);

        }
        else{
            return redirect('/create_period')->with('statuss', 'Opps!! Period Could Not Created');
            //var_dump($decoded);
        }

    }

    public function addshift(Request $request){

      $name = $request->input('name');
      $start_time = $request->input('start_time');
      $end_time = $request->input('end_time');
      $institute_id = session()->get('institute_id');
      $auth_key = session()->get('authentication');

      $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
      $query = array( 'name' =>$name, 'start_time' => $start_time, 'end_time' => $end_time, 'institute_id' => $institute_id);
      $body = Unirest\Request\Body::form($query);
      $response = Unirest\Request::post(config('app.server_url')."institute/shift/create/new", $headers, $body);

        $decoded = json_decode($response->raw_body,true);

        if($decoded['success']){
            return redirect('/create_shift')->with('status', 'Shift Created Successfully');
        }
        else{
            return redirect('/create_shift')->with('statuss', 'Opps!! Shift Could Not Created');
        }

    }



    public function addteacher(Request $request){
      $first_name = $request->input('first_name');
      $middle_name = $request->input('middle_name');
      $last_name = $request->input('last_name');
      $gender = $request->input('gender');
      $subject_speciality = $request->input('subject_speciality');
      $nid_number = $request->input('nid_number');
      $tin_number = $request->input('tin_number');
      $teacher_type = $request->input('teacher_type');
      $email = $request->input('email');
      $Status = $request->input('status');
      $phone_no = $request->input('phone_no');
      $mobile_no = $request->input('mobile_no');
      $addressline = $request->input('addresslist');
      $present_post_code = $request->input('present_post_code');
      $present_post_office = $request->input('present_post_office');
      $present_upazilla = $request->input('present_upazilla');
      $present_district = $request->input('present_district');
      $per_adderessline = $request->input('per_adderessline');
      $permanent_post_code = $request->input('permanent_post_code');
      $permanent_post_office = $request->input('permanent_post_office');
      $permanent_upazilla = $request->input('permanent_upazilla');
      $permanent_district = $request->input('permanent_district');
      $title_qualification = $request->input('title_qualification');
      $other_qualification = $request->input('other_qualification');
      $teacher_index = $request ->input('teacher_index');
      $auth_key = session()->get('authentication');
      $institute_id = session()->get('institute_id');

      $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
      $query = array("first_name"=> $first_name,
                      "institute_id" => $institute_id,
                      "middle_name"=> $middle_name,
                      "last_name"=> $last_name,
                      "gender"=> $gender,
                      "subject_speciality"=>$subject_speciality,
                      "nid"=>$nid_number,
                      'tin'=>$tin_number,
                      'email'=>$email,
                      'phone_no'=>$phone_no,
                      'mobile_no'=>$mobile_no,
                      'status'=> $Status,
                      'addressline'=>$addressline,
                      'present_post_office'=>$present_post_office,
                      'present_post_code'=>$present_post_code,
                      'present_upazilla'=>$present_upazilla,
                      'present_district'=>$present_district,
                      'per_addressline'=>$per_adderessline,
                      'permanent_postOffice'=>$permanent_post_office,
                      'permanent_post_code'=> $permanent_post_code,
                      'permanent_upazilla' => $permanent_upazilla,
                      'permanent_district' => $permanent_district,
                      'title_qualification' => $title_qualification,
                      'other_qualification' => $other_qualification,
                      'teacher_index' => $teacher_index
      );
      $body = Unirest\Request\Body::form($query);
      $response = Unirest\Request::post(config('app.server_url')."teacher/add/new", $headers, $body);
        //var_dump($response);
        $decoded = json_decode($response->raw_body,true);

        if($decoded['success']){
            return redirect('/teacher_list')->with('status','Teacher Created Successfully');
        }
        else{
            return redirect('/add_teacher')->with('statuss', 'Opps!! Teacher Could Not Created');
        }

    }

    public function addstudent(Request $request){
      $class_id =$request->input('class_id');
      $section_id =$request->input('section_id');
      $first_name = $request->input('first_name');
      $middle_name = $request->input('middle_name');
      $last_name = $request->input('last_name');
      $gender = $request->input('gender');
      $date_of_birth = $request->input('date_of_birth');
      $nationality = $request->input('nationality');
      $religion = $request->input('religion');
      $blood_group = $request->input('blood_group');
      $email = $request->input('email');
      $Status = $request->input('Status');
      $phone_no = $request->input('phone_no');
      $mobile_no = $request->input('mobile_no');
      $father_name = $request->input('father_name');
      $father_profession = $request->input('father_profession');
      $father_mobile_no = $request->input('father_mobile_no');
      $mother_name = $request->input('mother_name');
      $mother_profession = $request->input('mother_profession');
      $mother_mobile_no = $request->input('mother_mobile_no');
      $addressline = $request->input('addressline');
      $present_post_code = $request->input('post_code');
      $present_post_office = $request->input('postOffice');
      $present_upazilla = $request->input('upazilla');
      $present_district = $request->input('district');
      $roll_no = $request->input('roll_no');
      $year = $request->input('year');
      $auth_key = session()->get('authentication');
      $institute_id = session()->get('institute_id');


      $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
      $query = array("first_name"=> $first_name,
                      "institute_id" => $institute_id,
                      "middle_name"=> $middle_name,
                      "last_name"=> $last_name,
                      "gender"=> $gender,
                      "section_id"=>$section_id,
                      "date_of_birth"=>$date_of_birth,
                      'nationality'=>$nationality,
                      'religion'=>$religion,
                      'blood_group'=>$blood_group,
                      'email'=>$email,
                      'phone_no'=>$phone_no,
                      'mobile_no'=>$mobile_no,
                      'status'=> $Status,
                      'addressline'=>$addressline,
                      'present_postOffice'=>$present_post_office,
                      'present_post_code'=>$present_post_code,
                      'present_upazilla'=>$present_upazilla,
                      'present_district'=>$present_district,
                      'father_name'=>$father_name,
                      'father_profession'=>$father_profession,
                      'father_mobile_no'=>$father_mobile_no,
                      'mother_name'=> $mother_name,
                      'mother_profession'=> $mother_profession,
                      'mother_mobile_no'=> $mother_mobile_no,
                      'roll_no'=> $roll_no,
                      'year'=> $year,
                      'class_id' => $class_id
      );
      $body = Unirest\Request\Body::form($query);
      $response = Unirest\Request::post(config('app.server_url')."student/add/new", $headers, $body);

        $decoded = json_decode($response->raw_body,true);

        if($decoded['success']){
            return redirect('/student_list')->with('status','Student Created Successfully');
        }
        else{
            return redirect('/add_student')->with('statuss', 'Opps!! Student Could Not Created');
        }

    }


    public function addcourse(Request $request){
      $institute_id = session()->get('institute_id');
      $get_class_id = $request->input('class_id');
      $class_id_arr = explode("#",$get_class_id);
      $class_id = $class_id_arr[0];
      $section_id = $request->input('section_id');
      $subject_id = $request->input('subject_id');
      $teacher_id = $request->input('teacher_id');
      $auth_key = session()->get('authentication');
  //    var_dump($institute_id);

      $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
      $query = array( 'institute_id' =>$institute_id, 'class_id' => $class_id, 'subject_id' => $subject_id, 'teacher_id' => $teacher_id, 'section_id' => $section_id);
      $body = Unirest\Request\Body::form($query);
      $response = Unirest\Request::post(config('app.server_url')."class/course/create", $headers, $body);
        $decoded = json_decode($response->raw_body,true);
        if($decoded['success']){
            return redirect('/create_course')->with('status',"Teacher Assigned to Subject Successfully");
        }
        else{
            return redirect('/create_course')->with('statuss', 'Opps!! Course Could Not Created');
        }

    }

    public function addinstitution(Request $request){


        $name = $request->input('name');
        $short_name = $request->input('short_time');
        $school_code= $request->input('school_code');
        $college_code= $request->input('college_code');
        $eiin_code= $request->input('eiin_code');
        $estd_number= $request->input('estd_number');
        $email= $request->input('email');
        $phone_number= $request->input('phone_number');
        $mobile_number= $request->input('mobile_number');
        $total_student= $request->input('total_student');
        $type= $request->input('type');
        $addressline= $request->input('addressline');
        $post_code= $request->input('postcode');
        $post_office = $request->input('postOffice');
        $upazilla = $request->input('upazilla');
        $district = $request->input('district');
        $logo = $request->input('logo');
        $lat = 00.00;
        $lng = 00.00;
        $auth_key = session()->get('authentication');


        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
        $newInstitute = array(
                            "name" => $name,
                            "short_name"=>$short_name,
                            "code_school" => $school_code,
                            "code_college"=>$college_code,
                            "code_eiin" => $eiin_code,
                            "addressline" => $addressline,
                            "postOffice"=> $post_office,
                            "post_code" => $post_code,
                            "upazilla" => $upazilla,
                            "district" => $district,
                            "lat" => $lat,
                            "lng" => $lng,
                            "logo" => "",
                            "total_student" => $total_student,
                            "type" => $type,
                            "estd" => $estd_number,
                            "email" => $email,
                            "phone_no" => $phone_number,
                            "mobile_no" => $mobile_number
        );
        $body = Unirest\Request\Body::form($newInstitute);
        $response = Unirest\Request::post(config('app.server_url')."institute/add", $headers, $body);
            $decoded = json_decode($response->raw_body,true);
            if($decoded['success']){
                return redirect('/add_institute')->with('status', 'Institute Created Successfully');
            }
            else{
                return redirect('/add_institute')->with('statuss', 'Opps!! Institute Could Not Created');
            }

    }

    public function examtype(Request $request){
        $exam_type = $request->input('exam_type');
        $auth_key = session()->get('authentication');
        $institute_id = session()->get('institute_id');

        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);
        $query = array('name' => $exam_type, 'institute_id' =>$institute_id );
        $body = Unirest\Request\Body::form($query);
        $response = Unirest\Request::post(config('app.server_url')."exam/create/type", $headers, $body);

        $decoded = json_decode($response->raw_body,true);
        if($decoded['success']){
            return redirect('/exam_type')->with('status','Exam Type Created Successfully');
        }
        else{
            return redirect('/exam_type')->with('statuss', 'Opps!! Exam Type Could Not Created');
        }


    }

    public function examschedule(Request $request){
        $exam_id = explode("," , $request->input('exam_id'));
        $exam_date = $request->input('exam_date');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
        $venue = "Classroom";
        $status = "FINISHED";
        $teacher_id = $request->input('teacher_id');
        $auth_key = session()->get('authentication');
        $institute_id = session()->get('institute_id');

        $headers = array (
          'Accept' => 'application/json',
          'Authorization' => $auth_key,
          'Content-Type'=> 'application/json'
          );
        $query = array (
          'institute_id' => $institute_id,
          'exam_id' => $exam_id,
          'exam_date' => $exam_date,
          'start_time' => $start_time,
          'end_time' => $end_time,
          'venue' => $venue,
          'status' => $status,
          'teacher_id' => $teacher_id
          );
        //var_dump($query);
        $body = Unirest\Request\Body::json($query);
        $response = Unirest\Request::post(config('app.server_url')."exam/set/schedule", $headers, $body);

        $decoded = json_decode($response->raw_body,true);
        if($decoded['success']){
            return redirect('/exam_schedule')->with('status', "Exam Schedule Created Successfully");
        }
        else{
            return redirect('/exam_schedule')->with('statuss', 'Opps!! Exam Schedule Could Not Created');
        }
    }

    public function addexam(Request $request){
        $institute_id = session()->get('institute_id');
        $exam_type_id = $request->input('exam_type_id');
        $course_id = explode("," , $request->input('course_id'));
        $exam_code = mt_rand(100000,999999);
        $teacher_id = $request->input('teacher_id');
        $auth_key = session()->get('authentication');

        $headers = array(
          'Accept' => 'application/json',
          'Authorization' => $auth_key,
          'Content-Type'=> 'application/json');
        $query = array(
            'institute_id' => $institute_id,
            'exam_type_id' => $exam_type_id,
            'course_id' => $course_id,
            'exam_code' => $exam_code,
            'teacher_id' => $teacher_id
        );
        //var_dump($query);
        $body = Unirest\Request\Body::json($query);
        $response = Unirest\Request::post(config('app.server_url')."exam/temp/create/new", $headers, $body);
        $decoded = json_decode($response->raw_body,true);
        if($decoded['success']){
            return redirect('/create_exam')->with('status','Exam Created Successfully');
        }
        else{
            return redirect('/create_exam')->with('statuss', 'Opps!! Exam Could Not Created');
        }
    }
    public function exam_papers_form_data(Request $request){
        $mark_countable = true;
        $auth_key = session()->get('authentication');
        $institute_id = session()->get('institute_id');
       // echo "$institute_id \n";
      //  echo "$auth_key ";



        foreach($request->student_id as $key=>$value) {
            $student_id = $request->student_id[$key];
            $exam_id = $request->exam_id[$key];
            $achieved_marks = $request->marks[$key];
            if ($achieved_marks < 33) {
                $passed = false;
            } else {
                $passed = true;
            }


            $query['examId'] = $exam_id;

            $query['studentResult'][$key]['institute_id'] = $institute_id;
            $query['studentResult'][$key]['exam_id'] = $exam_id;
            $query['studentResult'][$key]['student_id'] = $student_id;
            $query['studentResult'][$key]['achieved_marks'] = $achieved_marks;
            $query['studentResult'][$key]['passed'] = $passed;
            $query['studentResult'][$key]['mark_countable'] = $mark_countable;

        };


        $headers = array('Accept' => 'application/json','Authorization' => $auth_key);

        $data = $query;
        $body = Unirest\Request\Body::json($data);
        $response = Unirest\Request::post(config('app.server_url')."exam/submit/result", $headers, $body);
            var_dump($response);
            //  echo $body;

    }






}
