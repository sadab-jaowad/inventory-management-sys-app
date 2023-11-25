<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
 
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = new Product();
    }
 

    /*
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        return view('product.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('product.create');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        product::create($input);
        return redirect('product')->with('flash_message', 'product Addedd!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = product::find($id);
        return view('product.show')->with('products', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = product::find($id);
        return view('product.edit')->with('products', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'Product Updated!');  
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!'); 
    }
}
?>