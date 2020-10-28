<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create-invoice', function () {
    return view('create-invoice');
});


Route::get('/newuser', function () {
    return view('newuser');
});





Route::get('/fee/make-payment', function () {
    return view('inc.newfeepayment');
});


Route::get('/staff', function () {
    return view('staff');
});

Route::get('/payments', function () {
    return view('payments');
});


Route::get('/print/receipt', function () {
    return view('printfeesreceipts');
});

Route::get('/payments/payment-list', function () {
    return view('paymentlist');
});


Route::get('/staff/profile/sendmessage', function () {
    return view('sendmail');
});



Route::get('/dashboard/librarystore', function () {
    return view('librarystore');
});


Route::get('/dashboard/send-message', function () {
    return view('sendmessage');
});


Route::get('/dashboard/student/profile/result', function () {
    return view('resultsdisplay');
});


Route::get('/dashboard-permission', function () {
    return view('settings.permissions');
});

Route::get('/dashboard-general-settings', function () {
    return view('settings.general-settings');
});


Route::get('/staff/edit', function () {
    return view('editstaff');
});

Route::get('/dashboard/new-leave', function () {
    return view('add-leave');
});


Route::get('/dashboard/canteen', function(){
        return view('canteen');

});


Route::get('/add-departments', function(){
        return view('add-department');

});

Route::get('/edit-department', function(){
        return view('edit-department');

});







// update Routes


Route::get('/dashboard/attendance/student','AttendanceController@index');

Route::get('/dashboard/settings/salary','SalarySettingController@index');


Route::post('/level', 'LevelController@store')->name('insertlevel');

Route::get('/class/delete/{id}', 'ProgrammeController@destroy');
Route::post('/add-programme', 'ProgrammeController@store')->name('classinsert');
Route::post('/add-programme/{id}', 'ProgrammeController@update');
Route::get('/dashboard/section-classes', 'ProgrammeController@index');

Route::post('/add-section/programmes','SectionController@store')->name('insertsection');
Route::get('/section/delete/{id}','SectionController@destroy');

Route::post('/add-section', 'ProgrammeController@store');
Route::get('/class/edit-class/{id}', 'ProgrammeController@edit');


Route::post('/edit/add-assignment/{id}', 'AssignmentController@update');
Route::get('/dashboard/assignment', 'AssignmentController@assignmentview');

Route::get('/assignment/edit/{id}', 'AssignmentController@show');

Route::post('/add-assignment', 'AssignmentController@store');

Route::get('/dashboard/all-assignments', 'AssignmentController@index');

Route::get('/delete/assignment/{id}', 'AssignmentController@destroy');

Route::get('/student/profile/update',function(){
    return view('studentprofileupdate');
});

Route::get('/staff/profile/updates',function(){
    return view('updates.staffupdate');
});


Route::get('/welcome',function(){
    return view('welcome');
});


Route::get('/add-questions',function(){
    return view('questions');
});

Route::get('/edit-exams',function(){
    return view('edit-exams');
});


Route::get('/all-question-page',function(){
    return view('all-question-page');
});


Route::get('/exams-list',function(){
    return view('exams-list');
});

Route::get('/fee-grouping',function(){
    return view('fee-grouping');
});

Route::get('/each-questionpage',function(){
    return view('each-questionpage');
});


Route::get('/dashboard/academic-year', 'AcademicYearController@index');
Route::post('insert-academic', 'AcademicYearController@addAcademic')->name('postinsert');
Route::get('/academic/delete/{id}','AcademicYearController@destroy');

Route::post('/add-zoom-class', 'ZoomLessonController@store');
Route::get('/dashboard/live-class-room/', 'ZoomLessonController@show');

Route::get('/live-class/remove/{id}', 'ZoomLessonController@destroy');

Route::get('/send-class-notification/{id}', 'ZoomLessonController@ZoomClassNotification');


Route::get('/allusers', 'DepartmentController@allusers');

// Controllers

Route::post('/add-leave', 'LeaveController@store');
Route::get('/delete/leave/{id}', 'LeaveController@destroy');
Route::get('/dashboard/leaves', 'LeaveController@show');
Route::get('/Edit/add-leave/{id}', 'LeaveController@edit');
Route::get('/approve/pending/{id}','LeaveController@changeToPending');
Route::get('/approve/approved/{id}','LeaveController@changeToPending');
Route::get('/approve/new/{id}','LeaveController@changeToPending');
Route::get('/approve/declined/{id}','LeaveController@changeToPending');

Route::get('/dashboard/sms-portal/create', 'SmsPortalController@index');
Route::get('/profile/message/{std_id}', 'SmsPortalController@student_msg');
Route::post('/allcontacts', 'SmsPortalController@sendparent_sms');
Route::post('/send-sms/bulk','SmsPortalController@bulk_sms');

Route::post('/student-sms','SmsPortalController@send_student');
Route::post('/send-sms','SmsPortalController@_sendSms');
Route::get('/dashboard/sent-message','SmsPortalController@sentMessage');

Route::post('/submit-answer/{id}', 'CourseController@answer');
Route::get('/add-courses','CourseController@index');

Route::get('/delete/exams/{course_code}', 'CourseController@delete');

Route::get('/exams-list', 'CourseController@diaplayCourses');

Route::get('/display/exams/{course_code}/{course_semester}','CourseController@showQuestions');
Route::get('/solve/exams/{id}/{course_name}','CourseController@onebyoneQuestion')->name('questionpage');

Route::post('/add-new-exams','CourseController@register');

Route::post('/add-new-exams','CourseController@register');
Route::get('/edit-exams/{course_code}','CourseController@getCourse');

Route::get('/question/add/{course_code}','CourseController@toQuestions');


Route::post('/add-new-question','CourseController@addQuestion');

Route::get('/edit/library/{library}','LibraryController@getlibrary');

Route::get('dashboard/add-to-library','LibraryController@index');
Route::get('/filter/class','StudentRegister@filter');
Route::get('/promotion/filter','StudentRegister@promotion');
Route::post('/promotion','StudentRegister@savepromo');

// working on today

Route::post('/dashboard/update/payment/{id}','PaymentController@updatefee');
Route::get('/fee-grouping/{std_id}','StudentRegister@feegrouping');

Route::post('/importdata', 'ResultsController@import_results');
Route::get('/student/result', 'ResultsController@index');

Route::post('/savefee', 'SettingsController@storeFee');


Route::get('/dashboard-settings', 'SettingsController@index');

Route::post('/schoolinfo/save', 'SettingsController@schoolinfo');

Route::post('/update-school-info/{id}','SettingsController@updateSchoolInfo');


Route::get('/dashboard/payroll', 'staffController@saralist');

Route::get('staff/edit/{staff_id}','staffController@updateStaff');



Route::get('/showsalary','PaymentController@showsalary')->name('showsalary');
Route::post('/staff/profile/sendmessage', 'EmailController@sendmessagestaff');
Route::get('/dashboard/emails/inbox', 'EmailController@inbox');
Route::get('/dashboard/emails/sent', 'EmailController@sent');
Route::get('/dashboard/emails/draft', 'EmailController@draft');
Route::get('/dashboard/emails/trash', 'EmailController@trash');
Route::get('/dashboard/emails/starred', 'EmailController@starred');
Route::get('/staff/profile/sendmessage/{staff_id}', 'EmailController@sendmessage');
Route::get('/dashboard/compose-email', 'EmailController@index');

Route::post('/staff/submit', 'staffController@staff');
Route::get('/staff/{staff_id}', 'staffController@profile');

Route::get('/getsalary-amount/{amount}', 'SalaryController@amount');
Route::get('/staff/slip/{staff_id}', 'SalaryController@payslipmonth');
Route::get('/dashboard/salary', 'SalaryController@index');
Route::get('/delete/salary/{id}', 'SalaryController@destroy');

Route::get('/staff', 'staffController@getStaffList');
Route::get('/staff/delete/{staff}','staffController@destroystaff');
Route::post('/staff/salary','SalaryController@paystaff');
Route::get('/staff/staffprofile/payslip/{staff_id}','SalaryController@viewpay');


Route::post('/newuser/submit', 'usersController@submit');
Route::get('/dashboard/add-user', 'usersController@view');

Route::post('/register/new', 'usersController@create');


Route::post('dashboard/submit', 'EventController@submit')->name('eventinsert');
Route::get('/dashboard', 'EventController@getevent');
Route::get('/event/edit/{id}', 'EventController@edit');
Route::post('/dashboard/edit/{id}', 'EventController@saveedit');

Route::get('/editpayment/{id}/{std_id}','PaymentController@editpayment');
Route::get('/editpayment/print/{id}/{std_id}','PaymentController@print');
Route::post('/dashboard/student/pay/new', 'PaymentController@submitfeenew');
Route::post('/dashboard/student/pay', 'PaymentController@submitfee');
Route::post('/registerstudent','StudentRegister@registerstudent');
Route::get('/dashboard', 'StudentRegister@getStudents');
Route::get('/student-list', 'StudentRegister@getStudentList');
Route::get('/profile/update/{std_id}', 'StudentRegister@getStudentdetails')->name('updatestudent');
Route::post('/profile/{std_id}','StudentRegister@updatestudent');
Route::get('/dashboard/new-student', 'StudentRegister@index');

Route::get('/student/trash/{remove}','StudentRegister@removeStudent');
Route::post('/multiplerecordsdelete','StudentRegister@deleteAll');

Route::get('/users/{students}','StudentRegister@show');

Route::get('/delete/{std_id}','EventController@destroy');

Route::get('/payments','PaymentController@recentpayments');

Route::post('/addlibrary','LibraryController@addbook');

Route::get('/dashboard/librarystore','LibraryController@getbooks');

Route::get('library/delete/{library}','LibraryController@destroy');


Route::get('/delete/payment/{id}', 'PaymentController@deletepayment');
Route::get('/update/results/{id}', 'ResultsController@updateResult');
Route::post('/updateresults/{id}', 'ResultsController@saveupdatedResult');
Route::get('/deleteResults/{id}','ResultsController@deleteResults');


Route::post('/student/results/slip', 'ResultsController@insertResult');
Route::get('/student/resultshow/{std_id}', 'ResultsController@showResult');

Route::post('/department/new','DepartmentController@storeDepartment');
Route::get('/departments', 'DepartmentController@index');


Route::post('/update/{staff_id}', 'staffController@updateStaffprofile');
    
Route::get('/new/payment/{std_id}','PaymentController@firstpayment');

Route::post('/update/user/{student_reference}','usersController@updateAdminProfile');

Route::get('/edit-user','usersController@index');

Route::get('/department/delete/{department}', 'DepartmentController@delete');
Route::get('/edit-department/{department}', 'DepartmentController@edit_department');
Route::post('/edit-depart/{department}', 'DepartmentController@update_department');
Route::get('/withdraw/{std_id}', 'StudentRegister@withdraw');
Route::get('/remove/profile/{std_id}', 'StudentRegister@del_profile');

Route::post('/edit/{library}', 'LibraryController@savelibrary');
Route::post('/expense/add-new', 'ExpensesController@save');
Route::get('/delete/expense/{id}', 'ExpensesController@destroy');
Route::get('/dashboard/expenses', 'ExpensesController@index');
Route::get('/edit/expenses/{id}', 'ExpensesController@getEpenses');
Route::post('/expense/edit/{id}', 'ExpensesController@saveupdate');
Route::get('/dashboard/add-expenses', 'ExpensesController@addnew');

Route::get('/dashboard/fee-management/fee-type', 'FeeTypeController@index');
Route::delete('/dashboard/fee-management/feetype/delete/{id}', 'FeeTypeController@destroy');

Route::post('/fee-management/fee-type', 'FeeTypeController@store')->name('feetypeinsert');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




