<?php echo view('includes/header');
?>
<?php echo view('includes/navbar'); ?>

<div class="container">

    <?php foreach ($products as $product) {
        echo $product['p_name'] . "<br>";
        echo $product['price'] . "<br>";
        echo $product['category'] . "<br>";
    } ?>
</div>

<?php echo view('includes/footer') ?>