<?php

namespace App\Classes;
use App\Interfaces\SorterInterface;

class Catalog
{
    /**
     * @var array
     */
    private array $products;

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /** the global Catalog function
     * @param SorterInterface $sorter
     * @return array
     */
    public function getProducts(SorterInterface $sorter): array
    {
        return $sorter->sortRecord($this->products);
    }

}
