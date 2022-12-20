<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $data=product::where("name", "LIKE", '%' . request("search") . '%')->get();
      // dd($data);
        $data = product::all();
        
        $categories = category::all();

        if (count($data) == 0) {
            return "There is no product";
        } else {
            return view("product-4cols", compact('data'),compact('categories'));
        }
    }
    

    public function filter(Request $request)
    {
        //  $category = category::where('category_id',$request)->get();
        // $data = product::where('categry_id',$category->id)->get();
        // $categories = category::all();
        // return redirect()->route("product-4cols", compact('data'), compact('categories'));

    

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

        // $request->validate([
        //     'image' => 'required|image|mimes:png,jpg,jpeg|max:5000'
        // ]);
        // $request->validate([
        //     'name' => 'required',
        // ]);

        // ensure the request has a file before we attempt anything else.
        // dd($request->hasFile('product_image'));
        // dd($request->hasFile('image'));
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


        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $product = product::where('id', $product->id)->first();
        // dd($product);

        return view('product')->with(['product' => $product]);
    }

    // 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        

        return view('admin.products.update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
       ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
