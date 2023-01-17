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
            <li class="breadcrumb-item"><a href="/Food">All Products</a></li>
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
            <form method="post" action="/food/create" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="card-body">


                <div class="form-group">
                  <label for="exampleInputEmail1">Food Name </label>
                  <input type="text" name="product_name" class="form-control mb-4" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('product_name') ?>" />

                  <?php if (isset($errors['product_name'])) : ?>
                    <div class="alert alert-warning my-2">
                      <?= $errors['product_name']; ?>
                    </div>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Food Quantity </label>
                  <input type="text" name="quantity" class="form-control mb-4" id="exampleInputEmail1" placeholder="Quantity" value="<?php echo old('quantity') ?>" />

                  <?php if (isset($errors['quantity'])) : ?>
                    <div class="alert alert-warning my-2">
                      <?= $errors['quantity']; ?>
                    </div>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Food Rate </label>
                  <input type="text" name="rate" class="form-control mb-4" id="exampleInputEmail1" placeholder="Rate" value="<?php echo old('rate') ?>" />

                  <?php if (isset($errors['rate'])) : ?>
                    <div class="alert alert-warning my-2">
                      <?= $errors['rate']; ?>
                    </div>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Food Category </label>
                  <select name="category_name" class="form-control">
                    <option value="" disabled selected>Select One</option>
                    <?php foreach ($cats as $cat) : ?>
                      <option value="<?= $cat['categories_id'] ?>"><?= $cat['categories_name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for=""> Status </label>
                  <select class="form-control mb-4" id="productStatus" name="productStatus" value="<?php echo old('categories_status') ?>">
                    <option value="">~~SELECT~~</option>
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>
                  </select>


                  <span class="text-danger">
                    <?php if (isset($errors['categories_status'])) {
                      echo $errors['categories_status'];
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