<?php

namespace App\Http\Livewire\Frontend\Brand;

use Livewire\Component;
use App\Models\Product;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;


class View extends Component
{
    public $products, $brands, $quantityCount = 1, $inputCategories = [];
    protected $queryString = [
        'inputCategories' => ['except' => '', 'as' => 'category'],
    ];
    public function mount($brands, $products)
    {
        $this->brands = $brands;
        $this->products = $products;
    }
    public function addToWishlist($product_id)
    {

        if (Auth::check()) {
            if (Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $wishlist = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $wishlist->delete();
            } else {
                $wishlist = new Wishlists();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
                $wishlist->save();
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Wishlist berhasil ditambah, ',
                    'type' => 'success',
                    'status' => 200
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('message', [
                'text' => 'Login is required',
                'type' => 'warning',
                'status' => 401
            ]);
        }
    }


    public function render()
    {

        $this->products = Product::where('brand', $this->brands->name)
            ->when($this->inputCategories, function ($q) {
                $q->whereIn('category_id', $this->inputBrands);
            })
            ->where('status', '1')->get();
        return view('livewire.frontend.brand.view', [
            'products' => $this->products,
            'brands' => $this->brands,
        ]);
    }
}
