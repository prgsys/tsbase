<?php
  ini_set("display_error", 1);
  require_once './db/dbconfig.php';
  require_once './assets/vendor/datagrid-master/lazy_mofo.php';
  require './src/php/classes/datefinder.php';
  require './src/php/classes/prod.php';
  require './src/php/classes/mk.php';
  require './src/php/classes/findtcid.php';
  require './src/php/classes/callmaria.php';
?>
<!DOCTYPE html>
<html lang="en" class="noscroll">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Title of website -->
  <title>timeScale Beta</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/vendor/bootStrap5.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"/>
  <link href="./assets/vendor/datagrid-master/style.css" rel="stylesheet">
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="./assets/vendor/select2-4.0.13/dist/css/select2.min.css" rel="stylesheet">
  <!--Custom Font-->
  <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
  <!--Homebrew CSS-->
  <link href="./assets/css/style.css" rel="stylesheet">
  <!--Homebrew JS-->
  <script src="./js/classes/frontsheet.js"></script>
  <script src="./js/classes/hours.js"></script>
  <script src="./js/classes/perdiem.js"></script>
  <script src="./js/classes/vac.js"></script>
  <script src="./js/classes/office.js"></script>
  <script src="./js/classes/reports.js"></script>
  <script src="./js/classes/customer.js"></script>
  <script src="./js/classes/prod.js"></script>
  <script src="./js/classes/expenses.js"></script>
  <script src="./js/classes/management.js"></script>
  <!-- JQuery Link -->
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <!--<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
</head>
<body id="body" class="bg-black">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
  <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
  <!--=======Header======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a> 
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active" href="index.php?main">Home</a></li>
          <li class="dropdown"><a href="#"><span>Main</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?noti">Announcements</a></li>
              <li><a href="index.php?tsuggestions">Suggestions</a></li>
              <li><a href="index.php?partrqst">Part Request</a></li>
              <li><a href="index.php?quickjob">Quick Job Lookup</a></li>
              <li><a href="index.php?technotes">Technical Notes</a></li>
              <li><a href="index.php?manual">Manual</a></li>
              <li><a href="index.php?training">Training</a></li>
              <li><a href="index.php?sops">SOP's and Policies</a></li>
              <li><a href="index.php?socialfish">Social Phishing</a></li>
              <li><a href="index.php?cleanpc">Clean My PC</a></li>
              <li><a href="index.php?projcharts">Project Charts</a></li>
              <li><a href="index.php?prodcal">Prod Calendar</a></li>
              <li><a href="index.php?patchnotes">Patch Notes</a></li>
            </ul>
          </li>
          <li><a class="nav-link " href="index.php?prod">Production</a></li>
          <li><a class="nav-link " href="index.php?calendar">Calendar</a></li>
          <li><a class="nav-link " href="index.php?prodsched">Prod Sched</a></li>
          <li><a class="nav-link " href="index.php?hours">Hours</a></li>
          <li><a class="nav-link " href="index.php?fs">Front Sheet</a></li>
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="index.php?comphier">Company Hierarchy</a></li>
              <li><a href="index.php?vacation">Vacation Request</a></li>
              <li><a href="index.php?active">Active a Program</a></li>
              <li><a href="index.php?ptocal">PTO Calculator</a></li>
              <li><a href="index.php?viewactive">View Activations</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Accounting</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a a href="index.php?rpt">Reports</a></li>
                <li><a a href="index.php?office">Office</a></li>
                <li><a a href="index.php?perdiem">Per Diem</a></li>
                <li><a a href="index.php?pl">P&L</a></li>
                <li><a a href="index.php?docs">Documents</a></li>
                <li><a a href="index.php?vacdel">Vacation Delete</a></li>
              </ul>
          </li>
          <li><a class="nav-link " href="index.php?expenses">Expenses</a></li>
          <li class="dropdown"><a href="#"><span>Management</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a a href="index.php?management">Management</a></li>
                <li><a a href="index.php?vacdel">Vacation Delete</a></li>
              </ul>
          </li>
          <li><a class="nav-link " href="index.php?cx">Customer</a></li>
          <li class="dropdown"><a href="#"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="index.php?newsercall">New Service CaLL</a></li>
                <li><a href="index.php?sers">Service Schedule</a></li>
                <li><a href="index.php?serd">Service Docs</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="index.php?helpdesk" class="btn btn-danger btn-sm" style="margin-left:8px;">Help Desk</a>
    </div>
  </header>
  <!--End Header-->
  <main id="main">
    <section id="main" class="about">
      <?php
        if(isset($_GET['prod'])){include('./src/pages/prod.php');}
        else if(isset($_GET['prodsched'])){include('./src/pages/prodschd.php');}
        else if(isset($_GET['hours'])){include('./src/pages/hours.php');}
        else if(isset($_GET['fs'])){include('./src/pages/frontsheets.php');}
        else if(isset($_GET['expenses'])){include('./src/pages/expenses.php');}
        else if(isset($_GET['cx'])){include('./src/pages/customer.php');}
        else if(isset($_GET['helpdesk'])){include('./src/pages/itsupporticket.php');}
        else if(isset($_GET['patchnotes'])){include('./src/pages/patchnotes.php');}
        else if(isset($_GET['tsuggestions'])){include('./src/pages/timescalesuggestion.php');}
        else if(isset($_GET['comphier'])){include('./src/pages/comphierarchy.php');}
        else if(isset($_GET['partrqst'])){include('./src/pages/partsRequest.php');}
        else if(isset($_GET['quickjob'])){include('./src/pages/quickjoblookup.php');}
        else if(isset($_GET['partrqstracker'])){include('./src/pages/partrqstracker.php');}
        else if(isset($_GET['addannounce'])){include('./src/pages/addannouncement.php');}
        else if(isset($_GET['vacation'])){include('./src/pages/vacationrequest.php');}
        else if(isset($_GET['active'])){include('./src/pages/activeprogram.php');}
        else if(isset($_GET['ptocal'])){include('./src/pages/ptocal.php');}
        else if(isset($_GET['viewactive'])){include('./src/pages/viewactiveprogram.php');}
        else if(isset($_GET['rpt'])){include('./src/pages/reports.php');}
        else if(isset($_GET['office'])){include('./src/pages/office.php');}
        else if(isset($_GET['perdiem'])){include('./src/pages/perdiem.php');}
        else if(isset($_GET['pl'])){include('./src/pages/pl.php');}
        else if(isset($_GET['docs'])){include('./src/pages/docs.php');}
        else if(isset($_GET['management'])){include('./src/pages/management.php');}
        else if(isset($_GET['calendar'])){include('./src/pages/calendar.php');}
        else if(isset($_GET['sers'])){include('./src/pages/serviceschedule.php');}
        else if(isset($_GET['serd'])){include('./src/pages/servicedocs.php');}
        else if(isset($_GET['technotes'])){include('./src/pages/technotes.php');}
        else if(isset($_GET['manual'])){include('./src/pages/manual.php');}
        else if(isset($_GET['training'])){include('./src/pages/training.php');}
        else if(isset($_GET['sops'])){include('./src/pages/sops.php');}
        else if(isset($_GET['socialfish'])){include('./src/pages/socialfish.php');}
        else if(isset($_GET['cleanpc'])){include('./src/pages/cleanpc.php');}
        else if(isset($_GET['projcharts'])){include('./src/pages/projcharts.php');}
        else if(isset($_GET['prodcal'])){include('./src/pages/prodcal.php');}
        else if(isset($_GET['vacdel'])){include('./src/pages/officepages/delvac.php');}
        else if(isset($_GET['addnewemp'])){include("./src/pages/officepages/addnewemp.php");}
        else if(isset($_GET['admineditc'])){include("./src/pages/officepages/editimecard.php");}
        else if(isset($_GET['admineditfs'])){include("./src/pages/officepages/editfrontsheet.php");}
        else if(isset($_GET['adminexpenses'])){include("./src/pages/officepages/editexpenses.php");}
        else if(isset($_GET['admindelvac'])){include("./src/pages/officepages/delvac.php");}
        else if(isset($_GET['adminchngsettings'])){include("./src/pages/officepages/changesettings.php");}
        else if(isset($_GET['curvacxl'])){include("./src/pages/officepages/curvacxl.php");}
        else if(isset($_GET['viewvacrqst'])){include("./src/pages/officepages/viewvac.php");}
        else if(isset($_GET['callin'])){include("./src/pages/officepages/callin.php");}
        else if(isset($_GET['newsercall'])){include("./src/pages/newservicecall.php");}
        else if(isset($_GET['updatejob'])){include("./src/pages/updateprodrecord.php");}
        else if(isset($_GET['viewjobchnge'])){include("./src/pages/viewjobchange.php");}
        else if(isset($_GET['adjhrslimit'])){include("./src/pages/managementpages/adjhrslimit.php");}
        else if(isset($_GET['mangerapprovals'])){include("./src/pages/managementpages/mangerapprovals.php");}
        else if(isset($_GET['fleet'])){include("./src/pages/managementpages/fleet.php");}
        else if(isset($_GET['editannoucement'])){include("./src/pages/managementpages/editannoucement.php");}
        else if(isset($_GET['cdl'])){include("./src/pages/managementpages/cdl.php");}
        else if(isset($_GET['nerserschuser'])){include("./src/pages/managementpages/nerserschuser.php");}
        else if(isset($_GET['mgrviewvacrqst'])){include("./src/pages/managementpages/mgrviewvacrqst.php");}
        //else if(isset($_GET['addnewemp'])){include("./src/pages/officepages/addnewemp.php");}
        //else if(isset($_GET['approvedeinedjobrqst'])){include("./src/pages/approvedeinedjobrqst.php");}
        //else if(isset($_GET['adminewexpenses'])){include("./src/pages/expenses.php");}
        else{include('./src/pages/main.php');}

        //else if(isset($_GET[''])){include("");} //Use this to add more pages to include the main index without a btn click.
      ?>
    </section>
  <!-- End xMenu Section -->

  <!-- Vendor JS Files -->
  <!--<script src="./assets/vendor/bootStrap5.3.2/js/bootstrap.bundle.min.js"></script>-->
  <!--<script src="https://cdn.skypack.dev/file-saver@2.0.5"></script>-->
  <script src="./assets/vendor/FileSaver.js-master-2.0.4/dist/FileSaver.min.js"></script>
  <script src="./assets/vendor/sheetjs-0.0.2/dist/xlsx.core.min.js"></script>
  <script src="./assets/vendor/jsPDF-master-2.5.1/dist/polyfills.umd.js"></script>
  <script src="./assets/vendor/jsPDF-master-2.5.1/dist/jspdf.umd.min.js"></script>
  <!--<script src="http://github.com/niklasvh/html2canvas.git"></script>-->
  <script src="./assets/vendor/ultimate-export-0.0.0.1/tableExport.min.js"></script>
  <script src="./assets/vendor/table-to-excel-master-1.0.4/dist/tableToExcel.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>-->
  <script src="./assets/vendor/bootStrap5.3.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
  <script src="https://momentjs.com/downloads/moment.min.js"></script>
  <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/vendor/select2-4.0.13/dist/js/select2.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>