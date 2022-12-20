<?php

namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
            $data = product::all();

            $categories = category::all();

            return view("admin.products.index", compact('data'), compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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


        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(product $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $admin)
    {
        $product = Product::findOrFail($admin->id);

        return view('admin.products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $admin)
    {
        $admin = product::find($admin);
        
        $admin->name = $request->name;
        $admin->description = $request->description;
        $admin->price = $request->price;
        $admin->category_id = $request->category_id;
        $admin->quantitiy = $request->quantitiy;
        $admin->image = $request->image;
        $admin->save();

        return redirect()->route('admin.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $admin)
    {
    
        $product = product::where('id', $admin->id);
        $product->delete();
        return redirect()->route('admin.index');
   
    }
}


