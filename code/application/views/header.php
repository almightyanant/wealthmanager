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
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/loaders/pace.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/libraries/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/loaders/blockui.min.js"); ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/forms/styling/uniform.min.js"); ?>"></script>
	
	<script type="text/javascript" src="<?php echo base_url("assets/js/core/app.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/pages/login.js"); ?>"></script>
	<!-- /theme JS files -->

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
                        <i class="icon-strategy position-left"></i> Investment <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu width-200">
                        <li>
                            <a href="#"><i class="icon-pencil3"></i> Equity</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-pencil3"></i> Mutual Fund</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-pencil3"></i> Fixed Income</a>
                        </li>
                    </ul>
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
                
                
                <li class="dropdown mega-menu mega-menu-wide">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-stars position-left"></i> Features <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">System Configuration</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Entity/Entity Group</a>                                            
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Users</a>                                            
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Masters</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Stocks Listed/ Un Listed</a>                                            
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Mutual Fund Schemes</a>                                            
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> General Ledger Master</a>                                            
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Quick Links</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Single Investment View (Position)</a>                                            
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Accounts</a>                                            
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-md-3">
                                    <span class="menu-heading underlined">Others</span>
                                    <ul class="menu-list">
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Documents </a>                                            
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-stack2"></i> Back Up</a>                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <span><?php echo $dataset; ?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Main navbar Ends-->
                        

               