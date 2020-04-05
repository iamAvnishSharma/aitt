<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;

class FileController extends Controller
{
    //
    public function importExportExcelORCSV(){
        return view('file_import_export');
    }

    public function importcrIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['cr' => $value->cr, 'division' => $value->division, 'subject' => $value->subject];
                }
                if(!empty($arr)){
                    \DB::table('cr_input')->truncate();
                    \DB::table('cr_input')->insert($arr);
                    // dd('Insert Record successfully.');
                    return back()->with('alert', 'Inserted successfully!');
                }
            }
        }
        // dd('Request data does not have any files to import.'); 
        return back()->with('alert', 'Request data does not have any files to import.');     
    } 

    public function importteacherIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['teacher' => $value->teacher, 'subject' => $value->subject, 'divisions' => $value->divisions];
                }
                if(!empty($arr)){
                    \DB::table('teachers_input')->truncate();
                    \DB::table('teachers_input')->insert($arr);
                    // dd('Insert Record successfully.');
                    return back()->with('alert', 'Inserted successfully!');
                }
            }
        }
        // dd('Request data does not have any files to import.'); 
        return back()->with('alert', 'Request data does not have any files to import.');    
    }

    public function importdivisionsIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['division' => $value->division, 'subject' => $value->subject, 'hours_in_week' => $value->hours_in_week, 'combined' => $value->combined];
                }
                if(!empty($arr)){
                    \DB::table('division_input')->truncate();
                    \DB::table('division_input')->insert($arr);
                    // dd('Insert Record successfully.');
                    return back()->with('alert', 'Inserted successfully!');
                }
            }
        }
        // dd('Request data does not have any files to import.'); 
        return back()->with('alert', 'Request data does not have any files to import.');    
    } 


    public function downloadExcelFile($type){
        $products = Product::get()->toArray();
        return \Excel::create('expertphp_demo', function($excel) use ($products) {
            $excel->sheet('sheet name', function($sheet) use ($products)
            {
                $sheet->fromArray($products);
            });
        })->download($type);
    }   

}
