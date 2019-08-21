<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    
    
}
