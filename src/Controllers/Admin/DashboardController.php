<?php
namespace Admin\Project3005\Controllers\Admin;
use Admin\Project3005\Commons\Controller;
use Admin\Project3005\Commons\Helper;
use Admin\Project3005\Models\Category;
use Admin\Project3005\Models\Product;

class DashboardController extends Controller
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function dashboard(){
        $totalProducts= $this->product->count();
        $this->renderViewAdmin('dashboard', [
            'totalProducts'=> $totalProducts
        ]);
    }
}