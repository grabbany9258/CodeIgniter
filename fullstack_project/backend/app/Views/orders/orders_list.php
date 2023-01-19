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


          <!-- for showing message When Product Added -->
          <?php
          //if (session()->has('msg')) : 
          ?>
          <!-- <div class="alert alert-success"> <?= session()->msg; ?></div> -->
          <?php //endif; 
          ?>

          <!-- For delating message  -->

          <?php
          //if (session()->has('msg')) :
          ?>
          <!-- <div class="alert alert-danger"><?= session()->msg; ?></div> -->
          <?php
          // endif;
          ?>

          <!-- for alert  -->

          <?php if (session()->has('msg')) :
          ?>
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

              tempAlert('<?= session()->msg; ?>', 3000);
            </script>
          <?php endif;
          ?>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item active"><a href="orders/new">Add Orders</a></li>
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
              <a href="orders/new" class="btn btn-primary float-right mr-4 mt-3">Add Orders</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Invoice Date</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Total Amount</th>
                    <th>Paid Amount</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  foreach ($orders as $order) : ?>

                    <tr>
                      <td><?= $count ?></td>

                      <td><?= $order['order_date'] ?></td>
                      <td><?= $order['client_name'] ?></td>
                      <td><?= $order['client_contact'] ?></td>
                      <td><?= $order['total_amount'] ?></td>
                      <td><?= $order['paid'] ?></td>
                      <td><?= $order['payment_status'] ?></td>
                      <td class="d-flex content-justify-center">



                        <a href="<?php echo site_url('orders/edit/' . $order['order_id']) ?>"><i class="fa fa-edit"></i></a>

                        <span class="mx-2">|</span>


                        <!-- For delete  -->

                        <form method="post" action="<?= ("orders/delete/" . $order['order_id']) ?>">
                          <?= csrf_field() ?>
                          <button class="btn p-0" onclick="('Are you sure about Delete ?')" type="submit"><i class="fa fa-trash text-danger"></i> </button>
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
                    <th>Invoice Date</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Total Amount</th>
                    <th>Paid Amount</th>
                    <th>Payment Status</th>

                    <th><a href="orders/new" class="btn btn-success ">Add Order</a> </th>

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

<script>
  // $(function() {
  //     $(".delete").click(function(e) {
  //         e.preventDefault();
  //         $.post(this.href, function() {
  //             alert('Successfully Deleted');
  //             location.reload();
  //         });
  //     });
  // });
</script>