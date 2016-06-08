<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 2.0cm 2.0cm 1.0cm 2.0cm; text-align: left; width:100%; margin:0px auto;">
    <h1>Level 2: <b>Web Analysis - Documentation</b></h1>
  </div>

  <div style="width:100%; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#docs">Open/Close the Book</button>
    <div id="docs" class="collapse in">
      <iframe width="100%" height="900" src="https://cheatham1.gitbooks.io/openatlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
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
