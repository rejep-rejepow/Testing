<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('Product.index')->with([
            'products'=>$products,
        ]);
    }

    public function Category_progucts($category_id){
        $products=Product::where('category_id',$category_id)->get();
        return view('Product.category_products')->with([
            'products'=>$products,
        ]);
    }
    public function create(){
        return view('Product.create');
    }
    public function edit($product_id){
        $category= Category::all();
        $product= Product::findOrFail($product_id);
        return view('Product.edit')->with([
            'category'=>$category,
            'product'=>$product,
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products')->with([
            'success'=>' '.$product->name.' created',
        ]);
    }
    public function update($product_id,Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $product = Product::findOrFail($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products')->with([
            'success'=>'редактирование product',
        ]);
    }
    public function delete($product_id){
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('products')->with([
            'success'=> $product->name.' deleted',
        ]);
    }


}
