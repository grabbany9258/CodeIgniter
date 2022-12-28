<?php //echo view('layouts/p_add_header.php') 
?>
<?php echo view('layouts/p_add_header.php') ?>
<!-- Navbar -->
<?php echo view('layouts/top_nav.php') ?>
<?php echo view('layouts/left_sidebar.php') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1 class="">Add Product Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/Products">All Products</a></li>
                        <li class="breadcrumb-item active">Add Product Form</li>
                    </ol>
                </div>
            </div>
        </div>

        <?php
        $errors = [];
        if (session()->has('errors')) {
            $errors = session()->errors;
        }
        ?>

        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8 offset-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title text-center">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/products/create">
                            <div class="card-body">




                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name </label>
                                    <input type="text" name="product_name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('product_name') ?>" />

                                    <span class="text-danger">
                                        <?php if (isset($errors['product_name'])) {
                                            echo $errors['product_name'];
                                        } ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Details</label>
                                    <textarea type="text" name="product_details" class="form-control mb-4" id="summernote" placeholder="Enter Product Details"><?php echo old('product_details') ?> </textarea>


                                    <span class="text-danger">
                                        <?php if (isset($errors['product_details'])) {
                                            echo $errors['product_details'];
                                        } ?> </span>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price </label>
                                    <input type="text" name="product_price" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product price" value="<?php echo old('product_price') ?>" />

                                    <span class="text-danger">
                                        <?php if (isset($errors['product_price'])) {
                                            echo $errors['product_price'];
                                        } ?></span>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="/Products" class="btn btn-success">View Products</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo view('layouts/p_add_footer.php') ?>