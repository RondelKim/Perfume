<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomepageController extends Controller
{
    public function index()
    {
        // Fetch New Arrivals (latest products)
        $newArrivals = Product::orderBy('created_at', 'desc')->take(5)->get();

        // Fetch Top Selling Products (assuming a 'sales_count' column exists)
        $topSelling = Product::orderBy('sales_count', 'desc')->take(5)->get();

        // Return as JSON for React frontend
        return response()->json([
            'newArrivals' => $newArrivals,
            'topSelling' => $topSelling,
        ]);
    }
}
