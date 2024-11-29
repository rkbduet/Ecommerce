<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use App\Models\Backend\Category;
use App\Models\Backend\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
     //   return $products->category->name;
      return view('backend.pages.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::where('status',1)->get();
        $units=Units::where('status',1)->get();
        return view('backend.pages.product.create')->with(['categories'=> $categories, 'units'=> $units]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'product_name' => 'required|unique:products|max:255',
            'product_code' => 'required|unique:products|max:255',
            'category_id' => 'required',
            'stock_quantity' => 'required|numeric',
            'alert_quantity' => 'required|numeric',
            'cost_price' => 'required',
            'sell_price' => 'required',
            'unit_id' => 'required',
            'description' => 'max:255',
            
        ]);

       
        $product= new Product;

        $product->product_name=$request->product_name;
        $product->product_code=$request->product_code;
        $product->category_id=$request->category_id;
        $product->stock_quantity=$request->stock_quantity;
        $product->alert_quantity=$request->alert_quantity;
        $product->cost_price=$request->cost_price;
        $product->sell_price=$request->sell_price;
        $product->unit_id=$request->unit_id;
        $product->description=$request->description;
        $product->image='path';
        $product->created_by=Auth::user()->name;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
