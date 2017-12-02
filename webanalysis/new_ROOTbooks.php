<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  .hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
  }

  body {
    background-color: #000000;
  }

  p  {
    color: white;
  }

  p.sub-text {
    font-size: 120%;
  }

  </style>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.5cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%; color:white"><b>ATLAS ROOTbooks Gallery</b></h1>
      <p style="font-size:105%;">ready to test our examples? click over any of the #'s to know more</p>
    </div>
  </CENTER>
</div>
<!-- End header-->

<!-- Stat of the carrucel gallery-->
<div class="container" style="padding: 0.5cm 0.0cm 0.5cm 0.0cm;">
  <div id="main_area">
    <!-- Slider -->
    <div class="row">
      <div class="col-xs-12" id="slider">
        <!-- Top part of the slider -->
        <div class="row">
          <div class="col-sm-8" id="carousel-bounding-box">
            <div class="carousel slide" id="myCarousel">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item" data-slide-number="0">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="1">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="2">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="3">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="4">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="5">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="6">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="7">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="8">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
                <div class="item" data-slide-number="9">
                  <CENTER><img src="./notebook_gig.gif" style="width:75%"></CENTER>
                </div>
              </div><!-- Carousel nav -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>

          <div class="col-sm-4" id="carousel-text"></div>
          <div id="slide-content" style="display: none;">
            <div id="slide-content-0">
              <h2 style="color:white;"><b style="color:red;">#1</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_01.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_01.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_01.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-1">
              <h2 style="color:white;"><b style="color:red;">#2</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_02.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_02.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_02.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_02.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-2">
              <h2 style="color:white;"><b style="color:red;">#3</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_03.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_03.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_03.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_03.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-3">
              <h2 style="color:white;"><b style="color:red;">#4</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_04.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_04.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_04.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_04.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-4">
              <h2 style="color:white;"><b style="color:red;">#5</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_05.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_05.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_05.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_05.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-5">
              <h2 style="color:white;"><b style="color:red;">#6</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_06.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_06.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_06.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_06.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-6">
              <h2 style="color:white;"><b style="color:red;">#7</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_07.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_07.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_07.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_07.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-7">
              <h2 style="color:white;"><b style="color:red;">#8</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_08.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_08.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_08.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_08.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-8">
              <h2 style="color:white;"><b style="color:red;">#9</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_09.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_09.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_09.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_09.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
            <div id="slide-content-9">
              <h2 style="color:white;"><b style="color:red;">#10</b> Title for ROOTbook</h2>
              <p>Description of the notebook: The ATLAS data from 100 trillion proton collisions is now public! This marks the world’s first open release of 8 TeV data, gathered from the Large Hadron Collider in 2012.</p>
              <p><b>Interact with this ROOTbook</b> using one of the methods below!</p>
              <br>
              <ul>
                <li><p class="sub-text"><b>Visualise it using <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_10.ipynb" target="_blank">our nbviewer area</a>, and download it</b></p></li>
                <!-- <li><p class="sub-text"><b>Run it directly in public <a href="https://beta.mybinder.org/v2/gh/artfisica/notebooks/master?filepath=november_2017_v-1.0/ATLAS_OpenData_notebook_10.ipynb" target="_blank">MyBinder service</a></b></p></li> -->
                <li><p class="sub-text"><b>Run it on your computer! <a href="../extendedanalysis/vm-toolbox.php">Get one of our VMs</a></b></p></li>
                <li><p class="sub-text"><b>Work on it directly in your <a href="https://cern.ch/swanserver/cgi-bin/go?projurl=https://raw.githubusercontent.com/atlas-outreach-data-tools/notebooks/master/november_2017_v-1.0/ATLAS_OpenData_notebook_10.ipynb" target="_blank">CERN SWAN account</a></b></p></li>
                <li><p class="sub-text"><b>Look and contribute to <a href="https://github.com/atlas-outreach-data-tools/notebooks/blob/master/november_2017_v-1.0/ATLAS_OpenData_notebook_10.ipynb" target="_blank">our GitHub repository</a></b></p></li>
              </ul>
              </br>
            </div>
          <!--- End of the description of each of the notebooks--->
          </div>
        </div>
      </div>
    </div><!--/Slider-->
    <br></br>

    <div class="row hidden-xs" id="slider-thumbs">
      <!-- Bottom switcher of slider -->
      <ul class="hide-bullets">
        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-0"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_01.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-1"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_02.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-2"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_03.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-3"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_04.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-4"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_05.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-5"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_06.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-6"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_07.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-7"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_08.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-8"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_09.png"></a>
        </li>

        <li class="col-sm-2">
          <a class="thumbnail" id="carousel-selector-9"><img src="../DataAndTools/pictures/notebooks/atlas_open_data_notebook_10.png"></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- End of the carrucel gallery-->

<!-- The External viewers -->
<div id="external_viewers" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:white;"> <!-- #86cff8;"> -->
  <CENTER>
    <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
      <h1><b>External Examples & Viewers</b></h1>
      <p style="font-size:120%;">Check our examples in the Official ROOT gallery or in the Jupyter Viewer for an even easier access</p>
    </div>
    <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
      <div class="btn-group btn-group-justified">
        <a href="./documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
        <a href="http://nbviewer.jupyter.org/github/atlas-outreach-data-tools/notebooks/tree/master/november_2017_v-1.0/" target="_blank" class="btn btn-primary" style="font-size:150%;">ATLAS Official nbviewer</a>
        <a href="https://swan.web.cern.ch/content/basic-examples" target="_blank" class="btn btn-primary" style="font-size:150%;">ROOT Official Gallery</a>
      </div>
    </div>
  </CENTER>
</div>
<!-- End of External viewers -->

<!-- The Executes in SWAN or Binder -->
<div id="external_binder" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.5cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#abdefa;">
  <CENTER>
    <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
      <h1><b>Execute ROOTbooks</b></h1>
      <p style="font-size:120%;">Run, edit and save ROOTbooks. Use our examples to explore the public datasets. You can create your own ROOTbooks as well!</p>
      <p><font size="3" color="red">We are working hard to provide the Binder service soon!</font></p>
    </div>
    <div style="width:100%; text-align: center; padding: 0.1cm 0.1cm 0.1cm 0.1cm; float:left; clear:both;">
      <iframe src="../ROOT_execute/ROOTBooks_execute_mainframe.html" height="620px" width="100%" style="padding: 0.6cm 8% 0.8cm 8%;"></iframe>
    </div>
  </CENTER>
</div>
<!-- End of the Executes in Binder -->
<!-- Color reference online: http://www.colorhexa.com/0b80c3 -->

<div style="float:left; clear:both; padding: 0.8cm 0.5cm 0.8cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
  <div style="width:100%; text-align: center; padding: 0.1cm 0.1cm 0.0cm 0.1cm; float:left; clear:both;">
    <h1 style="font-family:verdana; font-size:180%; color:white"><b>ATLAS Open Data ROOTbooks are a reality thanks to the effort of many people like you</b></h1>
    <p style="font-size:105%; font-family:verdana; color:white">step over the picture to know more about some of them!</p>
    <iframe src="./boxes_3d_notebook_contributors/index.html" height="630px" width="100%" style="padding: 0.5cm 4% 0.0cm 4%;"></iframe>
  </div>
  <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
  <h1><b><a href="https://cheatham1.gitbooks.io/web-analysis/content/analyses.html" target="_blank">on GitBook</a></b></h1>
</div>
<!-- -->

<script type="text/javascript">
jQuery(document).ready(function($) {

  $('#myCarousel').carousel({
    interval: 10000
  });

  $('#carousel-text').html($('#slide-content-0').html());

  //Handles the carousel thumbnails
  $('[id^=carousel-selector-]').click( function(){
    var id = this.id.substr(this.id.lastIndexOf("-") + 1);
    var id = parseInt(id);
    $('#myCarousel').carousel(id);
  });

  // When the carousel slides, auto update the text
  $('#myCarousel').on('slid.bs.carousel', function (e) {
    var id = $('.item.active').data('slide-number');
    $('#carousel-text').html($('#slide-content-'+id).html());
  });
});
</script>


<?php include('../menu.html'); ?>
<?php include('../trackers.html'); ?>
<?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
