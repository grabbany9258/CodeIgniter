<?php echo view('includes/header');
?>
<?php echo view('includes/navbar'); ?>

<div class="container">


    <h1 class="text-center mt-4 mb-4 bg-info">Products List</h1>
    <table class="table table-striped table-bordered text-center">
        <tr>

            <th>SL</th>
            <th>Name</th>
            <th>Price</th>
            <th>category</th>
            <th>Collection Place</th>
            <th>Action</th>
        </tr>

        <?php
        $count = 1;

        foreach ($products as $product) : ?>

            <tr>

                <td><?php echo $count  ?></td>
                <td><?php echo $product['p_name']  ?></td>
                <td><?php echo $product['price']  ?></td>
                <td><?php echo $product['category']  ?></td>
                <td><?php echo $product['coll_place']  ?></td>
                <td>
                    <a href="product/edit/<?= $product['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="product/delete/<?= $product['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php $count++;
        endforeach ?>

    </table>
    <a href="product/new" class="btn btn-primary">Add Products</a>
</div>

<?php echo view('includes/footer') ?>