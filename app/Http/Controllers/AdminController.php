<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{


    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function users()
    {

        $user = User::all();
        return view('admin.pages.users', compact('user'));
    }


    public function product()
    {


        return view('admin.pages.product');
    }


    public function view_products(){


        $product = Product::all();
        return view('admin.pages.viewproducts',compact('product'));
    }


    public function store_product(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
            'available_quantity' => 'required',
            'product_price' => 'required',
            'main_image' => 'required|image', // Ensure main_image is an image
        ]);
    
        $input = $request->all();
    
    
        $filename = rand(00000, 99999) . "." . $request->file('main_image')->extension();
        $path = $request->file('main_image')->storeAs('image', $filename, 'public');
        $input['main_image'] = $path;

        Product::create($input);
    
        Session::flash('success', 'Product added successfully.');
    
        return redirect()->back();
    }
    


    public function edit_products(Request $request , $id){

        $product = Product::find($id);


        if($product){

            if($request->product_name){

                $product->product_name = $request->product_name;
            }


            if($request->product_category){

                $product->product_category =  $request->product_category;
            }

            if($request->available_quantity){
                $product->available_quantity = $request->available_quantity;
            }

            if($request->product_price){
                $product->product_price = $request->product_price;
            }

            if($request->product_description){
                $product->product_description = $request->product_description;
            }

            if($request->status){
                $product->status = $request->status;
            }

            $product->save();


            return redirect()->route('viewproducts');

        }
    }


    public function delete_product($id){

        $product = Product::find($id);
        $product->delete();


        return redirect()->route('viewproducts');
    }


    public function get_mens_products(){


        $mens_products = Product::where('product_category','Mens')->get();

        return view('website.mensproducts',compact('mens_products'));
    }
}
