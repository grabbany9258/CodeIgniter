<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="conatiner">
        <h1>User Table</h1>
        <?php //print_r($myUsers)
        ?>
        <table class="table table-success table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach ($myUsers as $users) : ?>
                <tr>
                    <td>
                        <?php echo $users['id'] ?>
                    </td>
                    <td><?php echo $users['name'] ?></td>
                    <td><?php echo $users['email'] ?></td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url('users/delete', $users['id']) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>