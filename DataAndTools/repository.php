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
          <h1 style="font-family:verdana; font-size:260%;"><b>Data & Tools Repository</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          <b>
            Here you have in a single place all the necessary pieces in order to start you physics analysis in a more complete way.
            Look into the data like an ATLAS particle physicist!
          </br>
        </b>
      </br>
        In this section, you can find where to download:

        <ul style="font-family:verdana; font-size:110%; padding: 0.5cm 1.0cm 1.0cm 1.0cm;">
          <li>The complete collection of datasets released</li>
          <li>The different analysis softwares</li>
          <li>The vitual machines to perform physics searches</li>
        </ul>
      </p>
    </td>
    <td style="width:50%; padding: 0.1cm 0.2cm;">
      <img src="./pictures/ATLAS_imagine_initial_page_1.png" alt="Repository" style="width:100%">
    </td>
  </tr>
</table>
</div>
<!-- end Head of page-->
<div style="width:100%; text-align: center; padding: 2.5cm 2.5cm 2.0cm 2.5cm;">
  <h1 style="font-family:verdana; font-size:260%;padding: 20px"><b>Downloads</b></h1>
  <div class="btn-group btn-group-justified">
    <a href="../extendedanalysis/datasets.php" class="btn btn-primary">Datasets</a> <!-- target="_blank” -->
    <a href="../extendedanalysis/software.php" class="btn btn-primary">Software</a>
    <a href="../extendedanalysis/vm-toolbox.php" class="btn btn-primary">Virtual Machines</a>
  </div>
</div>

<div style="width:100%; text-align: center; padding: 0.1cm 2.5cm 2.0cm 2.5cm;">
  <h1 style="font-family:verdana; font-size:260%;padding: 20px">...or get them at <b>CERN <a href="http://opendata.cern.ch" target="_blank">OpenData</a></b> portal</h1>
  <div class="btn-group btn-group-justified">
    <a href="http://opendata.cern.ch/education/ATLAS" target="_blank" class="btn btn-primary">Datasets</a>
    <a href="http://opendata.cern.ch/education/ATLAS" target="_blank" class="btn btn-primary">Software</a>
    <a href="http://opendata.cern.ch/education/ATLAS" target="_blank" class="btn btn-primary">Virtual Machines</a>
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
