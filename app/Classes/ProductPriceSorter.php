<?php

namespace App\Classes;

use App\Abstracts\SorterAbstract;
use App\Utils\Utils;
use Illuminate\Support\Facades\Log;

class ProductPriceSorter extends SorterAbstract
{
    /** sort products by prices
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            Log::alert('ProductPriceSorter');
            if(count($product)) $data = Utils::sortProductsByContext($product);

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}
