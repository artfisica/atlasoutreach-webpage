<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;"><b>Get Started</b> - Live Events</h1>
    </CENTER>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <p style="font-family:verdana; font-size:120%; text-align: left;">
            <b>Public ATLAS display of real events!</b>
            Check some of the events coming from the ATLAS detector right now.
          </p>
          <p style="font-family:verdana; font-size:110%; text-align: left;">
            <i>Do you want to know more?</i> Check the <b><a href="./documentation.php" target="_blank">Documentation</a></b>
          </p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_event_display.png" alt="Get Startted - Live" style="width:100%">
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

<!--
  <div style="width:100%; padding: 1.2cm 10% 1.5cm 10%; clear:both; text-align:left; float:left; margin:0px auto;">
    <h1><b>Check that ATLAS display of real events!</b></h1>
    <p>
      Check some of the events coming from the ATLAS detector right now.
      <i>Do you want to know more?</i> Check the <b><a href="./documentation.php" target="_blank">Documentation</a></b>
    </p>
  </div>
-->

  <!-- This is the frame of the ATLAS live event display -->
  <div style="width:100%; padding: 0.2cm 2.0cm 1.0cm 2.0cm; float:left; clear:both;">
    <iframe width="100%" height="900" src="http://atlas-live.cern.ch/" frameborder="0" allowfullscreen></iframe>
    <hr>
  </div>


  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this section</a> or its dedicated resource:</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/app-analyser/content/atlas_events.html" target="_blank">in GitBook</a></b></h1>
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
