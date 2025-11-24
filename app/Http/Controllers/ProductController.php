<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addDeta(){
       $allPro =  new Product();
       $allPro->Pro-name = 'Mobail';
       $allPro->price = 10000;
       return "inserted ";
    }
    public function ReadAll(){
        $pro = products::all();
        return $pro ;
    }
    public function filterRead(){
       $fil =  Product::select('name', Price)->get();
       return $fil;
    }
    public function if(){
       $ifw =  Product::select('name')->where('id' , '3')->get();
       return $ifw;
    }
    public function finde(){
        $fin = Product::select('name' , 'price')->find(1);
    }
    public function update(){
        $productUp = Product::find(2);
        $productUp->name = "Oringe";
        $productUp->price = 160;
        $productUp->update();
        return ("date Updated");
    }

}
