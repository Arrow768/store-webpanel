<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Store Control Panel</title>
<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet" media="screen">
<link href="<?php echo base_url("assets/css/main.css");?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/jquery.dataTables.js");?>"></script>
</head>

<body>
<div class="container">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
	  <a class="brand" href="<?php echo base_url("/");?>"><img src="<?php echo base_url("assets/img/store_logo.png");?>" alt="Store Logo" /></a>
      <ul class="nav">
        <li class="<?php if($page == "dashboard"){ echo "active"; }?>"><a href="<?php echo base_url("index.php/dashboard");?>">Dashboard</a></li>
        <li class="dropdown <?php if($page == "categories"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/categories");?>">Manage Categories</a></li>
            <li><a href="<?php echo base_url("index.php/categories/add");?>">Add New Category</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($page == "items"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Items <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/items");?>">Manage Items</a></li>
            <li><a href="<?php echo base_url("index.php/items/add");?>">Add New Item</a></li>
          </ul>
        </li>
        <li class="<?php if($page == "users"){ echo "active"; }?>"><a href="<?php echo base_url("index.php/users");?>">Users</a></li>
        <li class="dropdown <?php if($page == "tools"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/tools/impex");?>">Import/Export System</a></li>
            <li><a href="<?php echo base_url("index.php/tools/json_check");?>">JSON Checker</a></li>
            <li><a href="<?php echo base_url("index.php/tools/json_shrink");?>">JSON Shrinker</a></li>
            <li><a href="<?php echo base_url("index.php/tools/update");?>">Update Checker</a></li>
            <li><a href="http://github.com/arrow768/store-webpanel" target="_blank">Help</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($page == "bot"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Trade Bot <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/bot");?>">Bot Overview</a></li>
            <li><a href="<?php echo base_url("index.php/bot/show_itemvalue");?>">Item Values</a></li>
            <li><a href="<?php echo base_url("index.php/bot/donations");?>">Received Items</a></li>
            <li><a href="http://github.com/arrow768/store-webpanel" target="_blank">Help</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($page == "auth"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Auth <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/auth");?>">Manage</a></li>
            <li><a href="<?php echo base_url("index.php/auth/logout");?>">Logout</a></li>
          </ul>
        </li>
      </ul>
<!--      <ul class="nav pull-right">
        <li class="divider-vertical"></li>
        <li class="dropdown <?php if($page == "account"){ echo "active"; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("index.php/account");?>">Edit Account</a></li>
            <li class="divider"></li>
            <li><a href="index.html">Logout</a></li>
          </ul>
        </li>
      </ul>-->
    </div>
  </div>
