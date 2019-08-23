<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feature;    // 追加

class FeaturesController extends Controller
{
    //All Featuresへ移動
    public function showAll()
    {
        

        return view('features.showAll');
    }
    
    //New Featureへ移動
    public function showNew()
    {
        $feature = new Feature;

        return view('features.showNew',['feature' => $feature]);
    }
    
    // Feature新規登録処理
    public function store(Request $request)
    {
        $feature = new Feature;
        $feature->feature = $request->feature;
        $feature->user_id = \Auth::id();
        $feature->save();
        
        return redirect('/');
    }
    
}
