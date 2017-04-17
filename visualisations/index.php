<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.5cm 1.5cm 1.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">Level 1: <b>Get Started</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          Physicists at the <a href="http://atlas.cern/" target="_blank">ATLAS</a> Experiment visualise collision data with histograms<!--plots and graphs-->.
          They are used in every publication, from simple analyses to headline-making discoveries.

          <i>In this section</i>, you will learn how the data is visualised.
        </p>

        <p style="font-family:verdana; font-size:120%; padding: 0.4cm 0.0cm 0.0cm 0.0cm;"><b>Explore:</b></p>

        <ul style="font-family:verdana; font-size:102%; padding: 0.1cm 1.0cm 1.0cm 1.0cm;">
          <li><b>Documentation:</b> a step-by-step guide to using Histogram Analyser and Analysis browser</li>
          <li><b>Histogram Analyser:</b> a web based tool for fast, cut-based analysis of data. Visualise data using online histograms</li>
          <li><b>Analysis browser:</b> a web based tool for displaying histograms individually. More freedom to plot different variables</li>
          <li><b>Live events:</b> see live events from the ATLAS experiment</li>
        </ul>
      </td>
      <td style="width:50%; padding: 0.1cm 0.2cm;">
        <div class="hovereffect">
          <a class="video-1" href="https://www.youtube.com/watch?v=uB_v-D2pBu8">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%"></a>
            <img border="0" src="/atlas-opendata/DataAndTools/pictures/youtube_icon.png" alt="" width="12%" height="18%" style="position: absolute; top: 41%; right: 45%;">
          <div class="overlay" style="background-color: rgba(0,0,0,0); padding: 25% 1% 10% 40%;">
            <a class="video-1" href="https://www.youtube.com/watch?v=uB_v-D2pBu8"><img src="/atlas-opendata/DataAndTools/pictures/youtube_icon.png" style="width:35%"></a>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>
<!-- end Head of page-->

<div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
  <h1><b>Explore</b></h1>
</div>

<div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.0cm 2.0cm; float:left; clear:both;">
  <div class="btn-group btn-group-justified">
    <a href="./documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
    <a href="./analyser-js.php"   class="btn btn-primary" style="font-size:150%;">Histograms Analyser</a>
    <a href="./root-browser.php"  class="btn btn-primary" style="font-size:150%;">Analysis Browser</a>
    <a href="./live-events.php"   class="btn btn-primary" style="font-size:150%;">Live Events</a>
  </div>
</div>

<div style="width:100%; text-align: center; padding: 0.0cm 1.0cm 2.0cm 1.0cm; float:left; clear:both;">
  <a href="./documentation.php"><img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png"          style="width:24%"></a>
  <a href="./analyser-js.php">  <img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_WebAnalyser.png"   style="width:24%"></a>
  <a href="./root-browser.php"> <img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_ROOTbrowser.png"   style="width:24%"></a>
  <a href="./live-events.php">  <img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_event_display.png" style="width:24%"></a>
</div>


<?php include('../menu.html'); ?>
<?php include('../trackers.html'); ?>
<?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
