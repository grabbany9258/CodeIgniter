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
                    <a href="customers/new" class="btn btn-primary float-right mr-4 my-2">Add Customers</a>
                    <!-- <ol class="float-sm-right">

                        <li class="btn btn-primary"><a href="customers/new">Add Customer</a></li>
                    </ol> -->
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

                        <div>
                            <h1 class="bg-secondary">Customer's List</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-success text-center">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Food Name</th>
                                        <th>Rate</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($food as $foo) : ?>

                                        <tr>
                                            <td><?= $count ?></td>

                                            <td><?= $foo['product_name'] ?></td>

                                            <?php foreach ($deps as $dep) :

                                                if ($dep['id'] == $customer['dep_category']) :
                                            ?>
                                                    <td>
                                                        <?= $dep['dep_name'] ?>
                                                    </td>
                                            <?php
                                                endif;
                                            endforeach;
                                            ?>
                                            <td><?= $customer['mob_no'] ?></td>
                                            <td><?= $customer['floor_nb'] ?></td>

                                            <td class="d-flex justify-content-center align-items-center">
                                                <a href="customers/view/<?php echo $customer['id']; ?>"><i class="fa fa-eye"></i></a>
                                                <span class="mx-1">|</span>

                                                <a href="<?php echo site_url('customers/edit/' . $customer['id']) ?>"><i class="fa fa-edit"></i></a>

                                                <span class="mx-1">|</span>



                                                <!-- For ddelete Customer -->
                                                <form method="post" action="<?= ('customers/delete/' . $customer['id']) ?>">
                                                    <?= csrf_field() ?>
                                                    <button class="btn p-0" type="submit" onclick="('Are you sure about delete ?')"> <i class="fa fa-trash text-primary"></i>

                                                    </button>




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
                                        <th>Customer Name</th>
                                        <th>Customer's Department</th>
                                        <th>Mobile Nb</th>
                                        <th>Floor Nb</th>

                                        <th><a href="customers/new" class="btn btn-success ">Add Customer</a> </th>

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

<!-- For delete script -->

<!-- <script>
    $(function() {
        $(".delete").click(function(e) {
            e.preventDefault();
            $.post(this.href, function() {
                alert('Successfully Deleted');
                location.reload();
            });
        });
    });
</script> -->