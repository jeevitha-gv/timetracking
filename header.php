<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="https://rawgit.com/prokki/twbs-toggle-buttons/master/dist/jquery.twbs-toggle-buttons.min.js"></script>

</head>
<style>

body {
    position: relative;
    overflow-x: hidden;
}

body, html {
    height: 100%;
}

.nav .open > a {
    background-color: transparent;
}

    .nav .open > a:hover {
        background-color: transparent;
    }

    .nav .open > a:focus {
        background-color: transparent;
    }

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

    #wrapper.toggled {
        padding-left: 220px;
    }

        #wrapper.toggled #sidebar-wrapper {
            width: 220px;
        }

        #wrapper.toggled #page-content-wrapper {
            margin-right: -220px;
            position: absolute;
        }

#sidebar-wrapper {
    background: #1a1a1a;
    height: 100%;
    left: 220px;
    margin-left: -220px;
    overflow-x: hidden;
    overflow-y: auto;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 0;
    z-index: 1000;
}

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }


#page-content-wrapper {
    padding-top: 70px;
    width: 100%;
}


.sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 220px;
}

    .sidebar-nav li {
        display: inline-block;
        line-height: 20px;
        position: relative;
        width: 100%;
    }

        .sidebar-nav li:before {
            background-color: #1c1c1c;
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-nav li:before {
            background-color: #6bb4e7;
        }

        .sidebar-nav li:hover:before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

        .sidebar-nav li a {
            color: #dddddd;
            display: block;
            padding: 10px 15px 10px 30px;
            text-decoration: none;
        }

        .sidebar-nav li.open:hover before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

    .sidebar-nav .dropdown-menu {
        background-color: #222222;
        -ms-border-radius: 0;
        border-radius: 0;
        border: none;
        -webkit-box-shadow: none;
        -ms-box-shadow: none;
        box-shadow: none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
    }

    .sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
        background-color: transparent;
        color: #ffffff;
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        font-size: 20px;
        height: 65px;
        line-height: 44px;
    }

.hamburger {
    background: white;
    border: none;
    display: block;
    height: 32px;
    margin-left: 15px;
    position: absolute;
    top: 20px;
    width: 32px;
    z-index: 999;
}

    .hamburger:hover {
        outline: none;
    }

    .hamburger:focus {
        outline: none;
    }

    .hamburger:active {
        outline: none;
    }

    .hamburger.is-closed:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-closed:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }

    .hamburger.is-closed:hover .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 0;
    }

    .hamburger.is-closed:hover .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 0;
    }

    .hamburger.is-closed .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 5px;
    }

    .hamburger.is-closed .hamb-middle {
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-closed .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 5px;
    }

    .hamburger.is-closed .hamb-top, .hamburger.is-closed .hamb-middle, .hamburger.is-closed .hamb-bottom, .hamburger.is-open .hamb-top, .hamburger.is-open .hamb-middle, .hamburger.is-open .hamb-bottom {
        height: 4px;
        left: 0;
        position: absolute;
        width: 100%;
    }

    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open .hamb-middle {
        display: none;
    }

    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-open:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }
.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000000;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1;
}
.hamb-bottom, .hamb-middle, .hamb-top {
    background-color: black;
}
.iconbar 
{
  width: 25px;
  height: 2px;
  background-color: grey;
  margin: 9px 0;
}
a{
    text-decoration: none !important;
}
</style>
<body>
<div>


  <div id="wrapper" class="">
         
         <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <?php if($_SESSION['user_role'] == "employee" || $_SESSION['user_role'] == "admin" || $_SESSION['user_role'] =="client" || $_SESSION['user_role']=="project"){ ?>
               <li class="sidebar-brand"><a href=""> Fixnix </a></li>
           <?php } ?>
           <?php if($_SESSION['user_role'] == "employee" || $_SESSION['user_role'] == "admin" || $_SESSION['user_role'] =="client" || $_SESSION['user_role']=="project"){ ?>
               <li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
           <?php }?>
           <?php if($_SESSION['user_role'] == "employee" || $_SESSION['user_role'] == "admin" || $_SESSION['user_role']=="project"){ ?>
               <li><a href="timesheets.php"><i class="glyphicon glyphicon-time"></i> My Timesheet</a></li>
           <?php } ?>
           <?php if($_SESSION['user_role'] == "employee" || $_SESSION['user_role'] == "admin" || $_SESSION['user_role']=="project"){ ?>
               <li><a href="myexpense.php"><i class="glyphicon glyphicon-usd"></i> My Expenses</a></li>
           <?php }?>
           <?php if($_SESSION['user_role'] == "admin"){ ?>
               <li><a href="approval.php"><i class="fa fa-bar-chart"></i> My Approvals</a></li>
           <?php }?>
           <?php if($_SESSION['user_role'] == "employee" || $_SESSION['user_role'] == "admin" || $_SESSION['user_role'] == "client" || $_SESSION['user_role'] == "project"){ ?>
               <li><a href="myreports.php"><i class="fa fa-list"> My Reports</i></a></li>
           <?php } ?>
            </ul>
         </nav>
         <div id="page-content-wrapper">
            <button style="margin-top: -10px;margin-left: 15px;" type="button" class="btn btn-default hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
            </button>
            <nav style="margin-top: -70px;margin-left: 0px;height: -100px;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav" style="margin-top: 0px;margin-left: 20px;">
        <?php if($_SESSION['user_role'] == "admin"){ ?>
      <li><a href="employee.php">Employees</a></li>
<?php } ?>
<?php if($_SESSION['user_role'] == "client" || $_SESSION['user_role'] == "admin"){ ?>
      <li><a href="client.php"> Client</a></li>
<?php } ?>
<?php if($_SESSION['user_role'] == "project" || $_SESSION['user_role'] == "admin"){ ?>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="mytasks.php">Tasks</a></li>
<?php } ?>
<?php if($_SESSION['user_role'] == "admin") { ?>
      <li><a href="billing.php">Billing</a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-user" title="Profile"></span></a></li>
<?php } ?>
    </ul>

    <h4 style="color: #dddddd; margin-left: 80%;">
    <?php echo $_SESSION['fname'];?>
    <a href="logout.php"> LogOut</a>
    </h4>
 </div>
</nav>
  </div>
      </div>
</div>
</body>
</html>


<script type="text/javascript">
  
  $(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = true;

    function buttonSwitch() {

        if (isClosed === true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = true;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    trigger.click(function () {
        buttonSwitch();
    });

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
});

</script>