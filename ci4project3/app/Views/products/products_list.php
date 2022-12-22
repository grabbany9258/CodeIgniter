<?php echo view('includes/header');
?>
<?php echo view('includes/navbar'); ?>

<div class="container">

    <?php
    // foreach ($products as $product) {
    //     echo $product['p_name'] . "<br>";
    //     echo $product['price'] . "<br>";
    //     echo $product['category'] . "<br>";
    // } 
    ?>
    <h1 class="text-center">Products List</h1>
    <table class="table table-striped table-bordered text-center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>category</th>
            <th>Collection Place</th>
        </tr>

        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['id']  ?></td>
                <td><?php echo $product['p_name']  ?></td>
                <td><?php echo $product['price']  ?></td>
                <td><?php echo $product['category']  ?></td>
                <td><?php echo $product['coll_place']  ?></td>
            </tr>

        <?php endforeach ?>

    </table>
</div>

<?php echo view('includes/footer') ?>