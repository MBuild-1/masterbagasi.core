<?php

namespace App\Http\Livewire\Frontend\Category;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;




class View extends Component
{
    public $name, $products, $categories, $wishlistIsset, $quantityCount = 1, $inputBrands = [];
    protected $queryString = [
        'inputBrands' => ['except' => '', 'as' => 'brand'],
    ];


    public function mount($categories, $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    public function addToWishlist($product_id)
    {

        if (Auth::check()) {
            if (Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $wishlist = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
                $wishlist->delete();
            } else {
                $wishlist = new Wishlists();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $product_id;
                $this->wishlistIsset = Wishlists::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
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
        $this->products = Product::where('category_id', $this->categories->id)
            ->when($this->inputBrands, function ($q) {
                $q->whereIn('brand', $this->inputBrands);
            })
            ->where('status', '1')->get();
        return view('livewire.frontend.category.view', [
            'products' => $this->products,
            'categories' => $this->categories,

        ]);
    }
}
