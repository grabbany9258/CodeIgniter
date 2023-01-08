<?php
//print_r($empls);
if ($empls) : ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Employee Code</th>
            <th>Employee Name</th>
            <th>Employee Email</th>

        </tr>
        <?php
        foreach ($empls as $emp) : ?>
            <tr>
                <td><?= $emp['employeeNumber'] ?></td>
                <td><?= $emp['firstName'] . "" . $emp['lastName'] ?></td>
                <td><?= $emp['email'] ?></td>
            </tr>

        <?php endforeach; ?>
    <?php endif;
    ?>