<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenController extends Controller
{
    public function index()
    {
        $newArrivals = Product::where('category', 'Men')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $topSelling = Product::where('category', 'Men')
            ->orderBy('sales_count', 'desc')
            ->take(5)
            ->get();

        return response()->json([
            'newArrivals' => $newArrivals,
            'topSelling' => $topSelling,
        ]);
    }
}
