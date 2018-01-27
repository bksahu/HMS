<?php
$base_url="http://localhost/hms/";

$ses = new \sessionManager\sessionManager();
//$ses->start();
$name=$ses->Get("name");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $GLOBALS['title'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base_url;?>dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url;?>dist/css/datepicker.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $base_url;?>dist/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo $base_url;?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $base_url;?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $base_url;?>dist/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $base_url;?>dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/dataTable.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/timepicker.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/calendar.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/custom_2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $base_url;?>dist/css/app.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img alt="HMS" class="pull-left" height="50" width="50" src="<?php echo $base_url.'dist/images/logonav.png'?>" 
            style="padding: 5px;margin-left: 5px;" ><a class="navbar-brand titlehms" href="<?php echo $base_url.'dashboard.php'?>">Hostel Management System</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li>
                <h5 class="titlehms"><?php echo $name?></h5>
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>&nbsp;  <i class="fa fa-caret-down"></i>&nbsp;
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="<?php echo $base_url;?>ui/setting/adduser.php"><i class="fa fa-gear fa-fw"></i>&nbsp;&nbsp; Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $base_url;?>logout.php"><i class="fa fa-sign-out fa-fw"></i>&nbsp;&nbsp; Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo $base_url.'dashboard.php';?>"><i class="fa fa-2x fa-dashboard fa-fw"></i>&nbsp; Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file-text fa-fw"></i>&nbsp; Attendence<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/attendence/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add Attendence
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/attendence/list.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; Attendence List View
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/attendence/view.php'?>">
                                    <i class="fa fa-eye fa-fw" aria-hidden="true"></i>&nbsp; Attendence View
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cutlery fa-fw"></i>&nbsp; Meal Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/meal/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/meal/view.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cubes fa-fw"></i>&nbsp; Assets Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/asset/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/asset/view.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Students Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/studentManage/admission.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Admission</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/studentManage/studentlist.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; Student List</a>
                            </li>

                            <li>
                                <a href="<?php echo $base_url.'ui/studentManage/deposit.php'?>">
                                    <i class="fa fa-inr fa-fw" aria-hidden="true"></i>&nbsp; Mess Money Deposit</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/studentManage/seatalocation.php'?>">
                                    <i class="fa fa-plus fa-fw" aria-hidden="true"></i>&nbsp; Room Alocation</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money fa-fw"></i>&nbsp; Students Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/stdpayment/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add</a>
                            </li>

                            <li>
                                <a href="<?php echo $base_url.'ui/stdpayment/view.php'?>">
                                    <i class="fa fa-eye fa-fw" aria-hidden="true"></i>&nbsp; View</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i>&nbsp; Employee Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/employee/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/employee/view.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List view</a>
                            </li>

                            <li>
                                <a href="<?php echo $base_url.'ui/employee/salaryadd.php'?>">
                                    <i class="fa fa-inr fa-fw" aria-hidden="true"></i>&nbsp; Salary Add</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/employee/salaryview.php'?>">
                                    <i class="fa fa-eye fa-fw" aria-hidden="true"></i>&nbsp; Salary View</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-inr fa-fw" aria-hidden="true"></i>&nbsp; Vendor Payment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/payment/create.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/payment/view.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List View</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa  fa-file-text fa-fw"></i>&nbsp; Bill Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/bill/add.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/bill/view.php'?>">
                                    <i class="fa fa-list fa-fw" aria-hidden="true"></i>&nbsp; List View</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i>&nbsp; Notice Board<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/notice/create.php'?>">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Notice Add/List</a>
                            </li>



                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Setting<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/setting/adduser.php'?>">
                                	<i class="fa fa-wrench fa-fw" aria-hidden="true"></i>&nbsp; Add/Remove Admin</a>
                            </li>


                        </ul>
                    </li>
                    <li>

                        <a href="#"><i class="fa fa-gears fa-fw"></i>&nbsp; Setup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $base_url.'ui/setup/fees.php'?>">
                                	<i class="fa fa-inr fa-fw" aria-hidden="true"></i>&nbsp; Fees</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/setup/mealrate.php'?>">
                                	<i class="fa fa-usd fa-fw" aria-hidden="true"></i>&nbsp; Meal Rate</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/setup/timeset.php'?>">
                                	<i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp; Time Set</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/setup/block.php'?>">
                                	<i class="fa fa-th-large fa-fw" aria-hidden="true"></i>&nbsp; Blocks</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url.'ui/setup/room.php'?>">
                                	<i class="fa fa-square fa-fw" aria-hidden="true"></i>&nbsp; Rooms</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
