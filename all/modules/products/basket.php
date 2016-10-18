<?php
/**
 * Created by PhpStorm.
 * User: bad4iz
 * Date: 12.09.2016
 * Time: 08:42
 */

$product_ids = array();
$count_product = 0;
if (($order_id = commerce_cart_order_id($GLOBALS['user']->uid)) != FALSE) {
    $order = entity_metadata_wrapper('commerce_order', $order_id);
    $line_item_types = commerce_product_line_item_types();
    foreach ($order->commerce_line_items as $line_item) {
        if (in_array($line_item->type->value(), $line_item_types)) {
            $count_product++;
            $product_ids[] = $line_item->commerce_product->product_id->value();
        }
    }
}
