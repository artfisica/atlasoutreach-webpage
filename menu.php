<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<body>

  <CENTER>
    <p><img src="http://atlasexperiment.org/photos/atlas_photos/selected-photos/logos/2015/ATLAS-Logo-Blue-RGB.png" width="99%" style="border:0" alt="" /></p>
    <h1> <a href="./index.php">ATLAS Data&Tools release 2016</a></h1>
  </CENTER>


  <?php include('banner.html'); ?>


  <!-- Tabs  -->
  <div class="container">
    <h2>Dynamic Tabs</h2>
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
      <li><a data-toggle="tab" href="#menu1">Menu x</a></li>
      <li><a data-toggle="tab" href="#menu2">Menu y</a></li>
      <li><a data-toggle="tab" href="#menu3">Menu z</a></li>
    </ul>

    <CENTER>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>HOME</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <iframe width="100%" height="1000" src="http://iktp.tu-dresden.de/~fthomas/Outreach/CrossFilter/crossfilter.html" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>Menu 1</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <iframe width="100%" height="1000" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/DataAndTools_cpp_notebook_03_2016_example01_v0.0.ipynb" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          <iframe src="https://artfisica.gitbooks.io/atlas-complete-sample-production-run2/content/" width="100%" height="1000" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <iframe width="100%" height="1000" src="http://nbviewer.jupyter.org/github/artfisica/swanExamples/blob/master/notebooks/CMSDimuon_py.ipynb" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </CENTER>
  </div>

  <?php include('trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('footer.html'); ?>
</footer>
</html>
