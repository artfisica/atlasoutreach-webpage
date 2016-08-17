<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 3: <b>Data & Tools</b> - Documentation</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png" alt="Data & Tools - Docs" style="width:100%">
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
      <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
      <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:150%;">Datasets</a>
      <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:150%;">Software</a>
      <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:150%;">Virtual Machines</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Take a look at our Books!</b></h1>
  </div>

  <CENTER>
    <div style="width:100%; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#book1" style="font-size:200%;">Open/Close Software Book</button>
      <div id="book1" class="collapse" style="padding: 2.0cm 0.5cm 1.0cm 0.5cm;">
        <iframe width="100%" height="600" src="https://cheatham1.gitbooks.io/openatlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
        <hr>
      </div>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#book2" style="font-size:200%;">Open/Close Virtual Machine Book</button>
      <div id="book2" class="collapse" style="padding: 2.0cm 0.5cm 1.0cm 0.5cm;">
        <iframe width="100%" height="600" src="https://cheatham1.gitbooks.io/atlasdatatools/content/index.html" frameborder="0" allowfullscreen></iframe>
        <hr>
      </div>
    </div>
  </CENTER>


  <?php include('../menu.html'); ?>
  <?php include('../trackers.html'); ?>
  <?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
