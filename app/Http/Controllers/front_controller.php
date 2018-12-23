<?php

namespace App\Http\Controllers;
use Unirest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//use App\Http\Request\CsvImportRequest;

class front_controller extends Controller
{

    public function login(){
      return view('frontend.login');
    }

    public function dashboard(){
    	return view('frontend.index');
    }
    public function selectinstitute(){
        $authentication = session()->get('authentication');
        session()->forget( 'class_id');
        session()->forget( 'class_id_for_subject');
        session()->forget( 'class_name_period');
        session()->forget( 'class_name_course');
        session()->forget( 'teacher_id');
        session()->forget( 'teacher_id_schedule');
        session()->forget( 'section_id_period');
        if(is_null($authentication)){
           return redirect('/');
        }
        else{
            return view('frontend.instituteAllFiles.select_institute');
        }

    }
    public function institute_list(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.instituteAllFiles.institute_list');
            }
        }

    }

    public function add_institution(){
        session()->forget('institute_id');
        return view('frontend.instituteAllFiles.add_institution');
    }

    public function edit_institute(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.instituteAllFiles.edit_institute');
            }
        }


    }

    public function institution_settings(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.instituteAllFiles.institution_settings');
            }
        }

    }

    public function student_list(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.studentAllFiles.student_list');
            }
        }

    }

    public function add_student(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.studentAllFiles.add_student');
            }
        }

    }

    public function edit_student(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.studentAllFiles.edit_student');
            }
        }

    }

    public function teacher_list(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.teacherAllFiles.teacher_list');
            }
        }

    }

    public function add_teacher(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.teacherAllFiles.add_teacher');
            }
        }

    }

    public function edit_teacher(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.teacherAllFiles.edit_teacher');
            }
        }

    }

    public function schedule_list(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.schedule_list');
            }
        }

    }

    public function add_schedule(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.add_schedule');
            }
        }

    }

    public function edit_schedule(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.edit_schedule');
            }
        }

    }

    public function create_shift(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_shift');
            }
        }

    }

    public function create_class(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_class');
            }
        }

    }

    public function create_section(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_section');
            }
        }

    }

    public function create_subject(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_subject');
            }
        }

    }

    public function create_period(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_period');
            }
        }

    }
    public function create_course(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_course');
            }
        }

    }
    
    public function exam_type(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.exam_type');
            }
        }

    }
    public function create_exam(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.create_exam_new');
            }
        }

    }
    public function exam_schedule(){
        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');
            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                return view('frontend.exam_schedule');
            }
        }

    }
    public function exam_papers()
    {
        return view('frontend.exam_papers');
    }
    public function exam_paper_form()
    {
        return view('frontend.exam_paper_form');
    }


    public function test(){


        $headers = array('Accept' => 'application/json','Authorization'=>'Bearer Auth');
        $body = array('full_name' => 'Faisal Ahmed', 'email' => 'hello@imfaisal.me','password'=>'12456');

        $response = Unirest\Request::get('http://mockbin.com/request', 'full_name', 'email', 'password');


        var_dump($response->body);     // Headers

    }

    public function store(request $request){


        $path = $request->file('csv_file')->store('upld');
        //Storage::setVisibility($path,'public');
        $url= $path;
        $path = Storage::get($path);

        $student_array = [];
        $headers = [];
        $csv = explode("\n", $path);
        $inserted = 0;
        foreach ($csv as $key => $line)
        {
            if ($key == 0){
                array_push($headers,str_getcsv($line));
            }else{
                $data = str_getcsv($line);
                //var_dump($data);
                for ($x = 0;$x<count($headers[0]);$x++){
                    $student_array[$key][$headers[0][$x]] = mb_convert_encoding($data[$x],'HTML-ENTITIES',"UTF-8");
                }
            }
        }


        //var_dump($student_array);
        if (Storage::delete($url)) {
            # code...
            //var_dump($csv);

        }
        //return view('test.testform');

    }

    public function bulkOutputStudent(request $request){
        ini_set('max_execution_time', 600);

        $authentication = session()->get('authentication');
        if(is_null($authentication)){
            return redirect('/');
        }
        else {
            $institute_select = session()->get('institute_id');

            if(is_null($institute_select)){
                return redirect('/select_institute')->with('status','Please select school to go ahead');
            }
            else{
                $selected_class_id = $request->input('class_id');
                $selected_section_id = $request->input('section_name');
                $year = date("Y");
                $institute_id = session()->get('institute_id');



                // echo "$cls   ";
                // echo "$sec \n";
                $path = $request->file('csv_file')->store('upld');
                //Storage::setVisibility($path,'public');
                $url= $path;
                $path = Storage::get($path);

                $student_array = [];
                $headers = [];

                $csv = explode("\n", $path);
                $inserted = 0;




                foreach ($csv as $key => $line)
                {
                    if ($key == 0){
                        array_push($headers,str_getcsv($line));

                    }
                    else{
                        $data = str_getcsv($line);
                        //$d2 = $data;

                        if (count($data) === 24) {




                            for ($x = 0;$x<count($headers[0]);$x++){
                                $student_array[$key][$headers[0][$x]] = $data[$x];
                                // echo $data[$x];


                            }
                            // echo "\n";
                        }

                    }


                }
                //$header_add = count($headers[0]);

                $header_add = count($headers[0]);
                $headers[0][$header_add] = "institute_id";
                $headers[0][$header_add + 1] = "year";
                $headers[0][$header_add + 2] = "class_id";
                $headers[0][$header_add + 3] = "section_id";

                var_dump($headers);


                foreach ($student_array as $key => $value) {


                    $student_array[$key]["institute_id"] = $institute_id;
                    $student_array[$key]["year"] = $year;
                    $student_array[$key]["class_id"] = $selected_class_id;
                    $student_array[$key]["section_id"] = $selected_section_id;

                    // var_dump($student_array[$key]["institute_id"]);
                    // var_dump($student_array[$key]["year"]);
                    // var_dump($student_array[$key]["class_id"]);
                    // var_dump($student_array[$key]["section_id"]);
                }





                // $req_headers = array('Accept' => 'application/json');
                $h2 = [];
                $h2 = $headers;

                $broken_line_number = 0;
                $flag = 0;
                $broken_line_status = "";
                // var_dump($headers);
                // var_dump($student_array);

                //Unirest\Request::timeout(200);
                foreach ($student_array as $k=>$student){
                    $headers = array('Accept' => 'application/json');
                    $encode_json = Unirest\Request\Body::Form($student);

                    $response = Unirest\Request::post(config('app.server_url').'bulk/import/student', $headers, $encode_json);
                    if (!$response->body->success){
                        $broken_line_number = $k;
                        $flag = $broken_line_number - 1;
                        // echo "$broken_line_number Message: $response->body->message";
                        break;

                    }
                    // else
                    // {
                    //    $inserted++;
                    //   echo $inserted;
                    // }

                    // var_dump(json_decode($response->raw_body,true));

                    // echo $encode_json;
                }


                if($broken_line_number == 0 && $flag==0){
                    return redirect('/bulkInputStudent')->with('status', 'File is successfully uploaded. Please check the student list.');
                }

                else if($broken_line_number == 1 && $flag==0){
                    return redirect('/bulkInputStudent')->with('status3', 'File can not be uploaded at all !');
                }
                else {


                    $broken_line_status = "File could not be uploaded completely ! Just $flag lines data has been uploaded. Please check the student list.";
                    // echo $broken_line_status;
                    return redirect('/bulkInputStudent')->with('status2', $broken_line_status);
                }



                // if (Storage::delete($url)) {

                //}
                //var_dump($student_array);
            }
        }



        
      }
      public function bulkInputStudent(){
          $authentication = session()->get('authentication');
          if(is_null($authentication)){
              return redirect('/');
          }
          else {
              $institute_select = session()->get('institute_id');
              if(is_null($institute_select)){
                  return redirect('/select_institute')->with('status','Please select school to go ahead');
              }
              else{
                  return view('frontend.bulk-input-student');
              }
          }
      }



    public function bulkOutputStudentJson($a){
        $st_arr = $a;
       // $hdrs = $b;
       //  var_dump($hdrs);
         var_dump($st_arr);



    }



}
?>
