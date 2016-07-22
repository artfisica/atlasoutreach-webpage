<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 2: <b>Web Analysis</b> - ROOTbooks!</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_web_analysis.png" alt="Web Analysis - ROOTbooks" style="width:100%">
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <div class="embed-responsive embed-responsive-16by9" >
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jDC3-QSiLB4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
      <a href="./ROOTbooks.php"     class="btn btn-primary" style="font-size:150%;">ROOT notebooks</a>
      <a href="./ROOTbooks.php#external_binder"  class="btn btn-primary" style="font-size:150%;">Executable ROOTbook!</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 2.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Check our ROOTBooks!</b></h1>
  </div>

  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu0">ROOTbooks <b>main examples</b></a></li>
      <li>               <a data-toggle="tab" href="#menu1">In <b>C++</b></a></li>
      <li>               <a data-toggle="tab" href="#menu2">In <b>Python</b></a></li>
      <li>               <a data-toggle="tab" href="#menu3">External <b>Viewers</b></a></li>
      <li>               <a data-toggle="tab" href="#menu4">Executable <b>ROOTbooks</b></a></li>
    </ul>


    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <CENTER>
          <h1><b>Main Examples (Python & C++)</b></h1>
          <p style="font-size:120%;">Click in the logo of your favorite language</p>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="600" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/index.ipynb" frameborder="0" allowfullscreen></iframe> <!--  scrolling="no" -->
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu1" class="tab-pane fade">
        <CENTER>
          <h1><b>ROOTbook in C++</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="600" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/DataAndTools_cpp_notebook_03_2016_example01_v0.0.ipynb" frameborder="0" allowfullscreen></iframe>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu2" class="tab-pane fade">
        <CENTER>
          <h1><b>ROOTbook in Python</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="600" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/PyROOT_Example.ipynb" frameborder="0" allowfullscreen></iframe>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu3" class="tab-pane fade">
        <CENTER>
          <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
            <h1><b>External Viewers</b></h1>
            <p style="font-size:120%;">Check our examples in the Official ROOT gallery or in the Jupyter Viewer for an even easier access</p>
          </div>
          <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
            <div class="btn-group btn-group-justified">
              <a href="https://swan.web.cern.ch/content/basic-examples"                               target="_blank" class="btn btn-primary" style="font-size:150%;">Official ROOT Gallery</a>
              <a href="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks" target="_blank" class="btn btn-primary" style="font-size:150%;">Jupyter Viewer</a>
            </div>
          </div>
        </CENTER>
      </div>
      <div id="menu4" class="tab-pane fade">
        <CENTER>
          <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
            <h1><b>Executable ROOTbooks</b></h1>
            <p style="font-size:120%;">Execute, edit, and save ROOTbooks using our datasets and examples.
              You can create your own notebooks as well!</p>
            </div>
            <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
              <a href="http://mybinder.org/repo/artfisica/rootbinder" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/binder_view.png" style="width:60%" alt="binder ROOTbooks"></a>
            </div>
          </CENTER>
        </div>
      </div>
      <!-- end of tabs -->
    </div>
    <hr>

    <?php include('../menu.html'); ?>

    <?php include('../trackers.html'); ?>
  </body>
  <!-- End main body -->

  <footer>
    <?php include('../footer.html'); ?>
  </footer>
  </html>
