<?php echo view('includes/header') ?>
<?php echo view('includes/navbar') ?>
<div class="container">
    <form action="/student/update/<?= $student['id']; ?>" method="post">
        <?= csrf_field();  ?>
        <h1 class="">Edit Student Form</h1>
        <div class="col-sm-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter your Name" name="name" value="<?php echo $student['name']; ?>">
        </div>

        <div class="col-sm-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" placeholder="Enter your Number" name="phone" value="<?php echo $student['phone']; ?>">
        </div>
        <div class="col-sm-6">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $student['email']; ?>">
        </div>
        <div class="col-sm-6">
            <label for="email" class="form-label">Address</label>
            <textarea class="form-control" placeholder="Enter your Email" name="address"><?php echo $student['address']; ?>" </textarea>
        </div>


        <div>

            <input type="submit" value="Update Student" class="btn btn-primary">
            <!-- <a href="/users" class="btn btn-info">View Users</a> -->
        </div>

    </form>

</div>

<?php echo view('includes/footer') ?>