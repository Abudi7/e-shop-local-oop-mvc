<?php 

class ProductsController extends Controller {
  private $productsModel;
  public function __construct()
  {

    $this->productsModel = $this->model('Products');
  }
  public function index()
  {
    
  }

  public function products()
  {
    // Load the model
    $products = $this->productsModel->getProducts();
    $data = ['products' => $products];
    //var_dump($data);die;
    // Pass products to the view
    $this->view('products/products', $data );
  }
  
}