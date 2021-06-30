<?php

namespace App\Controllers;

//use App\Models\ProductsModel;

class Products extends BaseController
{
    /*
    protected $productsModel;
    public function __construct()
    {
        $this->productsModel = new ProductsModel();
    }
    */

    public function index()
    {
        //$products = $this->productsModel->findAll();

        /*
        $data = [
            'product' => $products
        ];
        */
        //$productsModel = new \App\Models\ProductsModel();
        //$productsModel = new ProductsModel();
        //$products = $productsModel->findAll();
        //dd($products);
        echo "hello world";
        $hello = "<br />hello friend";
        //echo $hello;

        return view('products/index');
    }
}
