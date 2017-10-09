<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;"><b>Data & Tools</b> - Documentation</h1>
    </CENTER>

    <!-- Header table -->
    <div style="width:100%; text-align: center; padding: 0.4cm 5% 0.3cm 5%; float:left; clear:both;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td style="width:40%; padding: 0cm 0% 0.4cm 3%;">
            <p style="font-family:verdana; text-align: left;">
              <b>Download the ATLAS open datasets</b> complete collection in a <i>.ZIP</i> file or a subset as single ROOT files.
              Don't forget to grab the software or the Virtual Machines to carry out your analysis.
            </p>
          </td>
          <td style="width:20%; text-align: left; padding: 0.1cm 0% 0.4cm 0%">
            <div class="hovereffect">
              <a class="video-1" href="https://www.youtube.com/watch?v=5PPqzf37_xo"><img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_docs.png" alt="Data & Tools - Docs" style="width:100%"></a>
              <div class="overlay" style="background-color: rgba(0,0,0,0); padding: 25% 1% 10% 40%;">
                <a class="video-1" href="https://www.youtube.com/watch?v=5PPqzf37_xo"><img src="/atlas-opendata/DataAndTools/pictures/youtube_icon.png" style="width:35%"></a>
              </div>
            </div>
          </td>
          <td style="width:40%; padding: 0cm 3% 0.4cm 1%;">
            <!-- Navegation buttons bar -->
            <div class="btn-group btn-group-justified">
              <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:110%; color:black;">Documentation &#10003;</a>
              <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:110%;">Datasets</a>
            </div>
            <div class="btn-group btn-group-justified">
              <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:110%;">Software</a>
              <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:110%;">Virtual Machines</a>
            </div>
            <!-- End navegation buttons bar -->
          </td>
        </tr>
      </table>
    </div>
    <!-- End header-->

    <!-- Table of Documentation gallery -->
    <div style="width:100%; text-align: center; padding: 2cm 5% 2cm 5%; float:left; clear:both;">
      <table width="100%">
        <tr>
          <td style="width:50%; padding: 0.5cm 0% 0.3cm 0%; border: 2px solid black;">
            <p style="font-family:verdana; font-size:160%;"><b>Software Book</b></p>
            <div class="hovereffect">
              <CENTER>
              <a href="https://cheatham1.gitbooks.io/openatlasdatatools/content/" target="_blank"><img class="img-responsive" src="../DataAndTools/pictures/gitbook_view.png" alt="ATLAS to GitBook" style="width:80%"></a>
              <CENTER>
            </div>
          </td>
          <td style="width:50%; padding: 0.5cm 0% 0.3cm 0%; border: 2px solid black;">
            <p style="font-family:verdana; font-size:160%;"><b>Virtual Machine Book</b></p>
            <div class="hovereffect">
              <CENTER>
              <a href="https://cheatham1.gitbooks.io/openatlasdatatools/content/" target="_blank"><img class="img-responsive" src="../DataAndTools/pictures/gitbook_view.png" alt="ATLAS to GitBook" style="width:80%"></a>
              <CENTER>
            </div>
          </td>
        </tr>
      </table>
    </div>

    <?php include('../menu.html'); ?>
    <?php include('../trackers.html'); ?>
    <?php include('../share.html'); ?>
  </body>
  <!-- End main body -->

  <footer>
    <?php include('../footer.html'); ?>
  </footer>
  </html>
