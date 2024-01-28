<?php

namespace App\Abstracts;
use App\Interfaces\SorterInterface;

abstract class SorterAbstract implements SorterInterface
{
    /**
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            if(count($product)) $data = $product;

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}
