<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

use Session;

class ProductController extends Controller
{
    public function showCreateProductPage(){
        $page_title = 'Create Product';
        $brands = Brand::get();

        return view('backend.product.createProduct', \get_defined_vars());
    }

    public function saveProduct(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'description' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = new Product();

        $originalImage = $request->file('image');
        
        $imageName = uniqid().time().'.'.$originalImage->getClientOriginalExtension();
        $imagePath = 'frontend/images/products/';
        $originalImage->move($imagePath, $imageName);
        $imageFullPath = $imagePath.$imageName;

        $product->image =  $imageFullPath;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;

        $product->save();

        Session::flash('success', 'Product added successfullly');

        return redirect() -> route('admin.product.manage');
    }

    public function showManageProductPage(){
        $page_title = 'Manage Product';
        $products = Product::get();
        // $brands = Brand::get();

        return view('backend.product.manageProduct', \get_defined_vars());
    }

    public function showEditProductPage($id){
        $page_title = 'Edit Product';
        $product = Product::find($id);
        $brands = Brand::get();

        return view('backend.product.editProduct', \get_defined_vars());
    }

    public function updateEdit(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'description' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::find($request->product_id);

        $originalImage = $request->file('image');
        
        $imageName = uniqid().time().'.'.$originalImage->getClientOriginalExtension();
        $imagePath = 'frontend/images/products/';
        $originalImage->move($imagePath, $imageName);
        $imageFullPath = $imagePath.$imageName;

        $product->image =  $imageFullPath;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->status = $request->status;

        $product->update();

        Session::flash('success', 'The Product has been updated successfullly');
 
        return redirect()->route('admin.product.manage');
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        Session::flash('success', 'Information has been deleted successfullly');

        return redirect()->route('admin.product.manage');
    }
}
