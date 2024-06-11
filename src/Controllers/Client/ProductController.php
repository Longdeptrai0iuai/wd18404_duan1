<?php 

namespace Admin\Project3005\Controllers\Client;

use Admin\Project3005\Commons\Controller;
use Admin\Project3005\Commons\Helper;
use Admin\Project3005\Models\Product;

class ProductController extends Controller
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index() {
        [$products, $totalPage] = $this->product->paginate($_GET['page'] ?? 1);
        // Helper::debug($totalPage);
        $this->renderViewClient('products.index', [
            'products' => $products,
            'totalPage' =>$totalPage
        ]);
    }

    public function detail($id) {
        $product = $this->product->findByID($id);
        $this->renderViewClient('detail', [
            'product' =>$product
        ]);
    }
    
}