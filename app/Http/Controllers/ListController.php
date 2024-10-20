<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ListController extends Controller
{
    //

    public function index()
    {
        $product = Products::all();
        return response()->json($product);
    }
}
