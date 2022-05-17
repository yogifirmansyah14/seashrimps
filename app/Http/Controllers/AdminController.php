<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
        $data = new Product;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('productimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;
        $data->category_id = $request->category_id;
        
        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function showproduct()
    {
        $data = Product::all();
        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted');
    }

    public function updateview($id)
    {
        $data = Product::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data = Product::find($id);

        $image = $request->file;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $data->image = $imagename;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;
        
        $data->save();

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }

    public function article()
    {
        return view('admin.article');
    }

    public function uploadarticle(Request $request) 
    {
        $data = new Article;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('articleimage', $imagename);

        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->excerpt = $request->excerpt;
        $data->body = $request->body;
        $data->image = $imagename;
        
        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
}
