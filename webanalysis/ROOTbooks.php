<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 2.0cm 2.0cm 1.0cm 2.0cm; text-align: left; width:100%; margin:0px auto;">
    <h1>Level 2: <b>Web Analysis - ROOTbooks viewer</b></h1>
  </div>


  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#menu0">ROOTbooks <b>main examples</b></a></li>
      <li>               <a data-toggle="tab" href="#menu1">In <b>C++</b></a></li>
      <li>               <a data-toggle="tab" href="#menu2">In <b>Python</b></a></li>
      <li>               <a data-toggle="tab" href="#menu3">External <b>Viewers</b></a></li>
    </ul>


    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <CENTER>
          <h1><b>Main Examples (Python & C++)</b></h1>
          <p>Click in the logo of your favorite language</p>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="900" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/index.ipynb" frameborder="0" allowfullscreen></iframe>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu1" class="tab-pane fade">
        <CENTER>
          <h1><b>ROOTbook in C++</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="900" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/DataAndTools_cpp_notebook_03_2016_example01_v0.0.ipynb" frameborder="0" allowfullscreen></iframe>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu2" class="tab-pane fade">
        <CENTER>
          <h1><b>ROOTbook in Python</b></h1>
          <div style="width:100%; padding: 0.2cm 0.2cm 0.2cm 0.2cm; float:left; clear:both;">
            <CENTER>
              <iframe width="100%" height="900" src="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks/PyROOT_Example.ipynb" frameborder="0" allowfullscreen></iframe>
            </CENTER>
          </div>
        </CENTER>
      </div>
      <div id="menu3" class="tab-pane fade">
        <CENTER>
          <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
            <h1><b>External Viewers</b></h1>
            <p>Check our examples in the Official ROOT gallery or in the Jupyter Viewer for an even easier access</p>
          </div>
          <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
            <div class="btn-group btn-group-justified">
              <a href="http://swan.web.cern.ch/content/notebook-gallery"                              target="_blank" class="btn btn-primary" style="font-size:150%;">Official ROOT Gallery</a>
              <a href="http://nbviewer.jupyter.org/github/artfisica/rootbinder/blob/master/notebooks" target="_blank" class="btn btn-primary" style="font-size:150%;">Jupyter Viewer</a>
            </div>
          </div>
        </CENTER>
      </div>
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
