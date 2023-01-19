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
          <h1 class="">Create invoice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/orders">All Orders</a></li>
            <li class="breadcrumb-item active">Add invoice</li>
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
        <div class="col-md-11 " style="margin-left: 5%;">
          <!-- <div class="col-md-10 offset-1 "> -->
          <!-- general form elements -->
          <div class=" card card-primary">
            <div class="card-header">
              <h3 class="card-title text-center">Add Invoice</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="/orders/create" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <div class="row">

                    <label class="col-sm-2 control-label">Invoice No</label>
                    <div class="col-sm-4">
                      <?php
                      // // include('./constant/connect.php');
                      // $sql = "select count(*) as cnt from orders";
                      // $row = $connect->query($sql)->fetch_assoc();

                      // $new = sprintf('%05d', intval($row['cnt']) + 1);

                      ?>
                      <input type="text" class="form-control" placeholder="Invoice Number" autocomplete="on" value="<? //php echo $new; 
                                                                                                                    ?>" required />
                    </div>


                    <label class="col-sm-2 control-label">Invoice Date</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="orderDate" name="orderDate" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-2 control-label">Customer Name</label>
                    <div class="col-sm-4">
                      <select class="form-control select2" id="clientName" name="clientName">
                        <option value="" disabled selected>~~SELECT~~</option>
                        <?php foreach ($customers as $customer) : ?>
                          <option value="<?= $customer['id'] ?>"><?= $customer['name'] ?></option>
                        <?php endforeach; ?>
                      </select>

                    </div>

                    <label class="col-sm-2 control-label">Contact No.</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="mob_no" name="clientContact" required style="color:black;">
                    </div>
                  </div>
                </div>

                <table class="table" id="productTable">
                  <thead>
                    <tr>
                      <th style="width:40%;">Food</th>
                      <th style="width:20%;">Rate</th>
                      <th style="width:15%;">Quantity</th>
                      <th style="width:25%;">Total</th>
                      <th style="width:10%;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $arrayNumber = 0;
                    for ($x = 1; $x < 2; $x++) { ?>
                      <tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">
                        <td style="margin-left:20px;">
                          <div class="form-group">

                            <select class="form-control select2" name="productName[]" id="productName<?php echo $x; ?>" onchange="getProductData(<?php echo $x; ?>)">
                              <option value="" disabled selected>~~SELECT~~</option>
                              <?php foreach ($product as $pro) : ?>
                                <option value="<?= $pro['product_id'] ?>"><?= $pro['product_name'] ?></option>
                              <?php endforeach; ?>
                              <?php
                              // $productSql = "SELECT * FROM product WHERE active = 1 AND status = 1 AND quantity != 0";
                              // $productData = $connect->query($productSql);

                              // while ($row = $productData->fetch_array()) {
                              //   echo "<option value='" . $row['product_id'] . "' id='changeProduct" . $row['product_id'] . "'>" . $row['product_name'] . "</option>";
                              // } // /while 

                              ?>
                            </select>
                          </div>
                        </td>
                        <td style="padding-left:20px;">
                          <input type="text" name="rate[]" id="rate<?php echo $x; ?>" autocomplete="off" disabled="true" class="form-control" />
                          <input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>" autocomplete="off" class="form-control" />
                        </td>
                        <td style="padding-left:20px;">
                          <div class="form-group">
                            <p id="available_quantity<?php echo $x; ?>"></p>
                          </div>
                        </td>
                        <td style="padding-left:20px;">
                          <div class="form-group">
                            <input type="number" name="quantity[]" id="quantity<?php echo $x; ?>" onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off" class="form-control" min="1" />
                          </div>
                        </td>
                        <td>
                          <input type="text" name="total[]" id="total<?php echo $x; ?>" autocomplete="off" class="form-control" disabled="true" />
                          <input type="hidden" name="totalValue[]" id="totalValue<?php echo $x; ?>" autocomplete="off" class="form-control" />
                        </td>
                        <td>

                          <button type="button" class="btn btn-primary btn-flat " onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="fa fa-plus"></i></button>


              </div>
              </td>

              <td>



                <button type="button" class="btn btn-danger  removeProductRowBtn" type="button" id="removeProductRowBtn" onclick="removeProductRow(<?php echo $x; ?>)"><i class="fa fa-trash"></i></button>
          </div>
          </td>


          </tr>
        <?php
                      $arrayNumber++;
                    } // /for
        ?>
        </tbody>
        </table>


        <div class="form-group">
          <div class="row">
            <label class="col-sm-2 control-label">Sub Amount</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="subTotal" name="subTotal" disabled="true" />
              <input type="hidden" class="form-control" id="subTotalValue" name="subTotalValue" />
            </div>

            <label for="totalAmount" class="col-sm-2 control-label">Total Amount</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true" />
              <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
            </div>

          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="discount" class="col-sm-2 control-label">Discount</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" / pattern="^[0-9]+$" />
            </div>
            <label for="grandTotal" class="col-sm-2 control-label">Grand Total</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" />
              <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
            </div>

          </div>
        </div>
        <div class="form-group">
          <div class="row">

          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="vat" class="col-sm-2 control-label gst">Save 10%</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="vat" name="gstn" readonly="true" />
              <input type="hidden" class="form-control" id="vatValue" name="vatValue" />
            </div>

            <label for="paid" class="col-sm-2 control-label">Paid Amount</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="paid" name="paid" autocomplete="off" onkeyup="paidAmount()" />
            </div>

          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="due" class="col-sm-2 control-label">Due Amount</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="due" name="due" disabled="true" />
              <input type="hidden" class="form-control" id="dueValue" name="dueValue" />
            </div>

            <label for="clientContact" class="col-sm-2 control-label">Payment Type</label>
            <div class="col-sm-4">
              <select class="form-control" name="paymentType" id="paymentType">
                <option value="">~~SELECT~~</option>
                <option value="2">Cash</option>
                <option value="4">Bkash Pay</option>
                <option value="5">Nagad Pay</option>
                <option value="1">Due </option>


              </select>
            </div>


          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="clientContact" class="col-sm-2 control-label">Payment Status</label>
            <div class="col-sm-4">
              <select class="form-control" name="paymentStatus" id="paymentStatus">
                <option value="">~~SELECT~~</option>
                <option value="1">Full Payment</option>
                <option value="2">Advance Payment</option>
                <option value="3">No Payment</option>
              </select>
            </div>

            <label for="clientContact" class="col-sm-2 control-label">Payment Place</label>
            <div class="col-sm-4">
              <select class="form-control" name="paymentPlace" id="paymentPlace">
                <option value="">~~SELECT~~</option>
                <option value="1">Marketing Department</option>
                <option value="2">Operations Department</option>
                <option value="3">Finance Department</option>
                <option value="4">Sales Department</option>
                <option value="5">HRM Department</option>
                <option value="6">IT Department</option>
                <option value="7">Production Department</option>
              </select>
            </div>
          </div>
        </div>

        <!-- /.card-body -->

        <div class="form-group submitButtonFooter">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="createOrderBtn" data-loading-text="Loading..." class="btn btn-success btn-flat m-b-30 m-t-30"><i class="glyphicon glyphicon-ok-sign"></i> Submit</button>

            <button type="reset" class="btn btn-danger btn-flat m-b-30 m-t-30" onclick="resetOrderForm()"><i class="glyphicon glyphicon-erase"></i> Reset</button>
          </div>
        </div>

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