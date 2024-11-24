<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function AllCat()
    {
        $cat = Categories::latest()->get();
        return view('admin.backend.categories.categories_all', compact('cat'));
    } // End method

    public function AddCat()
    {

        return view('admin.backend.categories.categories_add');
    }

    //
    public function Store(Request $request)
    {
        // Validation Form
        $request->validate([
            'categoryname' => 'required|max:150',
            'image' => 'nullable|mimes:png,jpg,webp',
            'slug' => 'required|unique:categories',
        ]);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'upload/categories/';
            $file->move($path, $filename);
        }

        // Database Query
        Categories::insert([
            'category_name' => $request->categoryname,
            'category_photo' => $filename,
            'slug' => $request->slug,
        ]);

        // Notification
        $notification = array(
            'message' => 'Category Create Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('categories.all')->with($notification);
    }

    //
    public function EditCat($id)
    {
        $cat = Categories::findOrFail($id);
        // $temp = $cat->has('category_photo');

        return view('admin.backend.categories.categories_edit', compact('cat'));
    }

    public function Update(Request $request)
    {
        $catId = $request->id;
        Categories::findOrFail($catId)->update([
            'category_name' => $request->categoryname,
            'category_photo' => "",
            'slug' => $request->slug,
        ]);


        // $request->validate([
        //     'categoryname' => 'required|max:150',
        //     'image' => 'nullable|mimes:png,jpg,webp',
        //     'slug' => 'required',
        // ]);

        // $category = Categories::findOrFail($catId);
        // $img = $category->category_photo;

        // if ($request->has('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();

        //     $filename = time() . '.' . $extension;

        //     $path = 'upload/categories/';
        //     $file->move($path, $filename);

        //     if ($img) {
        //         $this->removeFileIfExists('upload/categories/' . $category->category_photo);
        //     }
        // }

        // // Database Query
        // $category->update([
        //     'category_name' => $request->categoryname,
        //     // 'category_photo' => $filename,
        //     'slug' => $request->slug,
        // ]);

        return view('admin.backend.categories.categories_edit');
    }

    //
    public function DeleteCat(int $id)
    {
        $cat = Categories::findOrFail($id);
        $img = $cat->category_photo;

        if ($img) {
            $this->removeFileIfExists('upload/categories/' . $cat->category_photo);
        }

        $cat->delete();

        return redirect()->route('categories.all');
    }

    public function Destroy()
    {
    }


    // Function private to remove file by path
    private function removeFileIfExists($path)
    {
        File::delete($path);
    }
}
