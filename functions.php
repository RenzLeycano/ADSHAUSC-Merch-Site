<?php
declare(strict_types = 1);

$tax_rate = .125;

function get_reorder_message(int $stock) {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    global $tax_rate;
    static $running_total = 0;
    $total  = $price * $quantity;
    $tax    = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    return $price * $quantity * ($tax_rate / 100);
}

?>