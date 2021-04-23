<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\ServicesSubcategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $subcategories = Subcategory::all();
     
        $services = $this->isFilter($request);
        $categories = Category::all();
     
        return view('home', compact('services', 'categories', 'subcategories'));
    }

    /**
     * Filter for search
     *
     * @param Request $request
     * @return void
     */
    protected function isFilter(Request $request)
    {
        if(isset($request->subcategory) && count($request->subcategory) > 0) {
            return ServicesSubcategories::with('service', 'subcategory')->get();
        }

        return Service::with('user', 'category')->paginate(5);
    }
}
