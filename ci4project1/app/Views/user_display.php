<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <?php //print_r($myusers); 
        ?>
        <h3>User Table</h3>
        <table class="table table-success table-striped">


            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php foreach ($myusers as $user) : ?>
                <!-- {} ar poriborte kolon deya hoice.. -->
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <a href="<?php echo base_url(" users/edit/" . $user['id']); ?>" class="btn btn-primary">Edit</a>
                        
                        <a href="<?php echo base_url(" users/delete/" . $user['id']); ?>" class="btn btn-danger">Delete</a>

                    </td>
                    

                </tr>
            <?php endforeach; ?>
        </table>
        <br><br>
        <a href="/users">All users</a>
        <a href="/users/add">New user</a>
    </div>
</body>

</html>