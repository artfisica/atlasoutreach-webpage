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
          <p style="font-family:verdana; font-size:140%; align:right;">You can download the complete software framework in compressed file (ZIP file), or check and download it in our dedicated GitHub repository. With this last option, you have the opportunity to browse the files, and get a deeper view even before click "download"</p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_toolbox.png" alt="Data & Tools - VMs" style="width:100%">
        </td>
      </tr>
    </table>
  </div>
  <!-- -->
  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu0">in <b>GitHub</b></a></li>
      <li>               <a data-toggle="tab" href="#menu1">as <b>ZIP</b> file</a></li>
    </ul>


    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <CENTER>
          <h1><b>Software in GitHub</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <a href="https://github.com/atlas-outreach-data-tools/atlas-outreach-data-tools-framework/releases/tag/V1.0" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/github_view.png" alt=""></a>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu1" class="tab-pane fade">
        <CENTER>
          <h1><b>Software in ZIP file</b></h1>
          <br>
          <br>
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
              <td>XMb</td>
            </tr>
          </table>
        </CENTER>
      </div>
    </div>
  </div>


  <?php include('../menu.html'); ?>

  <?php include('../trackers.html'); ?>
</body>
<!-- End main body -->


<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
