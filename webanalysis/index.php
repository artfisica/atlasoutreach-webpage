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
          <h1 style="font-family:verdana; font-size:260%;">Level 2: <b>Web Analysis</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          <b>The <a href="http://atlas.cern/" target="_blank">ATLAS</a> Experiment has made <a href="../software.php" target="_blank">7 analyses available</a></b> to help you get started with your own research!
          These analyses range from measuring <b><a href="https://home.cern/about/physics/standard-model" target="_blank">Standard Model</a></b> particles such as the Higgs boson to searching for a Beyond the Standard Model particle.
          <b>Now we are in the process of making ROOT notebooks for them as well</b>. Avoid local installations by using notebooks in a <a href="https://en.wikipedia.org/wiki/OpenSaaS" target="_blank">Software as a Service</a> environment on your computer or in the Cloud.
        </p>

        <p style="font-family:verdana; font-size:120%; padding: 0.4cm 0.0cm 0.0cm 0.0cm;"><b>Explore:</b></p>

        <ul style="font-family:verdana; font-size:102%; padding: 0.1cm 1.0cm 1.0cm 1.0cm;">
          <li><b>Documentation:</b> a step-by-step guide to using, creating and executing ROOT notebooks</li>
          <li><b>ROOT notebooks (ROOTbooks):</b> use Jupyter technology and the power of ROOT to review, execute and develop your own analysis directly in your browser</li>
          <li><b>Executable ROOTbooks:</b> execute, edit and save ROOTbooks using our datasets and examples. You can create your own notebooks as well!</li>
        </ul>
      </td>
      <td style="width:50%; padding: 0.1cm 0.2cm;">
        <div class="hovereffect">
          <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_web_analysis.png" alt="Web Analysis" style="width:100%">
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
    <a href="./ROOTbooks.php"     class="btn btn-primary" style="font-size:150%;">ROOT notebooks</a>
    <a href="./ROOTbooks.php#external_binder"  class="btn btn-primary" style="font-size:150%;">Executable ROOTbook!</a>
  </div>
</div>

<div style="width:100%; text-align: center; padding: 0.0cm 1.0cm 2.0cm 1.0cm; float:left; clear:both;">
  <a href="./documentation.php"><img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png"              style="width:33%"></a>
  <a href="./ROOTbooks.php">    <img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_web_analysis.png"      style="width:33%"></a>
  <a href="./ROOTbooks.php#external_binder"> <img typeof="foaf:Image" src="/atlas-opendata/DataAndTools/pictures/handmade_externals_friends.png" style="width:33%"></a>
</div>

<?php include('../menu.html'); ?>

<?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
