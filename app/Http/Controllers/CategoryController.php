<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = product::all();

        if (count($data) == 0) {
            return "There is no product";
        } else {
            return view("product-4cols", compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('test', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'name' => 'required|min:3|max:30',
        //     'description' => 'required|max:255'
        // ]);

        // if ($validated) {
        //     $data = new category();
        //     $data->name = $request->name;
        //     $data->description = $request->description;
        //     if ($data->save()) {
        //         return "Category Created";
        //     } else {
        //         return "Something went wrong";
        //     }
        // } else redirect("/");
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images2'), $imageName);


            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = product::create($request->except('_token', 'image') + ['image' => $imageName]);
            $product->image = $imageName;
            $product->save(); // Finally, save the record.
        } else {
            return "NO FILE IMAGE";
        }


        return redirect()->route('category.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //   $category = category::where('category_id', $category)->get();
        // $data = product::where('categry_id',$category->id)->get();
        // $categories = category::all();
        // return view("product-4cols", compact('data'), compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view("category.update", ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $category->name = $request->name;
        $category->description = $request->description;

        if ($category->save()) {
            return "Category Updated";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        if ($category->delete()) {
            return "Category deleted";
        }
    }
}
