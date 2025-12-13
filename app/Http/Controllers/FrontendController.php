<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        // Get active categories with their active products
        $categories = ProductCategory::where('status', 1)
            ->with(['products' => function($query) {
                $query->where('status', 1);
            }])
            ->get();
        
        return view('frontend.home', compact('categories'));
    }

    public function sustainability()
    {
        return view('frontend.sustainability');
    }

    public function ethicalSourcing()
    {
        return view('frontend.ethical-sourcing');
    }

    public function manufacturingExcellence()
    {
        return view('frontend.manufacturing-excellence');
    }

    public function category($slug = null)
    {
        // Get all active categories for dropdown/navigation
        $categories = ProductCategory::where('status', 1)->get();
        
        // Find the requested category by slug (using name converted to slug)
        $currentCategory = null;
        $products = collect();
        
        if ($slug) {
            $currentCategory = ProductCategory::where('status', 1)
                ->whereRaw('LOWER(REPLACE(name, " ", "-")) = ?', [strtolower($slug)])
                ->first();
            
            if ($currentCategory) {
                $products = Product::where('product_category_id', $currentCategory->id)
                    ->where('status', 1)
                    ->get();
            }
        }
        
        return view('frontend.category', compact('categories', 'currentCategory', 'products', 'slug'));
    }

    public function about()
    {
        $sections = \App\Models\AboutSection::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
            
        $services = \App\Models\Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
            
        return view('frontend.about', compact('sections', 'services'));
    }
}
