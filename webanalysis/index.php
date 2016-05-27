<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <!-- Head of page-->
  <div class="view-content" align="center">
    <table cellpadding="2" cellspacing="1" width="96%" border="0" height="550px">
      <tr>
        <td width="50%"> <!-- style="border: 1px solid black; background-color: #0b80c3;"> -->
          <h1 style="font-family:verdana; font-size:310%;">Level 2: <b>Web Analysis</b></h1>
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
    <td width="50%">
      <img src="../DataAndTools/pictures/ATLAS_imagine_initial_page_04.png" alt="Web Analysis" style="width:100%">
    </td>
  </tr>
</table>
</div>
<!-- end Head of page-->

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
        <a href="http://mybinder.org/repo/artfisica/rootbinder"><img typeof="foaf:Image" target="_blank" src="../DataAndTools/pictures/binder_view.png" alt=""></a>
      </div>
    </div>
  </CENTER>
</div>

<?php include('../menu.html'); ?>

<?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
