<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \Illuminate\Support\Facades\DB;


class Productcontroller extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        // dd($products);
        return view('userdashboard', compact('products'));

    }
}
