<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php //print_r($MyUsers) 
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($MyUsers as $users) : ?>
            <tr>
                <td><?php echo $users['id'] ?></td>
                <td><?php echo $users['name'] ?></td>
                <td><?php echo $users['email'] ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>