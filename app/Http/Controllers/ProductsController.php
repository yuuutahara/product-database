<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;    // 追加

class ProductsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $products = $user->products()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'products' => $products,
            ];
        }
        
        return view('welcome', $data);
    }
    
    //Listへ移動
    public function showList()
    {
        

        return view('products.showList');
    }
    
    //Getへ移動
    public function showGet()
    {
        

        return view('products.showGet');
    }
    
    //Inputへ移動、Productインスタンスを作る
    public function showInput()
    {
        $product = new Product;

        return view('products.showInput',['product' => $product]);
    }
    
    // Product新規登録処理
    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|max:15',
        ]);

        $product = new Product;
        $product->number = $request->number;
        $product->feature_id = $request->feature_id;
        $product->propertyA = $request->propertyA;
        $product->propertyB = $request->propertyB;
        $product->propertyC = $request->propertyC;
        $product->propertyD = $request->propertyD;
        $product->propertyE = $request->propertyE;
        $product->save();

        return redirect('/');
    }
    
}
