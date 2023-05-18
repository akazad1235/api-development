<?php
    namespace App\Repositories;

    use App\Interface\ProductInterface;
    use App\Models\Product;

    class ProductRepository implements ProductInterface {

        public function allProduct()
        {
            // TODO: Implement allProduct() method.
            return Product::get();
        }

    }
