<?php

namespace App\Interfaces;

interface SorterInterface
{
    /** Global function
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array;

}
