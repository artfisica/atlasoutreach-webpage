<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>

  <div class="view-content">
    <CENTER>
      <br>
      <br>
      <a href="http://atlasoutreach.web.cern.ch/atlasoutreach/webanalysis" style="background-color:rgb(61,148,0);
      background-image:-webkit-linear-gradient(top,rgb(0,0,255),rgb(80,80,250));
      border:1px solid rgba(0,0,0,0);
      border-bottom-left-radius:2px;
      border-bottom-right-radius:2px;
      border-top-left-radius:2px;
      border-top-right-radius:2px;
      display:inline-block;
      font-size:40px;
      text-align: center;
      font-weight:bold;
      height:100px;
      line-height:100px;
      margin-right:0px;
      min-width:25%;
      outline:rgb(255,255,255) none 0px;
      padding:0px 8px;
      text-transform:uppercase;
      white-space:nowrap;
      color:white!important">Web Analysis</a>
      <br>
      <br>
      <br>
    </CENTER>
  </div>

  <?php /*include('../banner.html');*/ ?>

  <br>
  <br>
  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">ROOT notebook</a></li>
      <li><a data-toggle="tab" href="#menu1">Documentation</a></li>
      <li><a data-toggle="tab" href="#menu2">Executable notebooks</a></li>
    </ul>

    <CENTER>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <iframe width="100%" height="850" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/DataAndTools_cpp_notebook_03_2016_example01_v0.0.ipynb" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu1" class="tab-pane fade">
          <iframe width="100%" height="850" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu2" class="tab-pane fade">
          <a href="http://mybinder.org/repo/artfisica/rootbinder"><img typeof="foaf:Image" target="_blank" src="http://atlasoutreach.web.cern.ch/atlasoutreach/DataAndTools/pictures/binder_view.png" alt=""></a>
        </div>
      </div>
    </CENTER>
  </div>

  <?php include('../menu.html'); ?>

  <?php include('../forumbuttom.html'); ?>

  <?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
