<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return Inertia::render('Products/Index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Products/Create');
    }

    /**
     * Store a newly created product in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'size' => ['required'],
        ])->validate();

        Product::create($request->all());

        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing a product.
     *
     * @return Response
     */
    public function edit(Product $product)
    {
        return Inertia::render('Products/Edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @return Response
     */

    public function update($id, Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'size' => ['required'],
        ])->validate();

        Product::find($id)->update($request->all());
        return redirect()->route('products.index');
    }


    /**
     * Remove the specified product from storage.
     *
     * @return Response
     */

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
