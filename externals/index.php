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
          <h1 style="font-family:verdana; font-size:260%;">The <b>External Resources</b> and friends!</h1>
        </br>
        <p style="font-family:verdana; font-size:140%;">
          <i>more coming soon...</i> For more educational resources and initiatives involving High-Energy Physics, check out the groups linked below:
        </p>
      </td>
      <td style="width:50%; padding: 0.1cm 0.2cm;">
        <div class="hovereffect">
          <img class="img-responsive" src="/atlas-opendata/DataAndTools/pictures/handmade_externals_friends.png" alt="External Resources" style="width:100%">
        </div>
      </td>
    </tr>
  </table>
</div>
<!-- end Head of page-->


<div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.5cm 2.0cm; float:left; clear:both;">
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown" style="font-size:150%;">
        Documentation <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="/atlas-opendata/visualisations/documentation.php"   style="font-size:130%;">Get Started</a></li>
          <li><a href="/atlas-opendata/webanalysis/documentation.php"      style="font-size:130%;">Web Analysis</a></li>
          <li><a href="/atlas-opendata/extendedanalysis/documentation.php" style="font-size:130%;">Data & Tools</a></li>
        </ul>
      </div>
      <a href="/atlas-opendata/community/forum.php"  class="btn btn-primary btn-lg" style="font-size:150%;">Public Forum</a>
      <a href="/atlas-opendata/community/faqs.php"  class="btn btn-primary btn-lg" style="font-size:150%;">FAQs</a>
      <a href="/atlas-opendata/community/contact.php"  class="btn btn-primary btn-lg" style="font-size:150%;">Contact</a>
    </div>
  </div>
  <!-- end of buttons line-->



  <div style="float:left; clear:both; padding: 1.0cm 0.5cm 2.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Explore</b></h1>
    <!--
    <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 2.0cm 2.0cm; float:left; clear:both;">
    <div class="btn-group btn-group-justified">
    <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
    <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:150%;">Datasets</a>
    <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:150%;">Software</a>
    <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:150%;">Virtual Machines</a>
  </div>
</div>
-->

<!--
<a href="http://mybinder.org/repo/artfisica/rootbinder" target="_blank"><img typeof="foaf:Image" src="../DataAndTools/pictures/binder_view.png" alt="binder ROOTbooks"></a>
for the moment, logos of things we want to include here
-->
<a href="http://ippog.web.cern.ch"            target="_blank"><img typeof="foaf:Image" src="http://ippog.web.cern.ch/sites/ippog.web.cern.ch/files/ippog.png" alt="IPPOG" style="width:10%"></a>
<a href="http://www.physicsmasterclasses.org" target="_blank"><img typeof="foaf:Image" src="http://www.cevale2ve.org/wp-content/uploads/2016/03/MC-Logo-RGB.jpg" alt="MasterClasses" style="width:15%"></a>
<a href="https://root.cern.ch"                target="_blank"><img typeof="foaf:Image" src="https://d35c7d8c.web.cern.ch/sites/d35c7d8c.web.cern.ch/files/website-banner-allnew-croped_3.png" alt="ROOT" style="width:15%"></a>
<a href="http://opendata.cern.ch"             target="_blank"><img typeof="foaf:Image" src="http://opendata.cern.ch/img/home/opendata_logo.svg" alt="CERN OpenData" style="width:15%"></a>
<a href="http://jupyter.org"                  target="_blank"><img typeof="foaf:Image" src="http://jupyter.org/assets/nav_logo.svg" alt="Jupyter" style="width:15%"></a>
<a href="http://cernvm.web.cern.ch"           target="_blank"><img typeof="foaf:Image" src="http://cernvm.web.cern.ch/sites/cernvm.web.cern.ch/files/cvm-logo.png" alt="CernVM" style="width:15%"></a>
<!--
<img src="https://www.virtualbox.org/graphics/vbox_logo2_gradient.png" alt="VirtualBox" style="width:15%">
-->
</div>

<div style="float:left; clear:both; padding: 0.5cm 22% 2.0cm 22%; text-align: center; width:100%; margin:0px auto;">
  <h1 style="font-family:verdana; font-size:260%; padding: 1.5cm"><b>The LHC Experiment in action</b></h1>
  <div class="embed-responsive embed-responsive-16by9" >
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jDC3-QSiLB4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
