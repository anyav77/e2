<?php
namespace App\Controllers;

class ProductController extends Controller
{
    private $products;
    public function __construct($app)
    {
        parent::__construct($app);
    }
    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
            ]);
    }
    public function show()
    {
        $id = $this->app->param('id');

        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        $product = $this->app->db()->findById('products', $id);
        if (is_null($product)) {
            return $this->app->view('products.missing', [
                'id'=>$id
            ]);
        }
        #Load the reviews details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');

        return $this->app->view('products.show', [
            'product'=>$product,
            'reviews'=>$reviews,
            'confirmationName'=>$confirmationName,
        ]);
    }
    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
        ]);
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        #Insert into the database
        $data = [
            'name' => $name,
            'content'=>$content,
            'product_id'=>$id,
        ];
        $this->app->db()->insert('reviews', $data);
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }

    public function newproduct()
    {
        return $this->app->view('products/new');
    }

    public function addproduct()
    {
        $this->app->validate([
            'name' => 'required',
            'description' => 'required|minLength:200',
            'price' => 'required|numeric',
            'available' => 'required',
            'weight' => 'required|numeric',
            'perishable' => 'required',
        ]);
        $name = $this->app->input('name');
        $description = $this->app->input('description');
        $price = $this->app->input('price');
        $available = $this->app->input('available');
        $weight = $this->app->input('weight');
        $perishable = $this->app->input('perishable');

        #Insert into the database
        $data = [
            'name' => $name,
            'description'=>$description,
            'price'=>$price,
            'available'=>$available,
            'weight'=>$weight,
            'perishable'=>$perishable,
        ];
        $this->app->db()->insert('products', $data);
        $this->app->redirect('/');
    }
}
