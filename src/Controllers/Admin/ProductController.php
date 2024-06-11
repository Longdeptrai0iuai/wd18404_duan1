<?php

namespace Admin\Project3005\Controllers\Admin;

use Admin\Project3005\Commons\Controller;
use Admin\Project3005\Commons\Helper;
use Admin\Project3005\Models\Product;
use Admin\Project3005\Models\Category;
use Rakit\Validation\Validator;

class ProductController extends Controller
{
    private Product $product;
    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
        $products = $this->product->all();
        $this->renderViewAdmin('products.index', [
            'products' => $products
        ]);
    }
    public function create()
    {
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('products.create', [
            'categoryPluck' => $categoryPluck
        ]);
    }
    public function store()
    {
        $validator = new Validator();
        $validation = $validator->make($_POST + $_FILES, [
            'category_id' => 'required',
            'title_post'          => 'required|max:100',
            'overview'      => 'max:500',
            'content'       => 'max:65000',
            'img_title' => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/products/create'));
            exit;
        } else {
            $data = [
                'category_id'   => $_POST['category_id'],
                'title_post'          => $_POST['title_post'],
                'overview'      => $_POST['overview'],
                'content'       => $_POST['content'],
            ];

            if (!empty($_FILES['img_title']) && $_FILES['img_title']['size'] > 0) {

                $from = $_FILES['img_title']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_title']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_title'] = $to;
                } else {
                    $_SESSION['errors']['img_title'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/products/create'));
                    exit;
                }
            }

            $this->product->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/products'));
            exit;
        }
    }
    public function show($id)
    {
        $product = $this->product->findByID($id);
        // Helper::debug($product);
        $this->renderViewAdmin('products.show', [
            'product' => $product
        ]);
    }
    public function edit($id)
    {
        $product = $this->product->findByID($id);
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($product);
        // // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.edit', [
            'product' => $product,
            'categoryPluck' => $categoryPluck,
        ]);
    }
    public function update($id)
    {
        $product = $this->product->findByID($id);

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'category_id'           => 'required',
            'title_post'            => 'required|max:100',
            'overview'              => 'max:500',
            'content'               => 'max:65000',
            'img_title'         => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/products/$id/edit"));
            exit;
        } else {
            $data = [
                'category_id'   => $_POST['category_id'],
                'title_post'    => $_POST['title_post'],
                'overview'      => $_POST['overview'],
                'content'       => $_POST['content'],
                'updated_at'    => date('Y-m-d H:i:s')
            ];

            if (!empty($_FILES['img_title']) && $_FILES['img_title']['size'] > 0) {

                $from = $_FILES['img_title']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['img_title']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['img_title'] = $to;
                } else {
                    $_SESSION['errors']['img_title'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/products/$id/edit"));
                    exit;
                }
            }

            $this->product->update($id, $data);

            if ($product['img_title'] && file_exists( PATH_ROOT . $product['img_title'] ) ) {
                unlink(PATH_ROOT . $product['img_title']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/products/$id/edit"));
            exit;
        }
    }
    public function delete($id)
    {
        try {
            $product = $this->product->findByID($id);

            $this->product->delete($id);

            if ($product['img_title'] && file_exists( PATH_ROOT . $product['img_title'] ) ) {
                unlink(PATH_ROOT . $product['img_title']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/products'));
        exit();
    }
    
}
