<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 3: <b>Data & Tools</b> - Software Repository</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <p style="font-family:verdana; font-size:140%; text-align: left;">
            You can download the complete software framework in a <i>.ZIP</i> file.
            Alternatively, download it from our dedicated
            <a href="https://github.com/atlas-outreach-data-tools/atlas-outreach-data-tools-framework/releases/tag/V1.0" target="_blank">GitHub</a> repository where you can also browse the files.
          </p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_toolbox.png" alt="Data & Tools - VMs" style="width:100%">
        </td>
      </tr>
    </table>
  </div>
  <!-- End header-->


  <!-- Navegation buttons bar -->
  <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.5cm 2.0cm; float:left; clear:both;">
    <div class="btn-group btn-group-justified">
      <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
      <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:150%;">Datasets</a>
      <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:150%;">Software</a>
      <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:150%;">Virtual Machines</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <!-- Tabs -->
  <div style="width:100%; padding: 1.2cm 8% 2.5cm 8%; clear:both; text-align:left; float:left; margin:0px auto;">
    <div class="container">
      <!-- <h2>Dynamic Tabs</h2>-->
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu0">in <b>GitHub</b></a></li>
        <li>               <a data-toggle="tab" href="#menu1">as <b>ZIP</b> file</a></li>
      </ul>


      <div class="tab-content">
        <div id="menu0" class="tab-pane fade in active">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;"><b>Software in GitHub</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <a href="https://github.com/atlas-outreach-data-tools/atlas-outreach-data-tools-framework/releases/tag/V1.0" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/github_view.png" alt=""></a>
            </CENTER>
          </div>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;"><b>Software in ZIP file</b></h1>
          <table style="width:100%" >
            <tr>
              <th>   File type</th>
              <th>   Name</th>
              <th>   Last modified</th>
              <th>   Size</th>
            </tr>
            <tr>
              <td><a href="https://www.python.org" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/python_logo.png" alt="python icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="https://github.com/atlas-outreach-data-tools/atlas-outreach-data-tools-framework/archive/V1.0.zip">python_framework_code_June_2016_V1.0.zip</a></td>
              <!-- ../release/code/python_framework_code_June_2016.zip -->
              <td>08-Jun-2016 20:00</td>
              <td>44,0Kb</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/openatlasdatatools/content/take_a_look_at_the_data.html" target="_blank">in GitBook</a></b></h1>
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
