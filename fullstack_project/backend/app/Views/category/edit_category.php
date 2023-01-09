<?php //echo view('layouts/p_add_header.php') 
?>
<?php echo view('layouts/p_add_header.php') ?>
<!-- Navbar -->
<?php echo view('layouts/cat_top_nav.php') ?>
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
                        <form method="post" action="<?= base_url('category/update' . $categories['id']) ?>">
                            <?= csrf_field() ?>
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name </label>
                                    <input type="text" name="category_name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('category_name') ? old('category_name') : $cat['category_name'];  ?>" />

                                    <?php if (isset($errors['category_name'])) : ?>
                                        <div class="alert alert-warning my-2">
                                            <?= $errors['category_name']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Details </label>
                                    <input type="text" name="category_details" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('category_details') ? old('category_details') : $cat['category_details'];  ?>" />

                                    <?php if (isset($errors['category_details'])) : ?>
                                        <div class="alert alert-warning my-2">
                                            <?= $errors['category_details']; ?>
                                        </div>
                                    <?php endif ?>
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