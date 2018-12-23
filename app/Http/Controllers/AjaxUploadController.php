<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;






class AjaxUploadController extends Controller
{
    //
    function action(Request $request)
    {

    	$path = $request->file('file')->store('data');
        Storage::setVisibility($path,'public');
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
                if (count($data) === 24) {
         			for ($x = 0;$x<count($headers[0]);$x++){
                        $student_array[$key][$headers[0][$x]] = $data[$x];
                        }
                }
            }
        }

      	/*$extension = $request->file('file')->getClientOriginalExtension();
        $dir = 'uploads/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($dir, $filename);*/
      echo json_encode(['size'=>count($student_array),'student'=>$student_array]);
    }
}
