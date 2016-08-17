<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 2: <b>Web Analysis</b> - Documentation</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png" alt="Web Analysis - Docs" style="width:100%">
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" style="border: 3px solid black;" src="https://www.youtube.com/embed/qiQamiRRYKM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
      <a href="./ROOTbooks.php"     class="btn btn-primary" style="font-size:150%;">ROOTbooks</a>
      <a href="./ROOTbooks.php#external_binder"  class="btn btn-primary" style="font-size:150%;">Execute ROOTbook</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <div style="width:100%; text-align: center; padding: 1.5cm 2.0cm 1.0cm 2.0cm; float:center; clear:both;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#docs" style="font-size:150%;">Open/Close the book...</button>
    <div style="padding: 1.2cm 0.0cm 0.0cm 0.0cm;" id="docs" class="collapse"> <!-- class="collapse in"> -->
      <iframe width="100%" height="600" src="https://cheatham1.gitbooks.io/web-analysis/content/index.html" frameborder="0" allowfullscreen></iframe>
      <hr>
    </div>
  </div>

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>...or read, download and more directly</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/web-analysis/content/index.html" target="_blank">in GitBook</a></b></h1>
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
