<?php echo view('includes/header') ?>
<?php echo view('includes/navbar') ?>
<div class="container">

    <?php //print_r($users) 
    ?>
    <h1 class="text-center pt-25">Crud System</h1>
    <table class="table table-success table-striped table-bordered text-center">

        <tr>
            <th>ID</th>
            <th>Users Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['u_name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php endforeach; ?>




    </table>
    <a href="/users/add" class="btn btn-primary">Add User</a>

</div>

<?php echo view('includes/footer') ?>