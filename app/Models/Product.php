<?php

namespace App\Models;

use App\Classes\Catalog;
use App\Classes\ProductPriceSorter;
use App\Classes\ProductSalesPerViewSorter;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public array $product = [
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'price' => 12.99,
            'created' => '2019-01-04',
            'sales_count' => 32,
            'views_count' => 730,
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'price' => 44.49,
            'created' => '2012-01-04',
            'sales_count' => 301,
            'views_count' => 3279,
        ],
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'price' => 10.00,
            'created' => '2014-05-28',
            'sales_count' => 1048,
            'views_count' => 20123,
        ]
    ];

    /** this function initializes the action to sort the product record.
     * @return void
     */
    public function initialProductSorting(): void
    {
        /** instancing the class */
        $productPriceSorter = new ProductPriceSorter();
        $productSalesPerViewSorter = new ProductSalesPerViewSorter;
        $Catalog = new Catalog($this->product);

        /** using the instanced catalog function */
        $productsSortedByPrice = $Catalog->getProducts($productPriceSorter);
        $productsSortedBySalesPerView = $Catalog->getProducts($productSalesPerViewSorter);

        /** printing out the results */
        print_r($productsSortedByPrice);
        print_r($productsSortedBySalesPerView);
    }
}
