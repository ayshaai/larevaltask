<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// type this to call product model path
use App\Product;

class ProductController extends Controller
{
    function create(Request $request){

//to bring all-----return $request;
//to bring things only
//return $request->p_name;

//to validate request of empty data
$request->validate([
'p_name'=> 'required',
'p_price'=> 'required',
//image required png type or try later any extenions 
'myimage'=> 'required|mimes:png'


]);

//to send data to another view
$image=$request->myimage;
//to avoid same image name for uploading
$imageFileName=time(). "." .$image->extension();
//to move upload image to folder
$image->move(public_path('images'),$imageFileName);

/*
$data['pName']=$request->p_name;
$data['pPrice']=$request->p_price;

to connect to database to store data
*/
$productName=$request->p_name;
$productPrice=$request->p_price;
$productImage=$imageFileName;

//to store data in database
$myproduct= new Product;
$myproduct->name=$productName;
$myproduct->price=$productPrice;
$myproduct->img=$productImage;
$myproduct->save();

//return "Record stored";
//to return back to page
return back();
}
//return view('showproduct')->with($data);
   
    function show(){
        //show all products
$data['products']=Product::all();
//this show json file
//return $products;

//show in page
return view('showproduct')->with($data);

    }

}
