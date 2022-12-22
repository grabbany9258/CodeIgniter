<?php $page = basename($_SERVER['PHP_SELF']); ?>

<div class="p-5 bg-primary text-white text-center">
    <h1>CodeIgniter Project 3</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'index.php') ? 'active' : ""; ?> " href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'about') ? 'active' : ""; ?> " href="/about">About Us</a>

            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'contact') ? 'active' : ""; ?> " href="/contact">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'students') ? 'active' : ""; ?> " href="/students">Students List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'products') ? 'active' : ""; ?> " href="/products">Products List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($page == 'users') ? 'active' : ""; ?> " href="/users">Users Crud</a>
            </li>
        </ul>
    </div>
</nav>