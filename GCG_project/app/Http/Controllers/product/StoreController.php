<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // public function __invoke(StoreRequest $request){
    //     $product=$request->validated();
    //     Product::create($product);
    //     return redirect()->route('products.index');
    // }
    public function __invoke(Request $request){
        Product::create($request->all());
        return redirect()->route('products.index');
    }
}
