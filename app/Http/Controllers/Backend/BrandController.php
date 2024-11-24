<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function AllBrand()
    {
        $brands = Brands::latest()->get();
        return view('admin.backend.brands.brand_all', compact('brands'));
    } // End method

    public function AddBrand()
    {

        return view('admin.backend.brands.brand_add');
    }

    public function Store(Request $request)
    {
        // Validation Form
        $request->validate([
            'brand_name' => 'required|max:150',
            'brand_slug' => 'required|unique:brands',
            'brand_logo' => 'nullable|mimes:png,jpg,webp',
            // 'brand_des' => 'required',
            // 'brand_status' => 'required',
        ]);
        if ($request->has('brand_logo')) {
            $file = $request->file('brand_logo');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'upload/brands/';
            $file->move($path, $filename);
        }

        // Database Query
        Brands::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => $request->brand_slug,
            'brand_logo' => $filename,
            // 'brand_des' => $request->brand_des,
            // 'brand_status' => $request->brand_status,
        ]);

        // Notification
        $notification = array(
            'message' => 'Category Create Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('brand.all')->with($notification);
    }
}
