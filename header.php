<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- META TYPE -->
<title>Sidebar | Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->
<link href="<?php echo $mainlink; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $mainlink; ?>assets/css/simple-sidebar.css" rel="stylesheet">
<link href="<?php echo $mainlink; ?>assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

<!-- FONTS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Roboto&display=swap" rel="stylesheet">

</head>
<body>

<style>

</style>

<div class="d-flex" id="wrapper">

    <div class="leftbar border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Project Name</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action active"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Menu One</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-sign-out"></i> Sign Out</a>
        </div>
    </div>
    
    <div id="page-content-wrapper">

    <nav class="topbar navbar navbar-expand-lg navbar-light border-bottom">
        <button class="btn btnbars" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="rightbar collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User One
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
