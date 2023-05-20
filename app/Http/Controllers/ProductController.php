<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ResponseTrait;

    public $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }

    public function index(){
        try {
            //throw new \Exception('some thing wrong');
             return $this->responseSuccess($this->productRepository->allProduct(), 'data fetch success');

        }catch (\Exception $ex){

            return $this->responseSuccess([], $ex->getMessage());

        }
    }
}
