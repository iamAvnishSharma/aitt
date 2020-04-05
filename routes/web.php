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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage' , function(){
    return view('manage.home');
})->name('manage');

Route::get('/manage/studentgroup' , function(){
    return view('manage.studentgroup');
});

Route::get('/manage/professor' , function(){
    return view('manage.professor');
});

Route::get('/manage/room' , function(){
    return view('manage.room');
});

Route::get('/manage/subject' , function(){
    return view('manage.subject');
});

Route::get('/manage/integration' , function(){
    return view('manage.integration');
});

Route::get('/tt/sview' , function(){

    $divs = DB::select('SELECT division FROM division_tt GROUP BY division');
    
    // print_r($divs);
    return view('tt.selectdiv', ['divs' => $divs]);
});

Route::get('/tt/student' , function(Request $request){
    $div = $request->input('div');

    $tt = DB ::select("SELECT * FROM division_tt WHERE division = '$div'");
    // print_r($tt);

    return view('tt.student', ['rows' => $tt, 'div' => $div]);
});

Route::get('/tt/fview' , function(){

    $divs = DB::select('SELECT teacher FROM teachers_tt GROUP by teacher');
    
    // print_r($divs);
    return view('tt.selectteacher', ['divs' => $divs]);
});

Route::get('/tt/faculty' , function(Request $request){
    $div = $request->input('div');

    $tt = DB ::select("SELECT * FROM teachers_tt WHERE teacher = '$div'");
    // print_r($tt);

    return view('tt.student', ['rows' => $tt, 'div' => $div]);
});


Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'FileController@importExportExcelORCSV'));
Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'FileController@importFileIntoDB'));
Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'FileController@downloadExcelFile'));


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
