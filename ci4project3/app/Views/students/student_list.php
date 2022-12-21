<?php echo view('includes/header'); ?>
<?php echo view('includes/navbar'); ?>
<div class="container">
    <?php
    foreach ($students as $student) {
        echo $student['name'] . "<br>";
    } ?>
</div>

<?php echo view('includes/footer'); ?>