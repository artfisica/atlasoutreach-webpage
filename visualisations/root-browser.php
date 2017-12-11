<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>

  <script >
  function refreshIframe() {
    var ifr = document.getElementsByName('browser')[0];
    ifr.src = ifr.src;
  }
  </script>

  <script >
  function refreshAnalysis() {
    var ifr = document.getElementsByName('analysis')[0];
    ifr.src = ifr.src;
  }
  </script>

<script >
  function refreshATLAS() {
    var ifr = document.getElementsByName('atlasframe')[0];
    ifr.src = ifr.src;
  }
  </script>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;"><b>Get Started</b> - Analysis Browser</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <p style="font-family:verdana; font-size:120%; text-align: left;">
            <b>Look into the plots!</b>
            A web based <b>tool for displaying and analysing data and Monte-Carlo</b> simulated data.
            Select a dataset using the drop-down menu <i>(second text box)</i> or a complete physics analysis tab:
            It is like <b>a <i>live</i> scientific paper!</b> click into the plot, zoom into the data-points, set a logaritmic scale and more.
          </p>
          <p style="font-family:verdana; font-size:110%; text-align: left;">
            <i>Do you want to know more?</i> Check the <b><a href="./documentation.php" target="_blank">Documentation</a></b>
          </p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_ROOTbrowser.png" alt="Get Started - Histograms App Analyser" style="width:100%">
        </td>
      </tr>
    </table>
  </div>
  <!-- End header-->


  <!-- Navegation buttons bar -->
  <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.5cm 2.0cm; float:left; clear:both;">
    <div class="btn-group btn-group-justified">
      <a href="./documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
      <a href="./analyser-js.php"   class="btn btn-primary" style="font-size:150%;">Histograms Analyser</a>
      <a href="./root-browser.php"  class="btn btn-primary" style="font-size:150%;">Analysis Browser</a>
      <a href="./live-events.php"   class="btn btn-primary" style="font-size:150%;">Live Events</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->

  <!-- Tabs -->
  <div style="width:100%; padding: 0.4cm 0.5% 0cm 0.5%; clear:both; text-align:left; float:left; margin:0px auto;">
    <div class="container">
      <!-- <h2>Dynamic Tabs</h2>-->
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu0"><b>The ATLAS detector</b></a></li>
        <li>               <a data-toggle="tab" href="#menu1"><b>Top Pair physics analysis</b></a></li>
        <li>               <a data-toggle="tab" href="#menu2"><b>ROOTbrowser</b></a></li>
      </ul>

      <div class="tab-content">
        <div id="menu0" class="tab-pane fade in active">
          <div style="width:100%; padding: 0.1cm 0% 0.1cm 0%; float:left; clear:both;">
            <!-- This is the Frame of the ROOTbrowser for the ATLAS detector-->
            <br>
              <p><b>Note:</b> take into account that the ATLAS visualization can take several seconds to load (~15 to ~30 sec) please, be patient! (updated on July 2017)</p>
            </br>
            <iframe name="atlasframe" width="100%" height="600" src="./JsRoot460/?nobrowser&file=../atlas_detector/atlas.root&item=atlas;1&opt=clipxyz" frameborder="0" allowfullscreen></iframe>
            <br>
              <button onclick="refreshATLAS();">you don't see the ATLAS detector after ~10-30 seconds? click here to refresh it!</button>
            </br>
            <hr>
          </div>
        </div>
        <div id="menu1" class="tab-pane fade">
          <div style="width:100%; padding: 0.1cm 0% 0.1cm 0%; float:left; clear:both;">
            <!-- This is the Frame of the Top Pair Analysis-->
            <br>
              <button onclick="refreshAnalysis();">you don't see the plots? click here to refresh the paper!</button>
            </br>
            <iframe name="analysis" width="100%" height="2300px" src="./analysis/top.html" frameborder="0" allowfullscreen></iframe>
            <hr>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div style="width:100%; padding: 0.1cm 0% 0.1cm 0%; float:left; clear:both;">
            <!-- This is the Frame of the ROOTbrowser-->
            <br>
              <button onclick="refreshIframe();">you don't see the ROOTbrowser? click here to refresh it!</button>
            </br>
            <br>
              <p><b>Note:</b> the current set of histograms and plots correspond to the Top Quark Pair Analysis (updated July 2017)</p>
            </br>
            <iframe name="browser" width="100%" height="600" src="./JsRoot460/" frameborder="0" allowfullscreen></iframe>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>

  <table width="100%" border="0">
    <tr>
      <td style="width:50%; padding: 1cm 1% 1cm 10%;">
        <div style="float:left; clear:both; padding: 0.5cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
          <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
          <h1><b><a href="http://opendata.atlas.cern/books/current/get-started/_book/rootbrowser.html" target="_blank">in GitBook</a></b></h1>
        </div>
      </td>
      <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
        <div style="float:left; clear:both; padding: 0.5cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
          <p style="font-size:120%;"><b>...and don't miss the amazing examples and apps of the</b></p>
          <h1><b>official <a href="https://root.cern.ch/js/" target="_blank">ROOT JavaScript</a> Website</b></h1>
        </div>
      </td>
    </tr>
  </table>
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
