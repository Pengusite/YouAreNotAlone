<!--Catanghal, Justine Chollo C | CYB 201-->

<?php
    // Variable and Data Typing
    $shop_name = "PokéMart PH"; // String
    $tax_rate = 0.12;           // Float
    $is_member = true;          // Boolean
    $shipping_fee = 150;        // Integer

    // Indexed Array for categories
    $categories = ["Fire Type", "Water Type", "Electric Type"];

    // Associative Array for a specific product logic
    $featured_item = [
        "name" => "Pikachu (Illustration Rare)",
        "price" => 2500,
        "stock" => 5
    ];

    // 3. Simple Variables for the main items
    $zard_name = "Charizard VMAX";
    $zard_price = 15000;
    $zard_qty = 1; // Simulation: Customer wants to buy 1

    $mew_name = "Mewtwo GX";
    $mew_price = 8500;
    $mew_qty = 2; // Simulation: Customer wants to buy 2

    // 4. Arithmetic Operators & Expressions
    // Calculating totals
    $zard_total = $zard_price * $zard_qty;
    $mew_total = $mew_price * $mew_qty;

    $subtotal = $zard_total + $mew_total;

    // 5. Logical Operators
    // If member AND subtotal is over 20k, give discount
    if ($is_member && $subtotal > 20000) {
        $discount = 1000;
        $msg = "Member Discount Applied!";
    } else {
        $discount = 0;
        $msg = "No Discount";
    }

    // Final Calculation
    $grand_total = ($subtotal - $discount) + $shipping_fee;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PokéMart PH</title>
        
        <link rel="stylesheet" href="css/pokemon.css">
    </head>
    <body>
        <div class="container">
            <h1>PokéMart PH</h1>
            <p style="text-align:center; font-weight:bold;">
                Categories: <?= $categories[0] ?> | <?= $categories[1] ?> | <?= $categories[2] ?>
            </p>

            <div class="poke-card">
                <div class="poke-name"><?= $zard_name ?></div>
                <div>Unit Price: ₱<?= $zard_price ?></div>
            
                <div class="status-box">
                    <span class="status-text green">In Stock</span>
                </div>
            </div>

            <div class="poke-card">
                <div class="poke-name"><?= $mew_name ?></div>
                <div>Unit Price: ₱<?= $mew_price ?></div>
                
                <div class="status-box">
                    <span class="status-text green">In Stock</span>
                </div>
            </div>

            <div class="summary-section">
                <h3>🛒 Order Summary</h3>
                <p>Customer Status: <?php echo ($is_member) ? "Member" : "Guest"; ?></p>
                
                <table>
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $zard_name ?></td>
                            <td><?= $zard_qty ?></td>
                            <td>₱<?= $zard_price ?></td>
                            <td>₱<?= $zard_total ?></td>
                        </tr>
                        <tr>
                            <td><?= $mew_name ?></td>
                            <td><?= $mew_qty ?></td>
                            <td>₱<?= $mew_price ?></td>
                            <td>₱<?= $mew_total ?></td>
                        </tr>
                    </tbody>
                </table>

                <div style="text-align: right; margin-top: 15px; font-size: 1.1em;">
                    <p>Subtotal: ₱<?= $subtotal ?></p>
                    <p>Discount: -₱<?= $discount ?> (<?= $msg ?>)</p>
                    <p>Shipping: ₱<?= $shipping_fee ?></p>
                    <hr>
                    <h2 style="border:none; text-align:right;">Grand Total: ₱<?= $grand_total ?></h2>
                </div>
            </div>
            <div class="footer">
                <p><strong>Gotta Catch 'Em All!</strong></p>
                <p>&copy;2025 PokéMart PH. All Rights Reserved.</p>
                <p>Store Owner: <a href="#">Justine Chollo Catanghal</a> | CYB 201</p>
            </div>
        </div> 
    </body>
</html>
