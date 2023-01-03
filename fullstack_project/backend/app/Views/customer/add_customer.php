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
                    <h1 class="">Add Customer Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/Products">All Products</a></li>
                        <li class="breadcrumb-item active">Add Customer Form</li>
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
                            <h3 class="card-title text-center">Add Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/customers/create" enctype="multipart/form-data">
                            <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Name </label>
                                    <input type="text" name="name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Customer Name" value="<?php echo old('name') ?>" />

                                    <?php if (isset($errors['name'])) : ?>
                                        <div class="alert alert-warning my-2">
                                            <?= $errors['name']; ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Department </label>
                                    <select name="department" class="form-control">
                                        <option value="" disabled selected>Select One</option>
                                        <?php foreach ($deps as $dep) : ?>
                                            <option value="<?= $dep['id'] ?>"><?= $dep['dep_name'] ?></option>
                                        <?php endforeach ?>
                                    </select>




                                </div>





                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number </label>
                                    <input type="text" name="mob_no" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Mobile Number" value="<?php echo old('mob_no') ?>" />

                                    <span class="text-danger">
                                        <?php if (isset($errors['mob_no'])) {
                                            echo $errors['mob_no'];
                                        } ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Floor Number </label>
                                    <input type="text" name="floor_nb" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Floor Number" value="<?php echo old('floor_nb') ?>" />

                                    <span class="text-danger">
                                        <?php if (isset($errors['floor_nb'])) {
                                            echo $errors['floor_nb'];
                                        } ?></span>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="/customers" class="btn btn-success">View Customer</a>
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