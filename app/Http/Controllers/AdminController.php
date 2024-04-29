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
    
        // Save the main image
        $filename = rand(00000, 99999) . "." . $request->file('main_image')->extension();
        $path = $request->file('main_image')->storeAs('image', $filename, 'public');
        $input['main_image'] = $path;
    
        // Create the product
        Product::create($input);
    
        // Flash success message to session
        Session::flash('success', 'Product added successfully.');
    
        return redirect()->back();
    }
    
}
