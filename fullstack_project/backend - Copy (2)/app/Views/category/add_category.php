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
                        <li class="breadcrumb-item"><a href="/Products">All Category</a></li>
                        <li class="breadcrumb-item active">Add Category Form</li>
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
                            <h3 class="card-title text-center">Add Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('category/create') ?>">
                            <?= csrf_field() ?>
                            <div class="card-body">



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name </label>
                                    <input type="text" name="categories_name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('categories_name') ?>" />

                                    <?php if (isset($errors['categories_name'])) : ?>
                                        <div class="alert alert-warning my-2">
                                            <?= $errors['categories_name']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Status </label>
                                    <input type="text" name="categories_status" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('categories_status') ?>" />

                                    <?php if (isset($errors['categories_status'])) : ?>
                                        <div class="alert alert-warning my-2">
                                            <?= $errors['categories_status']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <!-- status from youthappam -->

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categories_status" name="categories_status">
                                                <option value="">~~SELECT~~</option>
                                                <option value="1">Available</option>
                                                <option value="2">Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="/category" class="btn btn-success">View Category</a>
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