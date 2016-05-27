<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<!-- Start of the body page
<h2>Discussion, reports and Q&A from the public to the ATLAS members!</h2>
-->
<body>
  <!-- Head of page-->
  <div class="view-content" align="center">
    <table cellpadding="2" cellspacing="1" width="96%" border="0" height="550px">
      <tr>
        <td width="50%">
          <h1 style="font-family:verdana; font-size:310%;"><b>OpenATLAS Forum</b></h1>
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
      <img src="./DataAndTools/pictures/ATLAS_imagine_initial_page_01.png" alt="Forum + FAQ" style="width:100%">
    </td>
  </tr>
</table>
</div>
<!-- end Head of page-->

<!-- Tabs  -->
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Forum</a></li>
    <li><a data-toggle="tab" href="#menu1">FAQ</a></li>
  </ul>

  <CENTER>
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>Forum</h3>
        <iframe name="fBulletin" id="fBulletin" src="https://forums.fbulletin.com/?site=http://atlasoutreach.web.cern.ch/forum&forum=14970&url=http%3A%2F%2Fatlasoutreach.web.cern.ch%2Fforum" width="100%" height="500" frameborder="0" border="0" align="center" style="width:100%;border:hidden;overflow:hidden;"></iframe>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Frequently Asked Questions</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <iframe width="100%" height="850" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        <br>
        <br>
      </div>
    </div>
  </CENTER>
</div>


<?php include('menu.html'); ?>

<?php include('trackers.html'); ?>
</body>
<!-- End main body -->


<footer>
  <?php include('footer.html'); ?>
</footer>
</html>
