<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SILENTHORN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
       <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SILENT_Horn</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
         <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fa fa-address-card-o"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="schemes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Schemes</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="medical.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Medical Tracking</span></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="doctor.php">
          <i class="fa fa-user-md"></i>
          <span>Doctors Help</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="pharma.php">
          <i class="fas fa-fw fa-medkit"></i>
          <span>Pharma</span></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="act.php">
          <i class="fa fa-folder"></i>
          <span>Acts</span></a>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?= $_SESSION['username'] ?><b></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="forgotpassword.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Reset Password
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Breadcrumb -->
		   <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">Back</a>
          </li>
		  
        </ol>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Events</a>
          </div>


          
          <!-- Content Row -->
          <div class="row">
<div align="center">
  <center>
            <table align="center" class="w3-table w3-striped w3-hoverable w3-white">
  <tbody>
  <tr>
    <td width="96%" style="border-style: none; border-width: medium">
    <b>
    <div align="center">
      <center>
    <table class="paleBlueRows" height="800" cellspacing="0" cellpadding="3" width="1500" border="1" style="border-collapse: collapse" bordercolor="#000080" bordercolorlight="#000080" bordercolordark="#000080">
      <tbody>
	  <tr>
        <th valign="top" align="left" width="29" height="28">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">S.No</font></p></th>
        <th valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS" style="text-decoration: none">
        <center><font color="#000080" size="4">LIST OF SCHEMES</font> </center></a></font></th>
      </tr>
	  <tr>
        <td valign="top" align="left" width="29" height="28">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">1.</font></p></td>
        <td valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON AND 
        NORMAL PERSONS </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="28">
        <font face="Times New Roman" color="#000080" size="4">2.</font></td>
        <td valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="37">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">3.</font></p></td>
        <td valign="top" align="justify" width="738" height="37">
        <font face="Times New Roman">
        <a href="#3. GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES" style="text-decoration: none">
	<font color="#000080" size="4">GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED 
        PERSONS WHO ARE OWNING MOTORISED 
        VEHICLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="29">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">4.</font></p></td>
        <td valign="top" align="justify" width="738" height="29">
        <font face="Times New Roman">
        <a href="#4. GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="30">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">5.</font></p></td>
        <td valign="top" align="justify" width="738" height="30">
        <font face="Times New Roman">
        <a href="#5. AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED STUDENTS" style="text-decoration: none">
	<font color="#000080" size="4">AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED 
        PERSON STUDENTS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="30">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">6.</font></p></td>
        <td valign="top" align="justify" width="738" height="30">
        <font face="Times New Roman">
        <a href="#6. INCENTIVE FOR EYE DONARS" style="text-decoration: none">
	<font color="#000080" size="4">INCENTIVE FOR EYE DONORS </font> </a>
        </font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="33" width="29">
        <font face="Times New Roman" color="#000080" size="4">7.</font></td>
        <td valign="top" align="justify" height="33" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#7. REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES" style="text-decoration: none">
	<font color="#000080" size="4">REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="26" width="29">
        <font face="Times New Roman" color="#000080" size="4">8.</font></td>
        <td valign="top" align="justify" height="26" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#8. SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY 
        OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">9.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#9. STATE AWARD FOR THE WELFARE OF THE HANDICAPPED" style="text-decoration: none">
	<font color="#000080" size="4">STATE AWARD FOR THE WELFARE OF THE HANDICAPPED</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">10.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#10. SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY 
        ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">11.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#11. ISSUE OF FREE BUS PASS TO DIFFERENTLY ABLED PERSON" style="text-decoration: none">
	<font color="#000080" size="4">ISSUE OF FREE BUS PASS 
        TO DIFFERENTLY ABLED PERSON </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">12.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">13.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#13. INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON" style="text-decoration: none">
	<font color="#000080" size="4">INTERNATIONAL DAY FOR THE DIFFERENTLY 
        ABLED PERSON</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">14.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#14. GROUP INSURANCE FOR DIFFERENTLY ABLED PERSON GOVERNMENT EMPLOYEES." style="text-decoration: none">
	<font color="#000080" size="4">GROUP INSURANCE FOR DIFFERENTLY ABLED 
        PERSON GOVERNMENT EMPLOYEES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">15.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#15. INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF PONDICHERRY 2004" style="text-decoration: none">
        <font color="#000080" size="4">INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES 
        OF GOVT. OF PONDICHERRY 2004</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">16.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#16. THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">THE PERUNTHALAIVAR KARMA VEERAR KAMARAJ SCHEME FOR FINANCIAL 
        ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">17.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS WITH DISABILITIES" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF INVALID CARRIAGES (MORIZED 
        TRI-CYCLES) TO THE PERSONS WITH DISABILITIES </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">18.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#18. SUPPLY OF MUSICAL / SPORTS ITEMS  TO PH WELFARE ASSOCIATIONS" style="text-decoration: none">
        <font color="#000080" size="4">SUPPLY OF MUSICAL / SPORTS ITEMS TO PH WELFARE ASSOCIATIONS 
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">19.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#19. ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
        <font color="#000080" size="4">ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">20.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">GRANT OF 
        TRANSPORT ALLOWANCE TO DIFFERENTLY ABLED PERSONS </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">21.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman">
        <a href="#21. SUPPLY OF RADIO TO THE BLIND PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF RADIO TO 
        THE BLIND PERSONS</font></a></font></td>
      </tr>
    </tbody></table>
      </center>
    </div>
    </b>
    </td>
  </tr>
</tbody></table>
</div>
</div>
<div align="center">
  <center>
<table class="paleBlueRows" height="5972" cellspacing="0" width="788" bgcolor="#ffffff" border="0" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0">
  <tbody><tr>
    <td align="middle" width="788" height="1" >
       <table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
        <tbody><tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="530" height="48" valign="top" >
              <p align="justify">
              <font size="4" face="Times New Roman" color="#800000">&nbsp;</font><font face="Times New Roman" color="#800000"><a name="1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><font size="4">1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED 
              PERSON AND
              <st1:place>NORMAL</st1:place> PERSONS&nbsp;</font></a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="20"  align="center">
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="530" height="20" >
              <font face="Times New Roman" size="4" color="#000080">An Incentive 
              of Rs. 25,000/- (Rs.5,000 in cash and Rs.20,000/- in the form of NSC)</font></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="183"  align="center">
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="530" height="183" ><font color="#000080"><font size="4">
              <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp; </span>
              <font face="Times New Roman">a) Annual Income : Not to exceed&nbsp;&nbsp; 
              Rs.75,000/- P.A</font></font><font face="Times New Roman" size="4">
              </font> </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              Bride : Above 18 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Bridegroom : Above 21 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Other 
              conditions</font></p>
              <blockquote>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">i)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;
                </span>Should be the first marriage</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">ii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;
                </span>Marriage should have been registered.</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be applied within 120 days after marriage&nbsp; </font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iv)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be the resident of&nbsp;
                <st1:placename>
                <st1:place>U.T. of Puducherry</st1:place>&nbsp; </st1:placename></font></p>
              </blockquote>
              </td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><font color="#000080" size="4">
	</font></a>
	<font color="#000080" size="4"><a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font>
	</strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
	<table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="629" border="1">
        <tbody><tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="48" >
              <p>
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="514" height="48" valign="top">
              <p align="justify">
              <font face="Times New Roman" color="#800000" size="4">
              <a name="2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON">
              2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED 
              PERSON</a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="20" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="514" height="20">
              <font face="Times New Roman" size="4" color="#000080">An 
              Incentive of Rs. 50,000/- (Rs.20,000 in cash and Rs.30,000/- in 
              the form of NSC)</font></td>
            </tr>
        <tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="133" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="514" height="133"><font color="#000080"><font size="4">
              <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp; </span>
              <font face="Times New Roman">a) Annual Income : Not to exceed&nbsp;&nbsp; 
              Rs.75,000/- P.A</font></font><font face="Times New Roman" size="4">
              </font> </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              Bride : Above 18 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Bridegroom : Above 21 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Other 
              conditions</font></p>
              <blockquote>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">i)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;
                </span>Should 
                be the first marriage</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">ii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;
                </span>Marriage 
                should have been registered.</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp; </span>Should 
                be applied within 120 days after marriage&nbsp; </font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iv)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be the resident of&nbsp;
                <st1:placename>
                <st1:place>U.T. of Puducherry</st1:place>&nbsp; </st1:placename></font></p>
              </blockquote>
              </td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
	<table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
        <tbody><tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="525" valign="top">
              <p align="justify">
              <font face="Times New Roman" color="#800000" size="4">
              <a name="3. GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES">
              3. GRANT OF FUEL SUBSIDY TO DIIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES</a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="57" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="525">
              <font face="Times New Roman" size="4" color="#000080">50 % of 
              the cost of fuel subject to a maximum of 25 Litres</font></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="1" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="525">
              <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 
              a) Annual Income : Not to exceed&nbsp;&nbsp; Rs.75,000/- </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              No restriction</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) No 
              Educational qualification</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Residence 
              : Not less than 5 years.</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">f) Vehicle 
              should be in the name of the&nbsp; beneficiary.</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">g) The 
              beneficiary should have valid&nbsp;driving licence. </font></p></td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="399" >
    <table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
      <tbody><tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="48" >
        <p>
	<font face="Times New Roman" color="#000080" size="4"><b>
        Description of the Scheme</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="48" >
        <p align="justify">
	<font face="Times New Roman" color="#800000" size="4">
        <a name="4. GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON">4. 
        GRANT OF FINANCIAL ASSISTANCE 
        TO DIFFERENTLY ABLED PERSON</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="57" >
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">Disability Range 40% 
        - 65%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.1500/- pm<br>
        Disability Range 66% - 85%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.2000/- pm<br>
        Disability Range 86% - 100%&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.3000/- pm</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="1" >
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">a) 
        Annual income : Not to exceed Rs.75,000/- per annum</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">b) Age : No 
        restriction </font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">c) Disability : Ortho : 40% 
        and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deaf and Dumb 
        : 40% and above </font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blind : 40% 
        and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mentally 
        retarded : I. Q below 69</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">d) Residence : 
        Not less than 5 years.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td valign="top" width="788" bgcolor="#ffffff" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td width="788" height="341" >
    <div align="right">
      <table class="paleBlueRows" width="100%" border="0">
        <tbody><tr>
          <td align="middle" width="100%">
          <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
            <tbody><tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of 
              the Scheme</b></font></p></td>
              <td align="left" width="528" valign="top">
              <p align="justify">
              <font color="#800000">
              <a name="5. AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED STUDENTS">
              <span style="font-family: Times New Roman"><font size="4">5.
              </font>
              </span><font face="Times New Roman" size="4">AWARD OF SCHOLARSHIP TO 
              DIFFERENTLY ABLED PERSON&nbsp; STUDENTS</font></a></font></p></td>
            </tr>
            <tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="57" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
              <td valign="top" width="528">
              <font face="Times New Roman" size="4" color="#000080">Scholarship to differently abled 
              person 
              students at the following rates. </font>
              <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I – V 
              Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Rs.1000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VI – VIII Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.2000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; IX – XII Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.3400/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; U.G. Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Rs.5000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P.G / Professional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.6800/- p.a </font></p></td>
            </tr>
            <tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="1" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
              <td width="528">
              <font face="Times New Roman" size="4" color="#000080">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a) 
              Annual&nbsp; income should be Rs.75,000/-<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b) Age : Not less than 5 years<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c) Disability : 40% and above<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d) Residence : Not less than 5 years </font></td>
            </tr>
          </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </div>
    </td>
  </tr>
  <tr>
    <td width="788" height="12" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="322" >
    <table class="paleBlueRows" bordercolor="#000080" height="227" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <font color="#800000">
        <a name="6. INCENTIVE FOR EYE DONARS">
        <span style="font-family: Times New Roman"><font size="4">6. </font> </span>
        <font face="Times New Roman" size="4">INCENTIVE FOR EYE DONORS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="28" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="28">
        <font face="Times New Roman" size="4" color="#000080">A cash incentive of Rs.10,000/-&nbsp; to the 
        nearer relation&nbsp; of the eye donor.&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 1. No 
        income limit </font>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">2. Age limit : (18 years and 
        above)</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">3. Residence : Not less than 5 
        years.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">4. The person who is claiming the 
        incentive for eye donation must</font></p>
	<p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; be a close 
	relative of eye donor.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">5. Transplantation of eye should 
        have taken place.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">6. Should be apply with in 90 days 
        after the transplantation.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="327" >
    <table class="paleBlueRows" bordercolor="#000080" height="231" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="530" height="48" valign="top">
        <font color="#800000">
        <a name="7. REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES">
        <span style="font-family: Times New Roman"><font size="4">7. </font> </span>
        <font face="Times New Roman" size="4">REIMBURSEMENT OF MAINTENANCE COST OF 
        TRICYCLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="32" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="530" height="32">
        <font face="Times New Roman" size="4" color="#000080">Rs.200/- p.a towards maintenance 
        of Tricycles.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="530" height="133">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp; 1. Income Limit : Nil </font>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">2. Age. No 
        Restriction</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">3. Disability : 
        40% and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">4. Residence : 
        Not less than 5 years</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: left; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">5. Tricycle should have been 
        supplied /donated by the Department </font></p>
	<p class="MsoBodyText" style="text-indent: -2.75in; text-align: left; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 
	/NGO’s at free of cost.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 6. Should produce the 
        receipt of repair&nbsp;charges bill by their names.</font></p><p>&nbsp;</p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="205" >
    <table class="paleBlueRows" bordercolor="#000080" height="167" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <font color="#800000">
        <a name="8. SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">8. </font> </span>
        <font face="Times New Roman" size="4">SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED 
        PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="23" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="23">
        <font face="Times New Roman" size="4" color="#000080">Sarees and dhotis during Deepavali 
        / Local&nbsp;regional festivals.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="78" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="78">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Age : 18 years and above<br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Disability : 40% and above<br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. 
        Should have registered their name in the local Anganwadi&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; centre.<br>
&nbsp;</font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="338" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <font color="#800000">
        <a name="9. STATE AWARD FOR THE WELFARE OF THE HANDICAPPED">
        <span style="font-family: Times New Roman"><font size="4">9. </font> </span>
        <font face="Times New Roman" size="4">STATE AWARD FOR THE WELFARE OF THE 
        HANDICAPPED&nbsp;</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">State awards as follows:</font></p>
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">1.<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;</span>Outstanding 
        differently abled person Govt/ Private Employee&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
&nbsp;&nbsp;&nbsp;&nbsp; and Self- employed persons &nbsp;&nbsp; Rs.10,000/-</font></p>
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">2.<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;</span>Individual 
        serving for the cause of the Differently abled person&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp; Rs.15,000/-</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;Institutions serving 
        for the cause of the differently abled&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; person&nbsp;&nbsp; is Rs.&nbsp; 25,000/-&nbsp;&nbsp; (Subject to 
        final selection by 
        the <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; State Level Committee)<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 1. Income 
        Limit : Nil </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 2. Age : No restriction&nbsp;</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 3. 
        Disability : 40 % and above <br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="262" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="10. SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">10. </font> </span>
        <font face="Times New Roman" size="4">SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED 
        PERSONS</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;Prosthetic appliances like calipers, Tricycles, Crutches, hearing aid 
        spectacles / low vision aids, etc on the advice of the specialists 
        concerned attached to the Govt. General Hospital Pondicherry /Karaikal / 
        Mahe / Yanam.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Annual 
        income : Not to exceed Rs.75,000/- per annum </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Age : No restriction</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Disability : 40% and 
        above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Residence : Not less 
        than 5 years.<br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="231" >
    <table class="paleBlueRows" bordercolor="#000080" height="225" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="11. ISSUE OF FREE BUS PASS TO DIFFERENTLY ABLED PERSON">
        <span style="font-family: Times New Roman"><font size="4">11. </font> </span>
        <font face="Times New Roman" size="4">ISSUE OF FREE BUS PASS TO DIFFERENTLY 
        ABLED PERSON</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="26" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="26">
        <font face="Times New Roman" size="4" color="#000080">Free bus pass to all differently 
        abled&nbsp; 
        person persons for use within the union territory<br>
&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 
        1. Annual Income : Not to exceed Rs.75,000/- p.a </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 2. Age : No restriction</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 3. Disability : 40% and 
        above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 4. Residence : Not less 
        than 5 years <br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="395" >
    <table class="paleBlueRows" bordercolor="#000080" height="233" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="525" height="48" valign="top">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS">12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS</a></font></td>
      </tr>
      <tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="34" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" align="left">
        <p class="MsoBodyText" style="margin-left: 0.5in">
        <font face="Times New Roman" size="4" color="#000080">Free tour to various places yearly 
        once. (Subject to selection)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="525" height="133">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;1. Age : 18 – 50 years </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;2. Disability : 
        40% and above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;3. Should not be 
        a Govt. Servant</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;4. The 
        applicant’s parent should not be a Govt. servant.<br>
&nbsp;&nbsp;&nbsp;&nbsp; Annual income : Below 75,000/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;5. The applicant should not attended the tour for the past ten years.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;6. The applicant 
        should not be affected by contagious diseases.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;7. Drugs and 
        alcoholic items are prohibited.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;8. Applicant 
        should register his / her name in the Anganwadi centre. </font>
        </p><p>&nbsp;</p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="142" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="13. INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON">13. 
        INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON </a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Celebration of International Day for the disabled with various 
        competitions and programme with free lunch on 3<sup>rd</sup> December 
        every year.<br>
&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;1. 
        All disabled persons&nbsp; may participate</font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="281" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="14. GROUP INSURANCE FOR DIFFERENTLY ABLED PERSON GOVERNMENT EMPLOYEES.">14. GROUP 
        INSURANCE FOR DIFFERENTLY ABLED PRSON&nbsp; GOVERNMENT EMPLOYEES.</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528"><font color="#000080"><font size="4">
        <span style="font-family: Times New Roman">In case of death due to 
        accident while in </span><font face="Times New Roman">service the sum insured as follows will be 
        given to the family of the deceased employee.</font></font><font face="Times New Roman" size="4">
        </font> </font>
        <p><font size="4" color="#000080" face="Times New Roman">&nbsp; Group 
        A…………..Rs.1,20,000/-</font></p>
        <p><font size="4" color="#000080" face="Times New Roman">&nbsp; Group B…………..Rs. 60,000/-</font></p>
        <p><font size="4" color="#000080"><font face="Times New Roman">&nbsp; Group C…………&nbsp; Rs. 30,000/-</font><span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;</span></font></p><p>
	<font size="4" color="#000080"><font face="Times New Roman">&nbsp; 
        Group D…………&nbsp; Rs. 15,000/-</font><span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font color="#000080"><font size="4">
        <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><font face="Times New Roman"> 
        1. Must be a government Servant&nbsp;</font></font><font face="Times New Roman" size="4">
        </font> </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;2. Disability : 
        40 % and above </font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="146" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="15. INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF PONDICHERRY 2004">
        <font face="Times New Roman" size="4">15</font><span style="font-family: Times New Roman"><font size="4">.INSURANCE 
        SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF 
        PONDICHERRY 2004</font></span></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top">
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Times New Roman" color="#000080" size="4">1
        &nbsp;In case of death due to accident an amount of &nbsp;&nbsp;&nbsp;Rs.25,000/- will be provided.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp;2. &nbsp;&nbsp;In case of 
        physical separation of one limp/ 1 Leg or 1 Eye due to accident, an&nbsp; 
        amount of Rs.12,500/- will be paid.</font></p>
        <p class="MsoBodyTextIndent2">
        &nbsp;</p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp;&nbsp; 1. Age – 5 
        to 74 </font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;2. Disability : 40% 
        and above</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;3. For all 
        Disability Person</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;4. Residence not 
        less than 5 years.</font></p></td>
      </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="369" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="16. THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">16. </font> </span>
        <font face="Times New Roman" size="4">THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ 
        SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED 
        PERSONS</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">
        Funeral Expenses to Deceased differently abled persons for Rs.5,000/-</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Disability : 40% and above&nbsp; </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Annual income : Below 
	75,000/-&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Son/ Daughter / Spouse or any other relative under 
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; whose care and &nbsp; maintenance. The differently abled
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        person persons was living at the 
        time of his / her death.<o:p> </o:p>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Residence not less than 5 years.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> No age limit&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        The application shall be made 30 days from the date of <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; death of 
        the&nbsp; differently abled person persons.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="352" >
    <table class="paleBlueRows" bordercolor="#000080" height="346" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS WITH DISABILITIES">
        17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS 
        WITH DISABILITIES</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="33" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="33">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">Invalid carriages (Motorized 
        Tri-cycles) Free of cost to persons with disabilities.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="247" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="247">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Disability : Loco motor Disability with affecting lower <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; limbs not less 
        than 65%</font><p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        Annual income : Below 75,000 of his/ her parent’s or <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; guardian’s.
        </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Residence not less than 5 years.&nbsp;&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> He / she should be certified by Medical Authority that he / <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; she 
        is fit for operating the Invalid Carriage (Motorized Tri-<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cycle) </font>
        </p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp; </span>Should not be in receipt of Transport Allowance for 
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conveyance 
        from the&nbsp; Department or from any other <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; source.&nbsp;</font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;
        </span>He / she should be in 
        gainful Employee / Pursue higher <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; study.&nbsp; </font>
        <span style="font-size: 14pt">
        <o:p><br>
&nbsp;</o:p></span></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="136" >
    <table class="paleBlueRows" bordercolor="#000080" height="130" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <a name="18. SUPPLY OF MUSICAL / SPORTS ITEMS  TO PH WELFARE ASSOCIATIONS">
        <font size="4" face="Times New Roman" color="#800000">18. SUPPLY OF MUSICAL / SPORTS ITEMS</font><font face="Tahoma" color="#800000" size="4"><span style="font-family: Times New Roman">&nbsp;
        </span></font>
        <font size="4" face="Times New Roman" color="#800000">TO PH WELFARE ASSOCIATIONS</font></a></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="25" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="25">
        <font face="Times New Roman" size="4" color="#000080">Music / Sports articles to 
        recognized PH welfare Associations</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="39" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="39">
        <font face="Times New Roman" size="4" color="#000080">
        Association should 
        be registered one&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="180" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="19. ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS">19. ISSUE OF 
        IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p class="MsoBodyTextIndent2" align="justify">
        <font face="Times New Roman" size="4" color="#000080">An 
        identity card is being issued to all the disabled person persons indicating 
        their personal details for ready reference to avail the benefits of 
        welfare scheme.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. 
        Disability : 40% and above&nbsp; </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        2. Income Limit : Below Rs.75,000/- p.a</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">
	</font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="381" >
    <table class="paleBlueRows" bordercolor="#000080" height="132" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS">20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="28" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="28">
        <font face="Times New Roman" size="4" color="#000080">Sum of Rs.100/- per month through 
        Anganwadi centres.</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Income&nbsp; : Less than 75,000/- </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Age : Above 5 years </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Disability : 40% and above&nbsp; </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> No formal education qualification&nbsp; </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Residence : Not less than 5 years </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>If they have got free bus pass means the same should be 
        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; surrendered to the&nbsp; Directorate of Social Welfare. </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Declaration in the Application whether he / she wants to avail 
        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free Bus Pass&nbsp; or Traveling Allowance should be submitted.<o:p>
        <br>
&nbsp;</o:p></font></p></td>
      </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="35" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">Back</font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="35" >
    <table class="paleBlueRows" bordercolor="#000080" height="132" width="623" border="1" >
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <br>
	<font face="Times New Roman" color="#800000" size="4">
        <a name="21. SUPPLY OF RADIO TO THE BLIND PERSONS">21. SUPPLY OF RADIO 
        TO THE BLIND PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="38" >
        <font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></td>
        <td width="528" height="38" valign="top">
        <font face="Times New Roman" color="#000080" size="4">One Radio to the Blind 
        person for recreation</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></td>
        <td width="528" height="133">
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">1. Income:&nbsp; Less than 75,000/-</span></font></p>
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">2. Disability: 40% and above</span></font></p>
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">3.Residence: Not less than 5&nbsp; years</span></font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">Back</font></span></a></font></strong></font></p><div align="center">
      <center>
    <p align="right">&nbsp;</p>
    <table class="paleBlueRows" border="1" cellspacing="1" bordercolor="#000080" width="100%" id="AutoNumber2" bordercolorlight="#000080" bordercolordark="#000080">
      <tbody><tr>
        <td width="100%" style="border-style:solid; border-width:1px; ">
        <h2><font face="Times New Roman" color="#000080" size="4">HOMES/SPECIAL 
	SCHOOLS FOR THE DIFFERENTLY ABLED PERSON</font></h2>
        <p class="MsoNormal" align="center" style="margin-left:225.0pt;text-align:center;
text-indent:-225.0pt"><font face="Bookman Old Style" color="#000080" size="4"><u>
        <span style="text-decoration: none; font-family: Times New Roman">&nbsp;</span></u></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">1. SPECIAL SCHOOL 
	FOR VISUALLY HANDICAPPED &amp; HEARING IMPAIRED, </span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Bookman Old Style" color="#000080">
	<span style="font-family:&quot;Times New Roman&quot;"><font size="4">&nbsp; 
	PONDICHERRY AND KARAIKAL</font></span></font><font face="Bookman Old Style" color="#000080" size="4"><span style="font-family:&quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="justify">
        <font face="Times New Roman" color="#000080" size="4">
        Benefits available : Special education upto 10<sup>th</sup> std.&nbsp; 
	Free of cost with free board and lodging.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	:&nbsp; 1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;2. Age: 5-10 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;3. Disability: Deaf &amp; Dumb, Blind only.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;4. Residence:&nbsp; Not compulsory</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">2.&nbsp; HOME FOR 
	MENTALLY RETARDED CHILDREN, PONDICERRY&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="justify">
        <font face="Times New Roman" color="#000080" size="4">   Benefits 
	available : Rehabilitation of Mentally retarded children with special 
	education, free board &amp; lodging.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 
	1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	2. Age: 5-15 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	3. Disability : Mentally <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; retarded&nbsp;&nbsp; 
	only</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	4. Residence : Not compulsory</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">&nbsp;</span></font></p>
       
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        Benefits available : To ensure welfare and rehabilitation of the&nbsp; 
	blind&nbsp; Adult through vocational training&nbsp; with&nbsp; free&nbsp; 
	board and lodging.&nbsp;</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 
	1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 
	Age: above 18 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. 
	Disability: 100%</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. 
	Residence: Not Compulsory</font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span><span style="font-weight: 700">OTHER&nbsp; 
	SCHEMES</span></font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight: 700">1.GRAMIN&nbsp; PUNARVAS&nbsp; YOJANA</span></font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        <p class="MsoBodyText" style="text-align:justify;text-indent:.5in">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">This is centrally&nbsp; sponsored&nbsp; 
	Scheme&nbsp; under&nbsp; which a&nbsp; Composite&nbsp; Fitment&nbsp;&nbsp; 
	Centre&nbsp;&nbsp; already&nbsp;&nbsp; established&nbsp; at&nbsp;&nbsp; 
	No.89A,&nbsp; 4th Cross, Jawahar Nagar, Puducherry Ph-0413 2203885.&nbsp; 
	This Centre&nbsp;&nbsp; functioning&nbsp;&nbsp; under the&nbsp; Control 
	of&nbsp; Directorate of Social Welfare, Puduchery. </span>
        </font></p>
        <p class="MsoBodyText" style="text-align:justify">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">Benefits available&nbsp; to Differently 
	abled person&nbsp; persons:</span></font></p>
        <p class="MsoBodyText" style="text-indent: -.25in; margin-left: .75in" align="justify">
        <font color="#000080" size="4"><span style="font-weight: normal">
        <font face="Times New Roman">1.</font><span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;</span></span><font face="Times New Roman"><span style="font-weight:normal">To&nbsp; 
	provide medical&nbsp; Certificates to&nbsp; eligible&nbsp; Differently 
	abled person&nbsp; persons.</span></font></font></p>
        <p class="MsoBodyText" style="text-indent: -.25in; margin-left: .75in" align="justify">
        <font color="#000080" size="4"><span style="font-weight: normal">
        <font face="Times New Roman">2.</font><span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;</span></span><font face="Times New Roman"><span style="font-weight:normal">To 
	provide, supply, fitment and repair&nbsp; of assistive devices and to 
	extend&nbsp; rehabilitation&nbsp; services to needy Differently abled 
	person&nbsp; persons.</span></font></font></p>
        <p class="MsoBodyText">
	<font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        <p class="MsoBodyText">
	<font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight: 700">2. NATIONAL&nbsp; PROGRAMME&nbsp; FOR&nbsp; 
	REHABILITATION&nbsp; OF PERSONS WITH&nbsp; DISABILITIES</span></font></p>
        <p class="MsoBodyText" align="justify">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;This&nbsp; is a Centrally sponsored&nbsp; 
	scheme thorough&nbsp; which intensive&nbsp; rehabilitation&nbsp;&nbsp; 
	services would be provided&nbsp; at Village, Block, District and State 
	Level. The Govt. of India&nbsp; has already&nbsp; released&nbsp; 12.5 
	lakhs&nbsp; for implementing the&nbsp; Scheme.&nbsp;&nbsp; </span>
        </font></p>
        <p class="MsoBodyText" style="text-align: justify; text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        </td>
      </tr>
      </tbody></table>
      </center>
    </div>
    </td>
  </tr>
  </tbody></table>
  </div>
  </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright Silent_horn</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
