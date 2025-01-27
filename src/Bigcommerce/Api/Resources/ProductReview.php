<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;
use Bigcommerce\Api\Client;

/**
 * A product review.
 */
class ProductReview extends Resource
{
    public $urls = array(
        "v2" => "/products",
        "v3" => "/catalog/products"
    );
}
