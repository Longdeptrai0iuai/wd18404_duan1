<?php 

namespace Admin\Project3005\Controllers\Client;

use Admin\Project3005\Commons\Controller;
use Admin\Project3005\Commons\Helper;
use Admin\Project3005\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index() {
        $football = $this->product->findByIDCate(4);
        $marathon = $this->product->findByIDCate(8);
        $tennis = $this->product->findByIDCate(7);
        $basketball = $this->product->findByIDCate(5);
        [$products, $totalPage] = $this->product->paginate(1,10);
        $product = $this->product->limit_5_product();
        // Helper::debug($football);
        $this->renderViewClient('home',[
                'products' =>$products,
                'totalPage'=>$totalPage,
                'product' =>$product,
                'football'=>$football,
                'marathon'=>$marathon,
                'tennis'=>$tennis,
                'basketball'=>$basketball
        ]
        
        );
       
    //    $this->renderViewClient('home', [
        
       
    // ]);
    }
   
    // public function detail($id){
    //     $product = $this->product->findByID($id);
    //     $this->renderViewClient('products.detail', [
    //         'product' =>$product
    //     ]);
    // }
}