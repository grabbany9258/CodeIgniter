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
                <div class="col-sm-6">
                    <h1>Add Product Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/products">All Products</a></li>
                        <li class="breadcrumb-item active"><a href="/products">All Products</a></li>
                    </ol>
                </div>
            </div>
        </div>
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
                        <form method="post" action="/products/update/<?= $product['id']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name </label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo $product['product_name'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">details</label>
                                    <input type="text" name="product_details" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Details" value="<?php echo $product['product_details'] ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price </label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Product price" value="<?php echo $product['product_price'] ?>" />
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
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