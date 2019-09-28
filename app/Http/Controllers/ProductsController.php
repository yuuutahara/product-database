<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;    // 追加
use App\Feature;    // 追加
use App\User;    // 追加

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
        $products = Product::orderBy('number')->paginate(100);
        
        return view('products.showList', [
            'products' => $products
        ]);
    }
    
    //Getへ移動
    public function showGet($request)
    {
        $products = Product::find($request);
        
        return view('products.showGet',[
            'products' => $products,
        ]);
    }
    
    //List2へ移動
    public function showList2(Request $request,$id)
    {
        $request->session()->put('id1', $id);
        $productId1 = $request->session()->get('id1');
        $product1 = Product::find($productId1);
        
        $products = Product::orderBy('number')->paginate(100);
        
        return view('products.showList2', [
            'products' => $products,
            'product1' => $product1,
        ]);
    }
    
    //Get2へ移動
    public function showGet2(Request $request,$id)
    {
        $productId1 = $request->session()->get('id1');
        $product1 = Product::find($productId1);
        
        $products = Product::find($id);
        
        return view('products.showGet2',[
            'products' => $products,
            'product1' => $product1,
        ]);
    }
    
    //List3へ移動
    public function showList3(Request $request,$id)
    {
        $productId1 = $request->session()->get('id1');
        $product1 = Product::find($productId1);
        
        $request->session()->put('id2', $id);
        $productId2 = $request->session()->get('id2');
        $product2 = Product::find($productId2);
        
        $products = Product::orderBy('number')->paginate(100);
        
        return view('products.showList3', [
            'products' => $products,
            'product1' => $product1,
            'product2' => $product2,
        ]);
    }
    
    //Get3へ移動
    public function showGet3(Request $request,$id)
    {
        $productId1 = $request->session()->get('id1');
        $product1 = Product::find($productId1);
        
        $productId2 = $request->session()->get('id2');
        $product2 = Product::find($productId2);
        
        $products = Product::find($id);
        
        return view('products.showGet3',[
            'products' => $products,
            'product1' => $product1,
            'product2' => $product2,
        ]);
    }
    
    //Inputへ移動、Productインスタンスを作る
    public function showInput()
    {
        $product = new Product;
        $addFeature1 = Feature::all()->pluck('feature','id');
        $addFeature2 = Feature::all()->pluck('feature','id');
        $addFeature3 = Feature::all()->pluck('feature','id');

        return view('products.showInput',[
            'product' => $product,
            'addFeature1' => $addFeature1,
            'addFeature2' => $addFeature2,
            'addFeature3' => $addFeature3
        ]);
    }
    
    // Product新規登録処理
    public function store(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|max:15',
        ]);
        
        $product = new Product;
        $product->user_id = \Auth::id();
        $product->number = $request->number;
        $product->propertyA = $request->input('propertyA', '');
        $product->propertyB = $request->input('propertyB', '');
        $product->propertyC = $request->input('propertyC', '');
        $product->propertyD = $request->input('propertyD', '');
        $product->propertyE = $request->input('propertyE', '');
        $product->save();
        //save後にfeatureを設定
        $product->features()->attach($request->addFeature1);
        $product->features()->attach($request->addFeature2);
        $product->features()->attach($request->addFeature3);
        
        return redirect('/');
    }
    
    //Editへ移動
    public function showEdit($id)
    {
        $product = Product::find($id);
        $addFeature1 = Feature::all()->pluck('feature','id');
        $addFeature2 = Feature::all()->pluck('feature','id');
        $addFeature3 = Feature::all()->pluck('feature','id');
        
        return view('products.showEdit',[
            'product' => $product,
            'addFeature1' => $addFeature1,
            'addFeature2' => $addFeature2,
            'addFeature3' => $addFeature3
        ]);
    }
    
    //Productを削除
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/list');
    }
    
    // Product更新
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'number' => 'required|max:15',
        ]);
        
        $product = Product::find($id);
        $product->user_id = \Auth::id();
        $product->number = $request->number;
        $product->propertyA = $request->propertyA;
        $product->propertyB = $request->propertyB;
        $product->propertyC = $request->propertyC;
        $product->propertyD = $request->propertyD;
        $product->propertyE = $request->propertyE;
        $product->save();
        //もともとのfeatureを削除
        $product->features()->detach();
        //新たにfeatureを設定
        $product->features()->attach($request->addFeature1);
        $product->features()->attach($request->addFeature2);
        $product->features()->attach($request->addFeature3);
        
        return redirect('/');
    }
}