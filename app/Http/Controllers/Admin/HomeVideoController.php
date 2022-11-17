<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Hastag;
use App\Models\HomeVideo;
use App\Models\Product;
use App\Models\ProductHastags;
use Illuminate\Http\Request;

class HomeVideoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products = Product::all();
        $categories = Category::all();
        $brands = Brands::all();
        $hastags = Hastag::where('status', '1')->first();

        return view('home', compact('products', 'categories', 'brands', 'hastags'));
    }


    public function category($category_slug)
    {
        $categories = Category::where('slug', $category_slug)->first();
        if ($categories) {
            $products = $categories->Products()->get();
            return view('category.category', compact('categories', 'products'));
        } else {
            return redirect()->back();
        }
    }

    public function product_category($category_slug, $product_slug)
    {
        $categories = Category::where('slug', $category_slug)->first();
        if ($categories) {
            $products = $categories->Products()->where('slug', $product_slug)->first();
            if ($products) {
                return view('category.details', compact('categories', 'products'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function brands($brand_slug)
    {
        $brands = Brands::where('slug', $brand_slug)->first();
        if ($brands) {
            $products = $brands->Products()->get();
            return view('brands.brands', compact('brands', 'products'));
        } else {
            return redirect()->back();
        }
    }

    public function product_brand($brand_slug, $product_slug)
    {
        $brands = Brands::where('slug', $brand_slug)->first();
        if ($brands) {
            $products = $brands->Products()->where('slug', $product_slug)->first();
            if ($products) {
                return view('brands.details', compact('brands', 'products'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function detailProduct()
    {
        return view('details.product.detail');
    }
}
