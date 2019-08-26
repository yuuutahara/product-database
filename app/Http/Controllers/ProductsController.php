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
    
    //Listへ移動、Productとそれぞれの登録者、addFeatureを表示
    public function showList()
    {
        $products = Product::all();
        
        return view('products.showList', [
            'products' => $products
        //    'registrants' => $registrants
        ]);
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
        $product->propertyA = $request->propertyA;
        $product->propertyB = $request->propertyB;
        $product->propertyC = $request->propertyC;
        $product->propertyD = $request->propertyD;
        $product->propertyE = $request->propertyE;
        $product->save();

        $product->features()->attach($request->addFeature1);
        $product->features()->attach($request->addFeature2);
        $product->features()->attach($request->addFeature3);
        
        return redirect('/');
        
        
        
    }
    
}
