<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Store;
use App\Models\ScrapingProduct;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $storeCount = Store::count();
        $scrapingProductCount = ScrapingProduct::count();
        $usersCount = User::count();
        $contactFormCount = Contact::count();

        return view('dashboard', compact('productCount', 'categoryCount', 'storeCount', 'scrapingProductCount' , 'usersCount', 'contactFormCount'));
    }
}

