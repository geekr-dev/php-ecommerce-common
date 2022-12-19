<?php

namespace Ecommerce\Common\Enums;

enum Events: string
{
    case PRODUCT_CREATED = 'product:created:v1';
    case PRODUCT_RATED = 'product:rated:v1';
    case ORDER_CREATED = 'order:created:v1';
    case INVENTORY_UPDATED = 'inventory:updated:v1';
}
