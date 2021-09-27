<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $name      = $request->input("film_name");
        $fool_file_name = $request->file('film_file');//Fool file name
        $org_name = $fool_file_name->getClientOriginalName();//Goes to DB
        $fileNameWithoutExt = pathinfo($org_name, PATHINFO_FILENAME);// File is without .mp4 or .jpg
        $fileExtension = $fool_file_name->getClientOriginalExtension();//getting only type of file. For example only ".mp4"
        $fileconvert = $name."_-_-_";
        $fileNameToStore = $fileconvert.time().".".$fileExtension;
        $path = $request->file('film_file')->storeAs('', $fileNameToStore);//Storing video file to storage

        \DB::insert('insert into film_row(film_id,film_name,film_file_name) values(?,?,?)',[null,$name,$fileNameToStore]);


        
       
        return redirect("/");
    }
}
