<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 1: <b>Get Started</b> - Histograms Analyser</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Get Started - Histograms Analyser" style="width:100%">
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" style="border: 3px solid black;" src="https://www.youtube.com/embed/7BO4Xam4Fi4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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


  <div style="width:100%; padding: 1.2cm 10% 1.5cm 10%; clear:both; text-align:left; float:left; margin:0px auto;">
    <h1><b>Histogram Analyser!</b></h1>
    <p>
      <b>Physicists use cuts to select events of interest.</b>
      Cuts are made that preferentially remove the unwanted processes (background) but leave the desired process (signal).
      It is useful to have a good understanding of the physics processes involved when applying cuts.
      <b>The 4 processes displayed in Histogram Analyser are <i>H <span>&#8594;</span> WW</i>, <i>WW</i>, t<span style="text-decoration: overline">t</span> and <i>Z</i></b>.
      Each process is represented by a different colour.
      <b>Make cuts using your cursor</b>.
    </p>
    <p><i>Do you want to know more?</i> Check the <b><a href="./documentation.php" target="_blank">Documentation</a></b></p>
  </div>

  <div style="width:100%; padding: 0.2cm 10% 0.5cm 10%; float:left; clear:both;">
    <p style="font-size:100%;">(...it can take few seconds, please wait :)</p>
    <iframe width="100%" height="1000" src="./CrossFilter/crossfilter.html" frameborder="0" allowfullscreen></iframe>
    <hr>
  </div>

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/app-analyser/content/the_display_histograms.html" target="_blank">in GitBook</a></b></h1>
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
