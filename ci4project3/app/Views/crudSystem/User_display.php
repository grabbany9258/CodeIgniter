<?php echo view('includes/header') ?>
<?php echo view('includes/navbar') ?>
<div class="container">

    <?php //print_r($users) 
    ?>
    <h1 class="text-center pt-25">Crud System</h1>
    <table class="table table-success table-striped table-bordered text-center">

        <tr>
            <th>SL</th>
            <th>Users Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        $count = 1;
        foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $user['u_name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a href="users/edit/<?= $user['id']; ?>" class="btn btn-primary">Edit</a>
                    <!-- <a href="userCrud/edit/<?= $user['id']; ?>" class="btn btn-primary">Edit</a> -->
                    <!-- <a href="userCrud/delete/<?= $user['id']; ?>" class="btn btn-danger">Delete</a> -->
                    <a href="users/delete/<?= $user['id']; ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php
            $count++;
        endforeach; ?>




    </table>
    <a href="/users/add" class="btn btn-primary">Add User</a>

</div>

<?php echo view('includes/footer') ?>