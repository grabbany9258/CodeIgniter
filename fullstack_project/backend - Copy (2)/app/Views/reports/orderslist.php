<?php
//print_r($orders);
if ($orders) : ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Customer City</th>
            <th>Order Number</th>
            <th>Order Date</th>
            <th>Status</th>

        </tr>
        <?php
        foreach ($orders as $order) : ?>
            <tr>
                <td><?= $order['customerName'] ?></td>
                <td><?= $order['phone'] ?></td>
                <td><?= $order['city'] ?></td>
                <td><?= $order['orderNumber'] ?></td>
                <td><?= $order['orderDate'] ?></td>
                <td><?= $order['status'] ?></td>
            </tr>

        <?php endforeach; ?>
    <?php endif;
    ?>