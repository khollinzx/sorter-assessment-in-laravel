<?php

namespace App\Classes;

use App\Abstracts\SorterAbstract;
use App\Utils\Utils;
use Illuminate\Support\Facades\Log;

class ProductSalesPerViewSorter extends SorterAbstract
{
    /** sort products by views
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            Log::alert('ProductSalesPerViewSorter');
            if(count($product)) $data = Utils::sortProductsByContext($product, "Views");

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}
