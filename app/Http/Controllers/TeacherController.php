<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
  public function insert(){
      DB::table("teachers")->insert([
       [
         "name"=> "Shukria",
        "lastName"=> "Sharifi" 
       ],
       [
         "name"=> "Rahila",
        "lastName"=> "Sharifi" 
       ],
       [
         "name"=> "Asifa",
        "lastName"=> "sharifi" 
       ],
       [
         "name"=> "Latifa",
        "lastName"=> "Rafi" 
       ],
    ]);
    return "Data Inserted";
  }
  public function readth(){
   $Allstudent= DB::table("teachers")->get();
  //  return view("teacher")->with('allst',$Allstudent);  
  return $Allstudent;
  }
}
