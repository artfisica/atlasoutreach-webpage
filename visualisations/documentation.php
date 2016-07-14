<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 1: <b>Get Started</b> - Documentation</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png" alt="Get Started - Docs" style="width:100%">
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jDC3-QSiLB4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- -->

  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Take a look at our Book!</b></h1>
  </div>

  <div style="width:100%; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#docs">Open/Close the Book</button>
    <div id="docs" class="collapse in">
      <iframe width="100%" height="600" src="https://cheatham1.gitbooks.io/app-analyser/content/index.html" frameborder="0" allowfullscreen></iframe>
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
