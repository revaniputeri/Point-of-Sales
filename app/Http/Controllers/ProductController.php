<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showCategory($category)
    {
        // validasi
        $allowedCategory = [
            'food-baverage',
            'beauty-health',
            'home-care',
            'baby-kid'
        ];

        if (!in_array($category, $allowedCategory)) {
            abort(404);
        }

        return view('products', ['category' => $category]);
    }
}
