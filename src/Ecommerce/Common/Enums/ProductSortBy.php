<?php

namespace Ecommerce\Common\Enums;

enum ProductSortBy: string
{
    case NAME = 'name';
    case PRICE = 'price';
    case SHELF_TIME = 'shelf_time';
}
