<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brands;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\Country;
use App\Models\Hastag;
use App\Models\HomeVideo;
use App\Models\Product;
use App\Models\ProductHastags;
use App\Models\Province;
use App\Models\Wishlists;
use Illuminate\Http\Request;


class HomeController extends Controller
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

    public function search(Request $request)
    {

        if ($request->has('search')) {
            $product_search = Product::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('brand', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->get();
            return view('home.search', compact('product_search', 'request'));
        }
    }

    public function cargo(Request $request)
    {
        if ($request->has('cargo_country')) {
            $country = Country::where('id', $request->cargo_country)->first();
            if ($country) {
                $cargo =  $country->cargo()->get();
            }
            return view('home.cargo', compact('country', 'cargo'));
        }
    }

    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brands::all();
        $hastags = ProductHastags::where('hastags_id', '3')->first();
        $masakanibu = ProductHastags::where('hastags_id', '3')->get();
        $viral = ProductHastags::where('hastags_id', '1')->get();
        $kehangatan = ProductHastags::where('hastags_id', '6')->get();
        $rekomendasi = ProductHastags::where('hastags_id', '7')->get();
        $kerajinan = Hastag::where('id', '9')->first();
        $dapur = Hastag::where('id', '8')->first();
        // dd($dapur);
        $banners = Banner::all();
        $countries = Country::all();
        $maps = Province::all();
        return view('home', compact('products', 'categories', 'brands', 'hastags', 'banners', 'masakanibu', 'countries', 'maps', 'viral', 'kehangatan', 'rekomendasi', 'kerajinan', 'dapur'));
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

    public function province($province_slug)
    {

        $province = Province::where('slug', $province_slug)->first();
        if ($province) {
            $products = $province->product()->get();
            return view('province.province', compact('province', 'products'));
        } else {
            return redirect()->back();
        }
    }
    public function productProvince($province_slug, $product_slug)
    {
        $province = Province::where('slug', $province_slug)->first();
        if ($province) {
            $products = $province->product()->where('slug', $product_slug)->first();
            if ($products) {
                return view('province.details', compact('province', 'products'));
            } else {
                return redirect()->back();
            }
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
    public function hastag($hastag_slug)
    {
        $hastag = Hastag::where('slug', $hastag_slug)->first();
        if ($hastag->name == "Dapur") {
            return view('hastag.hastag', compact('hastag'));
        }
        if ($hastag->name == "Kerajinan") {
            return view('hastag.hastag-kerajinan', compact('hastag'));
        }
    }
}
