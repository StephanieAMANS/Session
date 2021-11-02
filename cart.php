<?php
require 'inc/data/products.php';
require 'inc/head.php';
//var_dump($_SESSION);die;

    if (empty($_SESSION['loginname'])) {
        header('Location: login.php');
    } ?>

        <section class="cookies container-fluid">
        <div class="row">
        <!-- TODO : Display shopping cart items from $_SESSION here.-->
            <ul>
               <?php foreach ($_SESSION['cookie'] as $key => $number) : ?>

                   <li><?= $catalog[$key]['name'] ?></li>
               <?= 'Your basket contains '. $number . ' cookies'; ?>
               <?php endforeach;?>

            </ul>


<?php require 'inc/foot.php'; ?>