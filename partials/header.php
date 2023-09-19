<?php 
require "config/database.php";
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP & MySQL application with Admin Panel</title>
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- ICON -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css" />
  </head>
  <body>
    <nav>
      <div class="container nav__container">
        <a href="<?= ROOT_URL ?>" class="nav__logo">WHATSUP</a>
        <ul class="nav__items">
          <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
          <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
          <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
          <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
          <!-- <li><a href="<?= ROOT_URL ?>signin.php">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="avatar">
            </div>
            <ul>
              <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
              <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- ==================================== HAMBURGER MENU FOR MEDIUM & SMALL DEVICES =========================================== -->
      <div class="container hamburger-menu">
        <a href="<?= ROOT_URL ?>" class="nav__logo">WHATSUP</a>
        <ul class="hamburger__items">
          <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
          <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
          <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
          <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
          <!-- <li><a href="<?= ROOT_URL ?>signin.php">Sign In</a></li> -->
          <li class="nav__profile">
            <div class="avatar">
              <img src="./images/avatar1.jpg" alt="avatar">
            </div>
            <ul>
              <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
              <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <!-- MENU FOR MEDIUM & SMALL DEVICES -->
        <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
        <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- ======================================================== END OF NAV SECTION ======================================================== -->