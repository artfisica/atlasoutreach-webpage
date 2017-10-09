<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;">Level 2: <b>Web Analysis</b> - ROOTbooks</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50% ; padding: 1cm 1% 1cm 10%;">
          <p style="font-family:verdana; font-size:120%; text-align: left;">
            <b>The <a href="http://atlas.cern/" target="_blank">ATLAS</a> Experiment has made <a href="/atlas-opendata/extendedanalysis/software.php" target="_blank">7 analyses available</a></b> to help you get started with your own research!
            <b>We are producing ROOT notebooks (ROOTbooks) for them as well</b>. Avoid local installations by using notebooks in a <a href="https://en.wikipedia.org/wiki/OpenSaaS" target="_blank">Software as a Service</a> environment on your computer or in the Cloud.
            <br>
            <b>Check our examples</b> in the Official ROOT gallery or in the Jupyter Viewer for an even easier access.
            <b>Run, edit and save</b> ROOTbooks. Use our examples to explore the public datasets and create your own ROOTbooks directly in your browser!
          </p>
          <p style="font-family:verdana; font-size:110%; text-align: left;">
            <i>Do you want to know more?</i> Check the <b><a href="./documentation.php" target="_blank">Documentation</a></b>
          </p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_web_analysis.png" alt="Web Analysis - ROOTbooks" style="width:100%">
        </td>
      </tr>
    </table>
  </div>
  <!-- End header-->


  <!-- Navegation buttons bar -->
  <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.5cm 2.0cm; float:left; clear:both;">
    <div class="btn-group btn-group-justified">
      <a href="./documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
      <a href="./ROOTbooks.php"     class="btn btn-primary" style="font-size:150%;">ROOTbooks</a>
      <a href="./ROOTbooks.php#external_binder"  class="btn btn-primary" style="font-size:150%;">Execute ROOTbook</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>ATLAS ROOTbooks Gallery!</b></h1>
    <p style="font-size:120%;">How deep can you go?</p>
  </div>

  <!-- The W Analisys -->
  <div id="W_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#e3f4fd;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_WAnalysis.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#W_analysis">-->W Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            The W boson analysis is intended to provide an example for a high statistics analysis using the ATLAS open data dataset. Furthermore it tests the description of the real data by the simulated W boson data which represents the most extensive dataset in terms of luminosity.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_WAnalysis.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the W Analisys -->

  <!-- The Z Analisys -->
  <div id="Z_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#d1ecfc;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_ZAnalysis.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#Z_analysis">-->Z Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            Many analyses selecting leptons suffer from Z + jets as a contributing background due to its large production cross section. It is therefore vital to check the correct modelling of this process by the Monte-Carlo simulated data.
            It is important to measure well known Standard Model particles, to confirm that we understand properly the detector and software. We are then ready to search for new physics.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_ZAnalysis.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the Z Analisys -->

  <!-- The Top pair Analisys -->
  <div id="Top_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#bee5fb;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#Top_analysis">-->Top pair Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            The top pair analysis is interesting because it is a good test of the Standard Model.
            It is important for discrimination between different data simulation generators, QCD models and parton distribution functions.
            In addition, top pair production is an important background in various Higgs boson analyses as well as beyond the Standard Model searches. It is therefore crucial to understand this process in detail.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the Top pair Analisys -->

  <!-- The WZ Analisys -->
  <div id="WZ_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#abdefa;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#WZ_analysis">-->WZ Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            This analysis looks for both a W boson and a Z boson. Diboson physics is an important part of the physics programme of ATLAS as it is a probe for electroweak physics. The WZ analysis was chosen as an example analysis as it is one of the most abundantly produced diboson processes and has a clean final state consisting of three charged leptons and a neutrino.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the WZ Analisys -->

  <!-- The ZZ Analisys -->
  <div id="ZZ_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#99d6f9;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#ZZ_analysis">-->ZZ Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            The production of Z-boson pair with subsequent decay to leptons is the only Standard Model process with four prompt leptons in the final state. Its low production cross section results in a very low yield for the ATLAS open data dataset and highlights the limitations of the dataset. Although some events can be selected the low event yield prohibits detailed analysis and conclusions drawn are of a more qualitative nature.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the ZZ Analisys -->

  <!-- The HWW Analisys -->
  <div id="HWW_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#86cff8;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#HWW_analysis">-->HWW Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            This analysis searches for the standard model Higgs boson where the Higgs boson decays into 2 W bosons which subsequently decay into leptons and neutrinos.
            The Higgs boson appears as a consequence of the breaking of electroweak symmetry and is responsible for giving masses to all other massive particles. The central role played by the Higgs boson in the SM explains why the understanding of this particle is a centrepiece of the LHC physics programme.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the HWW Analisys -->

  <!-- The Z prime Analisys -->
  <div id="Zp_analysis" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#74c7f7;">
    <table width="100%" border="0">
      <tr>
        <td style="width:33%; padding: 1cm 0.5cm 1cm 1cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>C++ version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
        <td style="width:33%; text-align: left; padding: 1cm 0.5cm 1cm 0.5cm;">
          <h1 style="font-family:verdana; font-size:260%;">The <b><!--<a href="#Zp_analysis">-->Z' Analysis</a> ROOTbook</b></h1>
          <p style="font-family:verdana; font-size:110%;">
            The Z' boson is a hypothetical gauge boson that arises from extensions of the electroweak symmetry of the Standard Model. The Z' boson is named in analogy with the Standard Model Z boson.
          </p>
        </td>
        <td style="width:33%; padding: 1cm 1cm 1cm 0.5cm;">
          <div class="hovereffect">
            <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_visualisation.png" alt="Visualisations" style="width:100%">
            <div class="overlay" style="background-color: rgba(0,0,0,0.4);">
              <h2>Python version</h2>
              <a class="info" href="#"><!--Go to Notebook -->Coming soon</a>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
  <!-- End of the Z prime Analisys -->


  <!-- The External viewers -->
  <div id="external_viewers" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:white;"> <!-- #86cff8;"> -->
    <CENTER>
      <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
        <h1><b>External Viewers</b></h1>
        <p style="font-size:120%;">Check our examples in the Official ROOT gallery or in the Jupyter Viewer for an even easier access</p>
      </div>
      <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
        <div class="btn-group btn-group-justified">
          <a href="https://swan.web.cern.ch/content/basic-examples"                                               target="_blank" class="btn btn-primary" style="font-size:150%;">Official ROOT Gallery</a>
          <a href="http://nbviewer.jupyter.org/github/artfisica/rootbinder/tree/master/notebooks/SummerStudents/" target="_blank" class="btn btn-primary" style="font-size:150%;">Jupyter Viewer</a>
        </div>
      </div>
    </CENTER>
  </div>
  <!-- End of External viewers -->

  <!-- The Executes in SWAN or Binder -->
  <div id="external_binder" style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: center; width:100%; margin:0px auto; border:none!important; background-color:#abdefa;">
  <CENTER>
  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
  <h1><b>Execute ROOTbooks</b></h1>
  <p style="font-size:120%;">Run, edit and save ROOTbooks. Use our examples to explore the public datasets. You can create your own ROOTbooks as well!</p>
</div>
<div style="width:100%; text-align: center; padding: 0.1cm 0.1cm 0.1cm 0.1cm; float:left; clear:both;">
<iframe src="../ROOT_execute/ROOTBooks_execute_mainframe.html" height="620px" width="100%" style="padding: 0.6cm 8% 0.8cm 8%;"></iframe>
<!-- <a href="http://mybinder.org/repo/artfisica/rootbinder/tree/notebooks/SummerStudents/" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/binder_view.png" style="width:55%" alt="binder ROOTbooks"></a> -->
</div>
</CENTER>
</div>
<!-- End of the Executes in Binder -->
<!-- Color reference online: http://www.colorhexa.com/0b80c3 -->

<div style="float:left; clear:both; padding: 1.0cm 0.5cm 1.0cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
  <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
  <h1><b><a href="https://cheatham1.gitbooks.io/web-analysis/content/analyses.html" target="_blank">in GitBook</a></b></h1>
</div>
<!-- -->


<?php include('../menu.html'); ?>
<?php include('../trackers.html'); ?>
<?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
