<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function Read(){
        $deta = student::all();
        return view("student",["data"=>$deta]);
    }
    public function orderRed(){
       $st = DB::table("students")->orderBy("id","desc")->get();
       return $st;
    }
    public function update(){
        DB::table("students")->where("id",1)->update([
            "name"=>"Sara",
            "lastName"=>"sharifi"
        ]);
        return "updeted";
    }
    public function delete(){
        DB::table("students")->where("gender" , "m")->delete();
    }
}
