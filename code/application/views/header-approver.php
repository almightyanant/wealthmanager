<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wealth Manager - Your Own Wealth Manager</title>

	<!-- Global stylesheets -->
	<!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">-->
	<link href="<?php echo base_url("assets/css/icons/icomoon/styles.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/css/core.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/css/components.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url("assets/css/colors.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url("assets/css/wealthmanager.css"); ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/loaders/pace.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/loaders/blockui.min.js"); ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/tables/datatables/datatables.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/selects/select2.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/pages/datatables_api.js"); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/styling/uniform.min.js"); ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/app.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/pages/login.js"); ?>"></script>
	<!-- /theme JS files -->
        
        <script type="text/javascript" src="<?php echo base_url("assets/js/wealthmanager/wealthmanager.js"); ?>"></script>
        
</head>


<body>
    <!-- Main navbar -->
    <div class="navbar navbar-default" id="navbar-second">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li>
                <a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle">
                    <i class="icon-menu7"></i>
                </a>
            </li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <a class="navbar-brand" href="index.html"><img src=<?php echo base_url("assets/images/logo_dark.png"); ?> alt=""></a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"><i class="icon-display4 position-left"></i> Dashboard</a>
                </li>
                
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-make-group position-left"></i> Reports <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-250">
                        <li class="dropdown-header">Analysis</li>						
                        <li>
                            <a href="#"><i class="icon-task"></i> Valuation</a>                                
                        </li>
                        <li>
                            <a href="#"><i class="icon-task"></i> Returns - IRR</a>                                
                        </li>
                        <li>
                            <a href="#"><i class="icon-task"></i> Allocations</a>                                
                        </li>

                        <li class="dropdown-header">Accounting</li>
                        <li>
                            <a href="#"><i class="icon-cash3"></i> Balance Sheet</a>                            
                        </li>
                        
                        <li>
                            <a href="#"><i class="icon-cash3"></i> Trial Balance</a>                            
                        </li>
                        
                        <li>
                            <a href="#"><i class="icon-cash3"></i> Vouchers</a>                            
                        </li>
                        
                        <li>
                            <a href="#"><i class="icon-cash3"></i> Ledger Entry</a>                            
                        </li>

                    </ul>
                </li>
                
                
                
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="icon-history position-left"></i>
                        Notifications
                        <span class="label label-inline position-right bg-success-400">24</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-cog3"></i>
                        <span class="visible-xs-inline-block position-right">Share</span>
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Audit Trail</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
                
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/placeholder.jpg" alt="">
                        <span><?php echo $_SESSION['nameofuser']; ?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="<?php echo site_url("user/user_logout"); ?>"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Main navbar Ends-->
    
     <!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <p></p>

                <div class="breadcrumb-line breadcrumb-line-component">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active"><?php echo $breadcrumb; ?></li>
                    </ul>
                    <ul class="breadcrumb-elements">
			<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                    </ul>
                </div>