<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Uder Edit Form</h1>
    <form action="<?= site_url('/users/update') ?>" method="post">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $user['name'] ?>"> <br>
        <input type=" text" name="email" placeholder="Enter your email" value="<?php echo $user['email'] ?>"> <br>
        <input type="submit" name="submit" value="Update">
        <input type="hidden" name="u_id" value="<?php echo $user['id'] ?>">
    </form>

</body>

</html>