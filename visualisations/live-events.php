<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 1: <b>Get Started</b> - Live Events</h1>
    </CENTER>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_event_display.png" alt="Get Startted - Live" style="width:100%">
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jDC3-QSiLB4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
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
      <a href="./root-browser.php"  class="btn btn-primary" style="font-size:150%;">ROOT browser</a>
      <a href="./live-events.php"   class="btn btn-primary" style="font-size:150%;">Live Events</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Check that ATLAS display of real events!</b></h1>
  </div>

  <div style="width:100%; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
    <iframe width="100%" height="900" src="http://atlas-live.cern.ch/" frameborder="0" allowfullscreen></iframe>
  </div>


  <?php include('../menu.html'); ?>

  <?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
