<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/', 'front_controller@login');
Route::get('/dashboard','front_controller@dashboard');
Route::get('/institute_list','front_controller@institute_list');
Route::get('/add_institution','front_controller@add_institution');
Route::get('/edit_institute','front_controller@edit_institute');
Route::get('/institution_settings','front_controller@institution_settings');
Route::get('/student_list','front_controller@student_list');
Route::get('/add_student','front_controller@add_student');
Route::get('/edit_student','front_controller@edit_student');
Route::get('/teacher_list','front_controller@teacher_list');
Route::get('/add_teacher','front_controller@add_teacher');
Route::get('/edit_teacher','front_controller@edit_teacher');
Route::get('/schedule_list','front_controller@schedule_list');
Route::get('/add_schedule','front_controller@add_schedule');
Route::get('/edit_schedule','front_controller@edit_schedule');
Route::get('/create_shift','front_controller@create_shift');
Route::get('/create_class','front_controller@create_class');
Route::get('/create_section','front_controller@create_section');
Route::get('/create_subject','front_controller@create_subject');
Route::get('/create_period','front_controller@create_period');
Route::get('/select_institute','front_controller@selectinstitute');
Route::get('/create_course','front_controller@create_course');
Route::get('/exam_type', 'front_controller@exam_type');
Route::get('/create_exam', 'front_controller@create_exam');
Route::get('/exam_schedule', 'front_controller@exam_schedule');
Route::get('/exam_papers', 'front_controller@exam_papers');
Route::get('/exam_paper_form', 'front_controller@exam_paper_form');

Route::get('/apitest',function(){
  return view('frontend.testview');
});


Route::view('/testUpload','test.testform');
Route::post('/store','front_controller@store');
Route::view('/bulkInputTeacher','frontend.bulk-input-teacher');

Route::get('/bulkInputStudent','front_controller@bulkInputStudent');
Route::post('/bulkOutputStudent','front_controller@bulkOutputStudent');
Route::post('/bulkOutputStudentJson/{$a}','front_controller@bulkOutputStudentJson');
Route::view('/showing_bulk_student','frontend.showing_bulk_student');


Route::view('/bulkInputResult','frontend.bulk-input-result');


Route::post('/create_shift', 'FormDataPushToApi@addshift');
Route::post('/create_class', 'FormDataPushToApi@addclass');
Route::post('/create_section', 'FormDataPushToApi@addsection');
Route::post('/create_course', 'FormDataPushToApi@addcourse');
Route::post('/add_institution', 'FormDataPushToApi@addinstitution');
Route::post('/create_subject', 'FormDataPushToApi@addsubject');
Route::post('/create_period', 'FormDataPushToApi@addperiod');
Route::post('/dashboard', 'FormDataPushToApi@login');
Route::post('/upload/csv', 'FormDataPushToApi@uploadCsv');
Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');
Route::post('/add_teacher', 'FormDataPushToApi@addteacher');
Route::post('/add_student', 'FormDataPushToApi@addstudent');
Route::post('/select_institute','Loginsession@selectinstitute');
Route::get('/class/{id}/section/all', 'FormDataPushToApi@getSection');
Route::get('/class/{id}/subject/all', 'FormDataPushToApi@getSubject');
Route::get('/class/{id}/course/all', 'FormDataPushToApi@getcourse');
Route::get('/class/{id}/courseforexam/all', 'FormDataPushToApi@getcourseexam');
Route::get('/class/{id}/course/schedule/all', "FormDataPushToApi@getSubject");
Route::get('/class/{id}/period/all', "FormDataPushToApi@getSection");


Route::get('/selectclass/{class_id}/{class_name}', 'Loginsession@selectclass');
Route::post('/selectclassforsubject','Loginsession@selectclassforsubject');
Route::get('/selectclassforcourse/{class_id}/{class_name}', 'Loginsession@selectclassforcourse');
Route::post('/selectclassforperiod', 'Loginsession@selectclassforperiod');
Route::post('/selectclassforlist', 'Loginsession@selectclassforlist');
Route::post('/selectclassforexam', 'Loginsession@selectclassforexam');
Route::post('/selectclassforschedule', 'Loginsession@selectclassforschedule');
Route::post('/logout', 'Loginsession@sessiondelete');

Route::post('/exam_type', 'FormDataPushToApi@examtype');
Route::post('/create-exam', 'FormDataPushToApi@addexam');
Route::post('/exam_schedule', 'FormDataPushToApi@examschedule');
Route::get('/exam_paper/{section_id}/{exam_id}','Loginsession@exam_papers');
Route::post('/exam_papers_form_data', 'FormDataPushToApi@exam_papers_form_data');


Route::post('/login', 'Loginsession@login');
Route::get('/show', 'Loginsession@show');
