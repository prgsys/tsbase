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