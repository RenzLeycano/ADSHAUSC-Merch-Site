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
$merch = [
        'Membership'    => ['price' => 450, 'stock' => 20],
        'Lanyard'       => ['price' => 75, 'stock' => 0],
        'Pins'          => ['price' => 25, 'stock' => 10],
    ];
?>
<!-- Used "include" to insert the following code block to index.html -->

<?php foreach ($merch as $product_name => $data) { ?>
    <tr>
        <td><?= $product_name; ?></td>
        <td><?= $data['stock']; ?></td>
        <td><?= get_reorder_message($data['stock']); ?></td>
        <td>Php <?= get_total_value($data['price'], $data['stock']); ?></td>
        <td>Php <?= get_tax_due($data['price'], $data['stock'], $tax); ?></td>
    </tr>
<?php } ?>