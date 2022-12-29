<?php echo view('includes/header'); ?>
<?php echo view('includes/navbar'); ?>
<div class="container">
    <h2 class="text-center bg-info" style=" height :auto; width:auto; ">Product Entry Form</h2>

    <!-- For startting session for validation -->
    <?php
    $errors = [];
    if (session()->has('errors'))
        $errors =  session()->errors;

    ?>


    <form class="col-md-8 offset-md-2" action="/product/update/<?= $products['id'] ?>" method="post">

        <div class="form-group mt-3">
            <label for="inputEmail3" class="">Product Name</label>
            <div class="mt-2 ">
                <input type="text" class="form-control " name="p_name" placeholder="Enter Name" value="<?= old('p_name') ? old('p_name') : $products['p_name']; ?>">
            </div>
        </div>
        <div class="form-group mt-3 ">
            <label for="inputPassword3">Product Price</label>
            <div class=" mt-2 ">
                <input type=" text" class="form-control" name="price" placeholder="Enter Price" value="<?= old('price') ? old('price') : $products['price']; ?>">
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="inputPassword3">Category</label>
            <select class="form-control mt-2 " name="category" placeholder="Enter Price">
                <option value="" disabled selected>Select One</option>
                <option value="Dress" <?= old('category') == 'Dress' ? 'selected' : ($products['category'] == 'Dress' ? 'selected' : ''); ?>>Dress</option>

                <option value="Gadget" <?= old('category') == 'Gadget' ? 'selected' : ($products['category'] == 'Gadget' ? 'selected' : ''); ?>>Gadget</option>

                <option value="Fruits" <?= old('category') == 'Fruits' ? 'selected' : ($products['category'] == 'Fruits' ? 'selected' : ''); ?>>Fruits</option>

                <option value="Vegetables" <?= old('category') == 'Vegetables' ? 'selected' : ($products['category'] == 'Vegetables' ? 'selected' : ''); ?>>Vegetables</option>

                <option value="Meat" <?= old('category') == 'Meat' ? 'selected' : ($products['category'] == 'Meat' ? 'selected' : ''); ?>>Meat</option>
            </select>
        </div>
        <div class="form-group mt-3 ">
            <label for="inputPassword3">Collection Place</label>
            <div class="mt-2">
                <input type="text" class="form-control" name="coll_place" placeholder="Enter Place" value="<?= old('coll_place') ? old('coll_place') : $products['coll_place']; ?>">
            </div>
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-primary  mt-3">
            <a href="/Product" class="btn btn-info mt-3">View Products</a>
        </div>
    </form>

</div>
<?php echo view('includes/footer'); ?>