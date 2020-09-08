<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

use Session;

class BrandController extends Controller
{
    public function showCreateBrandPage(){
        $page_title = 'Create Brand';

        return view('backend.brand.createBrand', \get_defined_vars());
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $brand = new Brand();

        $originalImage = $request->file('image');
        
        $imageName = uniqid().time().'.'.$originalImage->getClientOriginalExtension();
        $imagePath = 'frontend/images/brands/';
        $originalImage->move($imagePath, $imageName);
        $imageFullPath = $imagePath.$imageName;

        $brand->image =  $imageFullPath;
        $brand->name = $request->name;
        $brand->status = $request->status;

        $brand->save();

        Session::flash('success', 'Brand added successfullly');

        return redirect() -> route('admin.brand.manage');
    }

    public function showManageBrandPage(){
        $page_title = 'Manage Brand';
        $brands = Brand::get();

        return view('backend.brand.manageBrand', \get_defined_vars());
    }

    public function showEditBrandPage($id){
        $page_title = 'Edit Brand';
        $brand = Brand::find($id);

        return view('backend.brand.editBrand', \get_defined_vars());
    }

    public function updateEdit(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $brand = Brand::find($request->brand_id);

        $originalImage = $request->file('image');
        
        $imageName = uniqid().time().'.'.$originalImage->getClientOriginalExtension();
        $imagePath = 'frontend/images/brands/';
        $originalImage->move($imagePath, $imageName);
        $imageFullPath = $imagePath.$imageName;

        $brand->image =  $imageFullPath;
        $brand->name = $request->name;
        $brand->status = $request->status;

        $brand->update();

        Session::flash('success', 'The Brand has been updated successfullly');
 
        return redirect()->route('admin.brand.manage');
    }

    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();

        Session::flash('success', 'Information has been deleted successfullly');

        return redirect()->route('admin.brand.manage');
    }
}
