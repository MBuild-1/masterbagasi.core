<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Hastag;
use App\Models\Product;
use App\Models\ProductHastags;
use App\Models\ProductImages;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;




class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = Product::all();
        if ($request->has('search')) {
            $product = Product::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('brand', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(10);
        } else {

            $product = Product::orderBy('id', 'desc')->paginate(10);
        }
        return view('dashboard.products.index', compact('product', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brands::all();
        $hastags = Hastag::all();
        $maps = Province::all();
        return view('dashboard.products.products_add', compact('categories', 'brands', 'hastags', 'maps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'province_id' => 'nullable',
            'brand' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'quantity' => 'required',
            'weight' => 'required',
            'trending' => 'nullable',
            'status' => 'nullable',
            'meta_keyword' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'image' => 'required',

        ]);
        $category = Category::find($request->category_id);

        $product = $category->Product()->create([
            'category_id' => $request->category_id,
            'province_id' => $request->province_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'brand' => $request->brand,
            'description' => $request->description,
            'original_price' => $request->original_price,
            'selling_price' => $request->selling_price,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '2',
            'meta_keyword' => $request->meta_keyword,
            'meta_tittle' => $request->meta_tittle,
            'meta_description' => $request->meta_description,

        ]);
        if ($request->hasFile('image')) {
            $i = 1;
            foreach ($request->file('image') as $imageFile) {
                $extention = $imageFile->getClientOriginalExtension();
                $filename = date('YmdHi') . $i++ . "." . $extention;
                $imageFile->move(public_path('image/uploads/products/'), $filename);
                $product->ProductImages()->create([
                    'product_id' => $product->id,
                    'image' =>  $filename,
                ]);
            }
        }
        if ($request->hastags) {
            foreach ($request->hastags as $hastag) {
                $product->ProductHastags()->create([
                    'product_id' => $product->id,
                    'hastags_id' => $hastag,
                    'hastag_status' => $request->hastags == true ? '1' : '0',
                ]);
            }
        }

        return redirect('admin/products')->with('success', 'Data successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brands::all();
        $product_hastag = $product->ProductHastags->pluck('hastags_id')->toArray();
        $hastags = Hastag::whereNotIn('id', $product_hastag)->get();
        $maps = Province::all();

        return view('dashboard.products.products_update', compact('product', 'categories', 'brands', 'hastags', 'maps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'category_id' => 'required',
            'province_id' => 'nullable',
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'quantity' => 'required',
            'weight' => 'required',
            'trending' => 'nullable',
            'status' => 'nullable',
            'meta_keyword' => 'required',
            'meta_tittle' => 'required',
            'meta_description' => 'required',
            'image' => 'nullable',

        ]);

        $product = Product::find($id);
        if ($product) {
            $product->update([
                'category_id' => $request->category_id,
                'province_id' => $request->province_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'brand' => $request->brand,
                'description' => $request->description,
                'original_price' => $request->original_price,
                'selling_price' => $request->selling_price,
                'quantity' => $request->quantity,
                'weight' => $request->weight,
                'trending' => $request->trending == true ? '1' : '0',
                'status' => $request->status == true ? '1' : '2',
                'meta_keyword' => $request->meta_keyword,
                'meta_tittle' => $request->meta_tittle,
                'meta_description' => $request->meta_description,

            ]);
            if ($request->hasFile('image')) {
                $i = 1;
                foreach ($request->file('image') as $imageFile) {
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = date('YmdHi') . $i++ . "." . $extention;
                    $imageFile->move(public_path('image/uploads/products/'), $filename);
                    $product->ProductImages()->create([
                        'product_id' => $product->id,
                        'image' =>  $filename,
                    ]);
                }
            }
            if ($request->hastags) {
                foreach ($request->hastags as $hastag) {
                    $product->ProductHastags()->create([
                        'product_id' => $product->id,
                        'hastags_id' => $hastag,
                        'hastag_status' => $request->hastags == true ? '1' : '0',
                    ]);
                }
            }

            return redirect('admin/products')->with('success', 'Data successfully Updated');
        } else {
            return redirect('admin/products')->with('message', 'Data Failed Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $path = 'image/uploads/products/';
        foreach ($product->ProductImages as $image) {
            if (File::exists($path . $image->image)) {
                File::delete($path . $image->image);
            }
        }
        $product->delete();
        return redirect()->back()->with('success', 'Success Deleted Data Product');
    }

    public function destroyImage($id)
    {
        $image = ProductImages::find($id);
        $path = 'image/uploads/products/' . $image->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $image->delete();
        return redirect()->back()->with('success', 'Successfully Deleted Image Product');
    }
    public function destroyHastag($id)
    {
        $hastag = ProductHastags::find($id);
        $hastag->delete();
        return response()->json(['success' => 'Product Hastag Deleted']);
    }
}
