<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 2.0cm 2.0cm 1.0cm 2.0cm; text-align: left; width:100%; margin:0px auto;">
    <h1>Level 3: <b>Data & Tools Repository - Documentation</b></h1>
  </div>

  <div style="width:100%; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#book1">Open/Close Software Book</button>
    <div id="book1" class="collapse">
      <iframe width="100%" height="600" src="https://artfisica.gitbooks.io/atlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
    </div>
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#book2">Open/Close Virtual Machine Book</button>
    <div id="book2" class="collapse">
      <iframe width="100%" height="600" src="https://artfisica.gitbooks.io/atlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
      <hr>
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
