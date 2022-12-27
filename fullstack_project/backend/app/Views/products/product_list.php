<?php //include('layouts/header.php') 
?>
<?php echo view('layouts/product_header.php') ?>
<!-- Navbar -->
<?php echo view('layouts/top_nav.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('layouts/left_sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active"><a href="products/new">Add Products</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <div class="row">
                <div class="col-lg-12 text-center bg-">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div>
                            <a href="products/new" class="btn btn-primary float-right mr-4 mt-3">Add Product</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $count = 1;
                                foreach ($products as $product) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $count ?></td>
                                            <td><?= $product['product_name'] ?></td>
                                            <td><?= $product['product_price'] ?></td>
                                            <td><?= $product['product_details'] ?></td>
                                            <td>
                                                <a href="products/edit/<?php echo $product['id']; ?>" class="btn btn-primary">Edit</a>
                                                <a href="products/delete/<?php echo $product['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>

                                    <?php
                                    $count++;
                                endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Details </th>
                                            <th><a href="products/new" class="btn btn-success ">Add Product</a> </th>

                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php echo view('layouts/product_footer.php') ?>