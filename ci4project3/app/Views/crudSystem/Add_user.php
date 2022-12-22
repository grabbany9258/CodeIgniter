<?php echo view('includes/header') ?>
<?php echo view('includes/navbar') ?>
<div class="container">
    <form action="<?= site_url('/users/submit') ?>" method="post">
        <h1 class="">Create New User Form</h1>
        <div class="col-sm-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="u_name">
        </div>
        <div class="col-sm-6">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your Email" name="email">
        </div>
        <div class="col-sm-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" placeholder="Enter your Number" name="phone">
        </div>

        <div>

            <input type="submit" name="submit" value="Add User" class="btn btn-primary">
            <a href="/users" class="btn btn-info">View Users</a>
        </div>

    </form>

</div>

<?php echo view('includes/footer') ?>