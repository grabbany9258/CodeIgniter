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
                    if (session()->has('del_msg')) :
                    ?>
                        <div class="alert alert-danger"><?= session()->del_msg; ?></div>
                    <?php
                    endif;
                    ?>

                    <!-- for alert  -->

                    <?php if (session()->has('msg')) : ?>
                        <script>
                            function tempAlert(msg, duration) {
                                var el = document.createElement("div");
                                el.setAttribute('class', 'alert alert-success text-white');
                                el.setAttribute("style", "position:absolute;top:20%;left:50%;");
                                el.innerHTML = msg;
                                setTimeout(function() {
                                    el.parentNode.removeChild(el);
                                }, duration);
                                document.body.appendChild(el);
                            }

                            tempAlert('<?= session()->msg; ?>', 5000);
                        </script>
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
                            <h3 class="card-title">Month wise Order List</h3>
                        </div>
                        <div>
                            <!-- <a href="products/new" class="btn btn-primary float-right mr-4 mt-3">Add Product</a> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- For Creating Report -->


                            <h1>Order List</h1>
                            <form action="">

                                <input type="date" id="startdate"><br>
                                <input type="date" id="enddate"><br>
                                <button type="button" id="reportbtn">Show Report</button>
                            </form>
                            
                            <div id="show">

                            </div>

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