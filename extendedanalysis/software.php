<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.5cm 1.5cm 1.5cm;">
          <h1 style="font-family:verdana; font-size:310%;"><b>Software</b></h1>
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
    <td style="width:50%; padding: 0.1cm 0.2cm;">
      <img src="../DataAndTools/pictures/ATLAS_imagine_initial_page_5.png" alt="Software + Virtual Machine" style="width:100%">
    </td>
  </tr>
</table>
</div>
<!-- end Head of page-->

<h1 style="font-family:verdana; font-size:260%; padding: 1.5cm 1.5cm 1.5cm 1.5cm;">Software available</h1>

<!-- Tabs  -->
<div class="container">
  <!-- <h2>Dynamic Tabs</h2>-->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu0">Software repository</a></li>
    <li><a data-toggle="tab" href="#menu1">VM repository</a></li>
    <li><a data-toggle="tab" href="#menu2">Samples repository</a></li>
  </ul>

  <CENTER>
    <div class="tab-content">
      <div id="menu0" class="tab-pane fade in active">
        <a href="https://github.com/atlas-outreach-data-tools/atlas-outreach-data-tools-framework" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/github_view.png" alt=""></a>
      </div>
      <div id="menu1" class="tab-pane fade">
        <iframe width="100%" height="800" src="https://artfisica.gitbooks.io/atlasdatatools/content/index.html" name="iframe_02" frameborder="0" allowfullscreen></iframe>
      </div>
      <div id="menu2" class="tab-pane fade" style="padding: 2.0cm 2.0cm 2.0cm 2.0cm;">
        <a href="/atlas-opendata/DataAndTools/repository.php" style="background-color:rgb(0,0,0);
        background-image:-webkit-linear-gradient(top,rgb(0,0,0),rgb(100,100,100));
        border:1px solid rgba(0,0,0,0);
        border-bottom-left-radius:6px;
        border-bottom-right-radius:6px;
        border-top-left-radius:6px;
        border-top-right-radius:6px;
        display:inline-block;
        font-size:40px;
        text-align: center;
        font-weight:bold;
        height:65px;
        line-height:60px;
        margin-right:4px;
        margin-top:4px;
        min-width:20%;
        outline:rgb(255,255,255) none 0px;
        padding:8px 10px 8px 10px;
        text-transform:uppercase;
        white-space:nowrap;
        color:white!important">go to the Samples Repository</a>
      </div>
    </div>
  </CENTER>
</div>
<br>
<br>
<br>


<?php include('../menu.html'); ?>

<?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
<?php include('../footer.html'); ?>
</footer>
</html>
