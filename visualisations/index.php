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
          <h1 style="font-family:verdana; font-size:310%;">Level 1: <b>Visualisations</b></h1>
        </br>
        <p style="font-family:verdana; font-size:150%;">
          <b>
            Physicists at the <a href="http://atlas.cern/">ATLAS</a> Experiment visualise </br>
            collision data with plots and graphs. </br>They are used in every publication, </br>
            from simple analyses to headline-making discoveries. </br>
          </br>
        </b>
        In this section, you will learn to use these plots to:
      </p>
      <ul style="font-family:verdana; font-size:140%;">
        <li>make comparisons to theoretical predictions</li>
        <li>examine systematic and theoretical errors</li>
      </ul>
    </td>
    <td style="width:50%; padding: 0.1cm 0.2cm;">
      <img src="../DataAndTools/pictures/ATLAS_imagine_initial_page_3.png" alt="Visualisations" style="width:100%">
    </td>
  </tr>
</table>
</div>
<!-- end Head of page-->

  <div class="container" style="padding: 2.0cm 1.5cm 1.5cm 1.5cm;">
    <h2>Documentation</h2>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#docs">Open/Close the Book</button>
    <div id="docs" class="collapse">
      <iframe width="100%" height="850" src="https://cheatham1.gitbooks.io/openatlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu0">ROOT-files Browser</a></li>
      <li><a data-toggle="tab" href="#menu1">Analysis's histogram App</a></li>
      <li><a data-toggle="tab" href="#menu2">Live events from ATLAS detector</a></li>
    </ul>

    <CENTER>
    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <iframe width="100%" height="850" src="./JsRoot450/" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="menu1" class="tab-pane fade">
        <iframe width="100%" height="850" src="./CrossFilter/crossfilter.html" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="menu2" class="tab-pane fade">
        <iframe width="100%" height="850" src="http://atlas-live.cern.ch/" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </CENTER>
</div>
<!-- End of Tabs -->

<?php include('../menu.html'); ?>

<?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
