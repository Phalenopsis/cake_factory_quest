<?php include 'functions.php'; ?>
<?php session_start(); ?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <div class='result'>

            <?php
            $result = showCart($catalog);
            if (!empty($result)) {
            ?>
                <table>
                    <thead>
                        <td>Product</td>
                        <td>Quantity</td>
                    </thead>
                    <?php
                    foreach ($result as $product) {
                    ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['qty'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            <?php
            } else {
                echo 'Your cart is empty !';
            }
            ?>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>