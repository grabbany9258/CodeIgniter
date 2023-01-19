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
							<table id="example1" class="table table-bordered table-striped  text-center">
								<thead>
									<tr>
										<th>SL</th>
										<th>Food Name</th>
										<th>Quantity</th>
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
											<td><?= $foo['quantity'] ?></td>
											<td><?= $foo['rate'] ?></td>
											<td>
												<?php
												foreach ($categories as $cat) :
													if ($cat['categories_id'] == $foo['categories_id']) :
														echo $cat['categories_name'];
													endif;
												endforeach;
												?>
											</td>
											<td><?= $foo['status'] ?></td>
											<td class="d-flex justify-content-center align-items-center">
												<a href="customers/view/<?php echo $foo['categories_id']; ?>"><i class="fa fa-eye"></i></a>
												<span class="mx-1">|</span>

												<a href="<?php echo site_url('food/edit/' . $foo['categories_id']) ?>"><i class="fa fa-edit"></i></a>

												<span class="mx-1">|</span>



												<!-- For ddelete Customer -->
												<form method="post" action="<?= ('food/delete/' . $foo['product_id']) ?>">
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
										<th>Food Name</th>
										<th>Quantity</th>
										<th>Rate</th>
										<th>Category</th>
										<th>Status</th>


										<th><a href="food/new" class="btn btn-success ">Add Food</a> </th>

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