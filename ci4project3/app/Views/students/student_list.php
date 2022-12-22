<?php echo view('includes/header'); ?>
<?php echo view('includes/navbar'); ?>
<div class="container">
    <?php
    // foreach ($students as $student) {
    //     echo $student['name'] . "<br>";
    // } 
    ?>
    <h1 class="text-center">Student List</h1>
    <table class="table table-striped table-bordered text-center">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['phone'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td><?php echo $student['address'] ?></td>
                <td>
                    <a href="student/edit/<?= $student['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="student/delete/<?= $student['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="student/new" class="btn btn-primary">New Student</a>

</div>

<?php echo view('includes/footer'); ?>