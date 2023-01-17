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


                    <!-- for showing Alert When Product Updated -->
                    <?php
                    if (session()->has('msg')) : ?>
                        <div class="alert alert-success"> <?= session()->msg; ?></div>
                    <?php endif; ?>

                    <!-- For delating  -->

                    <?php
                    if (session()->has('del_msg')) : ?>
                        <div class="alert alert-danger"><?= session()->del_msg; ?></div>
                    <?php endif; ?>

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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div>
                            <a href="category/new" class="btn btn-primary float-right mr-4 mt-3">Add Category</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($categories as $cat) : ?>

                                        <tr>
                                            <td><?= $count ?></td>

                                            <td><?= $cat['categories_name'] ?></td>
                                            <td><?= $cat['categories_status'] ?></td>

                                            <td class="d-flex justify-content-center 
                                            align-items-center">
                                                <a href="<?php echo site_url('category/edit/' . $cat['categories_id']) ?>"><i class="fa fa-edit"></i></a>

                                                <span class="mx-1">|</span>

                                                <!-- For delete its work with form -->

                                                <form method="post" action="<?= ('category/delete/' . $cat['categories_id']) ?>">
                                                    <?= csrf_field() ?>

                                                    <button class="btn p-0" type="submit" onclick="('Are you sure about delete?')"><i class="fa fa-trash text-danger"></i></button>


                                                </form>
                                            </td>

                                        </tr>

                                    <?php
                                        $count++;
                                    endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th><a href="category/new" class="btn btn-success ">Add Category</a> </th>

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

?>
<?php echo view('layouts/product_footer.php') ?>