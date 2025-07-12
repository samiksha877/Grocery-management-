<?php
$products = $cart = [];

foreach ($_POST as $key => $val) {
    $array = explode('_', $key);
    if (count($array) > 1) {
        $i = array_pop($array);
    } else {
        $i = $array[0];
    }
    $key = implode('_', $array);
    if (is_numeric($i)) {
        $products[$i][$key] = $val;
    } else {
        $cart[$key] = $val;
    }
}

require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Cart | Grocery Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ✅ jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- ✅ Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px #ccc;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background: #f1f1f1;
        }
        .quantity-select {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .entry {
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            border: 1px solid #aaa;
            background: #f0f0f0;
        }
        .entry:hover {
            background: #ddd;
        }
        .close1 {
            font-size: 20px;
            color: red;
            cursor: pointer;
        }
        .total-box {
            margin-top: 20px;
            padding: 15px;
            background: #fff;
            border: 1px solid #ddd;
            font-size: 18px;
            font-weight: bold;
        }
        button.submit {
            background: green;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form action="checkout.php" method="post">
    <h2>My Cart</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Rate</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            foreach ($products as $i => $product) {
                $result = $conn->query("SELECT * FROM product WHERE name = '" . $product['item_name'] . "'");
                if ($result && $row = $result->fetch_assoc()) {
                    $pid = $row['pid'];
                    $image = $row['pic'];
                    $amount = $product['amount'];
                    $qty = $product['quantity'];
                    $subtotal = $amount * $qty;
                    $total += $subtotal;
                } else {
                    echo "<tr><td colspan='7'>Product not found</td></tr>";
                    continue;
                }
            ?>
            <tr class="rem<?= $pid ?>" data-id="<?= $pid ?>">
                <td><?= $i ?></td>
                <td><img src="<?= $image ?>" width="70" height="70" alt=""></td>
                <td><?= ucwords($product['item_name']) ?></td>
                <td id="amount_<?= $pid ?>"><?= $amount ?></td>
                <input type="hidden" name="amount_<?= $pid ?>" value="<?= $amount ?>">
                <td>
                    <div class="quantity-select">
                        <div class="entry value-minus" data-id="<?= $pid ?>">−</div>
                        <div class="entry value"><span id="qty_<?= $pid ?>"><?= $qty ?></span></div>
                        <div class="entry value-plus" data-id="<?= $pid ?>">+</div>
                    </div>
                    <input type="hidden" name="quantity_<?= $pid ?>" id="input_qty_<?= $pid ?>" value="<?= $qty ?>">
                </td>
                <td id="subtotal_<?= $pid ?>"><?= $subtotal ?></td>
                <input type="hidden" name="subtotal_<?= $pid ?>" value="<?= $subtotal ?>">
                <td><div class="close1" data-id="<?= $pid ?>">×</div></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="total-box">
        Total: ₹<span id="total"><?= $total ?></span>
        <input type="hidden" name="total" value="<?= $total ?>">
    </div>

    <button class="submit">Place Order</button>
</form>

<!-- ✅ Script -->
<script>
function updateTotal() {
    let total = 0;
    $('[id^=subtotal_]').each(function() {
        total += parseFloat($(this).text());
    });
    $('#total').text(total);
    $('input[name=total]').val(total);
}

$('.value-plus').click(function() {
    let id = $(this).data('id');
    let qtyElem = $('#qty_' + id);
    let qty = parseInt(qtyElem.text());
    qty++;
    qtyElem.text(qty);
    $('#input_qty_' + id).val(qty);

    let rate = parseFloat($('#amount_' + id).text());
    let subtotal = rate * qty;
    $('#subtotal_' + id).text(subtotal);
    $('input[name=subtotal_' + id + ']').val(subtotal);
    updateTotal();
});

$('.value-minus').click(function() {
    let id = $(this).data('id');
    let qtyElem = $('#qty_' + id);
    let qty = parseInt(qtyElem.text());
    if (qty > 1) {
        qty--;
        qtyElem.text(qty);
        $('#input_qty_' + id).val(qty);

        let rate = parseFloat($('#amount_' + id).text());
        let subtotal = rate * qty;
        $('#subtotal_' + id).text(subtotal);
        $('input[name=subtotal_' + id + ']').val(subtotal);
        updateTotal();
    }
});

$('.close1').click(function() {
    let id = $(this).data('id');
    $('.rem' + id).fadeOut('slow', function() {
        $(this).remove();
        updateTotal();
    });
});
</script>

</body>
</html>
