<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Users Entry Form</h1>
    <?php $validation = \config\services::validation(); ?>
    <form action="<?= site_url('/users/submit') ?>" method="post">

        
        <input type="text" name="name" placeholder="Enter your name"> <br>
        <!-- Error -->
        <?php if ($validation->getError('name')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('name'); ?>
            </div>
        <?php } ?>


        <input type="text" name="email" placeholder="Enter your email"> <br>
        <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
            </div>
        <?php } ?>


        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <a href="/users">All users</a>
    <a href="/users/add">New user</a>
</body>

</html>