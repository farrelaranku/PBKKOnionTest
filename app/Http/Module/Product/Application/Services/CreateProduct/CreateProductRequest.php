<?php

namespace App\Http\Module\Product\Application\Services\CreateProduct;

class CreateProductRequest
{
    public function __construct(
        public string $nama,
        public float $package,
        public string $price,
    )
    {
    }
}
