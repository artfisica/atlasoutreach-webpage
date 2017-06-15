<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 3: <b>Data & Tools</b> - Virtual Machines</h1>
    </CENTER>
  </div>

  <!-- Header table -->
  <div style="width:100%; text-align: center; padding: 0.4cm 5% 0.3cm 5%; float:left; clear:both;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="width:47%; padding: 0cm 0% 0.4cm 5%;">
          <p style="font-family:verdana; text-align: left;">
            Download a Virtual Machine, which include useful software, samples and tools for your analysis.
            Follow the instructions to run a Virtual Machine (<b>VM</b>) on any operating system.
          </p>
        </td>
        <td style="width:35%; text-align: left; padding: 0cm 0% 0.5cm 0%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_vm.png" alt="Data & Tools - VMs" style="width:100%">
        </td>
        <td style="width:18%; padding: 0cm 5% 0.4cm 0%;">
          <!-- Navegation buttons bar -->
          <div class="btn-group btn-group-justified">
            <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:110%;">Documentation</a>
          </div>
          <div class="btn-group btn-group-justified">
            <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:110%;">Datasets</a>
          </div>
          <div class="btn-group btn-group-justified">
            <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:110%;">Software</a>
          </div>
          <div class="btn-group btn-group-justified">
            <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:110%; color:black;">Virtual Machines &#10003;</a>
          </div>
          <!-- End navegation buttons bar -->
        </td>
      </tr>
    </table>
  </div>
  <!-- End header-->


  <!-- Tabs -->
  <div style="width:100%; padding: 0.4cm 5% 2.5cm 5%; clear:both; text-align:left; float:left; margin:0px auto;">
    <div class="container">
      <!-- <h2>Dynamic Tabs</h2>-->
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu0">VM Version <b>S</b></a></li>
        <li>               <a data-toggle="tab" href="#menu1">VM Version <b>M</b></a></li>
        <li>               <a data-toggle="tab" href="#menu2">VM Version <b>L</b></a></li>
        <li>               <a data-toggle="tab" href="#menu3">VM Version <b>N</b></a></li>
        <li>               <a data-toggle="tab" href="#menu4">VM Version <b>&mu;</b></a></li>
      </ul>

      <div class="tab-content">
        <div id="menu0" class="tab-pane fade in active">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">VM Version <b>S</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://xubuntu.org" target="_blank"> <img src="https://xubuntu.org/wp-content/themes/xubuntu-theme/xubuntu-fifteen/images/xubuntu-icon-20.png" alt="Xubuntu icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/VM_ATLAS-OpenData-ROOT6-Xubuntu-15.04_May_2017-size_S.ova">VM_ATLAS-OpenData-ROOT6-Xubuntu-15.04_May_2017-size_S.ova</a></td>
              <td>28-May-2017 03:30</td>
              <td>3,1Gb</td>
            </tr>
            <tr>
              <td><a href="http://lubuntu.net" target="_blank"> <img src="https://pbs.twimg.com/profile_images/2133277410/logo_icon_lubuntu_reasonably_small.png" alt="SL icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/Lubuntu_ATLAS_Outreach_DataAndTools_February_2017-size_S.ova">Lubuntu_ATLAS_Outreach_DataAndTools_February_2017-size_S.ova</a></td>
              <td>06-Feb-2017 01:00</td>
              <td>2,13Gb</td>
            </tr>
          </table>
          <p style="width:50%; text-align: left; padding: 3.3cm 10% 0.2cm 10%"><b>Description of 28-May-2017 VM:</b> VM-S for "<i>small</i>", it has a total size of ~3.1GB. This contains a complete Xubuntu OS 15.04, important software dependencies, the latest version of <b>ROOT6</b> v6-07-06. It does not contain datasets inside.</p>
          <p style="width:50%; text-align: left; padding: 0.2cm 10% 0.5cm 10%"><b>Description of 06-Feb-2017 VM:</b> VM-S for "<i>small</i>", it has a total size of ~2.1GB. This contains a complete Lubuntu OS 16.04, important software dependencies, the latest version of <b>ROOT5</b> v5-34-14 and 10% of the recorded data.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">VM Version <b>M</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://www.scientificlinux.org" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/sl-logo-64-white.png" alt="SL icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_M.vdi.gz">ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_M.vdi.gz</a></td>
              <td>15-Jul-2016 01:00</td>
              <td>4,5Gb</td>
            </tr>
          </table>
          <p style="width:50%; text-align: left; padding: 2.0cm 10% 0.5cm 10%"><b>Description:</b> VM-M for "<i>medium</i>", it has a compressed size of ~4.6GB, and a uncompressed size of ~11GB. This contains a complete Scientific Linux OS 6.7, important software dependencies and the latest version of ROOT v6-07-06.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">VM Version <b>L</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://www.scientificlinux.org" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/sl-logo-64-white.png" alt="SL icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_L.vdi.gz">ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_L.vdi.gz</a></td>
              <td>15-Jul-2016 01:00</td>
              <td>10,6Gb</td>
            </tr>
          </table>
          <p style="width:50%; text-align: left; padding: 2.0cm 10% 0.5cm 10%"><b>Description:</b> VM-L for "<i>large</i>", it has a compressed size of ~10.6GB, and a uncompressed size of ~22GB. This contains a complete Scientific Linux OS 6.7, important software dependencies, the latest version of ROOT v6-07-06 and the completed set of datasets of the ATLAS release (Data & MC).</p>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">VM Version <b>N</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://www.scientificlinux.org" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/sl-logo-64-white.png" alt="SL icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_N.vdi.gz">ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_N.vdi.gz</a></td>
              <td>22-Jul-2016 00:00</td>
              <td>5,2Gb</td>
            </tr>
          </table>
          <p style="width:50%; text-align: left; padding: 2.0cm 10% 0.5cm 10%"><b>Description:</b> VM-N for "<i>NET</i>" it has a compressed size of ~5.2GB, and a uncompressed size of ~17GB. This contains a complete Scientific Linux OS 6.7, important software dependencies and CVMFS access to public software repositories. We go to reduce its sizes in ~40% into the coming weeks.</p>
        </div>
        <div id="menu4" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">VM Version <b>&mu;</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://www.scientificlinux.org" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/sl-logo-64-white.png" alt="SL icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/vm/ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_micro.vdi.gz">ScientificLinux67_ATLAS_Outreach_DataAndTools_July_2016-size_micro.vdi.gz</a></td>
              <td>(~Jul-2016)</td>
              <td>(TO BE INCLUDED)</td>
            </tr>
          </table>
          <p style="width:50%; text-align: left; padding: 2.0cm 10% 0.5cm 10%"><b>Description:</b> VM-&mu; for "<i>micro</i>" with unknown sizes yet, but much smaller that VM-N or VM-S. It will contain a Linux distribution with not graphical user interface. It will have important software dependencies and the latest version of ROOT v6*</p>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/atlasdatatools/content/get_and_run_the_virtual_machine.html" target="_blank">in GitBook</a></b></h1>
  </div>
  <!-- -->


  <?php include('../menu.html'); ?>
  <?php include('../trackers.html'); ?>
  <?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
