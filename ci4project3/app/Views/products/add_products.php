<?php echo view('includes/header'); ?>
<?php echo view('includes/navbar'); ?>
<div class="container">
    <h2 class="text-center bg-info mt-4 mb-3">Product Entry Form</h2>
    <form class="col-md-8 offset-md-2" action="/product/create" method="post">

        <div class="form-group mt-3">
            <label for="inputEmail3" class="">Product Name</label>
            <div class="mt-2 ">
                <input type="text" class="form-control " name="p_name" placeholder="Enter Name">
            </div>
        </div>
        <div class="form-group mt-3 ">
            <label for="inputPassword3">Product Price</label>
            <div class=" mt-2 ">
                <input type=" text" class="form-control" name="price" placeholder="Enter Price">
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="inputPassword3">Category</label>
            <select class="form-control mt-2 " name="category" placeholder="Enter Price">
                <option value="" disabled selected>Select One</option>
                <option value="Dress">Dress</option>
                <option value="Gadget">Gadget</option>
                <option value="Fruits">Fruits</option>
                <option value="Vegetables">Vegetables</option>
                <option value="Meat">Meat</option>
            </select>
        </div>
        <div class="form-group mt-3 ">
            <label for="inputPassword3">Collection Place</label>
            <div class="mt-2">
                <input type="text" class="form-control" name="coll_place" placeholder="Enter Place">
            </div>
        </div>
        <div>
            <input type="submit" value="SUBMIT" class="btn btn-primary  mt-3">
            <a href="/Product" class="btn btn-info mt-3">View Products</a>
        </div>
    </form>

</div>
<?php echo view('includes/footer'); ?>