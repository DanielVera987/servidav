<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Subcategory;
use Illuminate\Http\Request;

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
        if($request->category) {
            $services = Service::with('user', 'category', 'services_subcategories')->ByCategory($request->category)->paginate(5)->withQueryString();
        }else{
            $services = Service::with('user', 'category', 'services_subcategories')->paginate(5);
        }

        $categories = Category::all();
        $subCategories = Subcategory::all();
        return view('home', compact('services', 'categories', 'subCategories'));
    }
}
