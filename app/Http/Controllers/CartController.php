<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function shop()
    {
        $products = Product::all();
        return view('cart.shop', compact('products'));
    }


    /**
     * Display a listing of the resource.
     */
    public function cart()
    {
        return view('cart.cart');
    }

    /**
     * Display a listing of the resource.
     */
    public function addToCart($productId)
    {
        // https://github.com/mindscms/laravelshoppingcart
        $product = Product::findOrFail($productId);
        // Cart::destroy();
        
        Cart::instance('cart')->add([
            'id' => $product->id, 
            'name' => $product->name, 
            'qty' => 1, 
            'price' => $product->price, 
            'options' => [
                'image' => $product->image
            ]
        ]);


        return redirect()->back()->with('success', 'Product added to cart.');
    }
   

    /**
     * Display a listing of the resource.
     */
    public function qtyIncrease($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $updatedQty = $product->qty + 1;
        Cart::update($rowId, $updatedQty);
        return redirect()->back()->with('success', 'Product quantity updated.');
    }

    /**
     * Display a listing of the resource.
     */
    public function qtyDecrease($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $updatedQty = $product->qty - 1;
        if ($updatedQty > 0) {
            Cart::update($rowId, $updatedQty);
        }
        return redirect()->back()->with('success', 'Product quantity updated.');
    }

    /**
     * Display a listing of the resource.
     */
    public function removeItem($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back()->with('success', 'Product removed from the cart.');
    }

    /**
     * Display a listing of the resource.
     */
    public function wishlistItem($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        Cart::instance('wishlist')->add($product->id, $product->name, $product->qty, $product->price, ['image' => $product->image]);
        return redirect()->back()->with('success', 'Product added to the wishlist.');
    }

    /**
     * Display a listing of the resource.
     */
    public function addToWishlist($productId)
    {
        $product = Product::findOrFail($productId);
        Cart::instance('wishlist')->add($product->id, $product->name, 1, $product->price, ['image' => $product->image]);
        return redirect()->back()->with('success', 'Product added to the wishlist.');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
