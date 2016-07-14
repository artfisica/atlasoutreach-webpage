<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.0cm 1.0cm 3.0cm;">
          <h1 style="font-family:verdana; font-size:260%;">ATLAS open data <b>Forum</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          Start a conversation or join to an existing thread!
        </p>

        <p style="font-family:verdana; font-size:120%; padding: 0.4cm 0.0cm 0.0cm 0.0cm;"><b>In this section, you can:</b></p>

        <ul style="font-family:verdana; font-size:102%; padding: 0.1cm 1.0cm 1.0cm 1.0cm;">
          <li>Interact with us using the Forum below</li>
          <li>Get answer to common questions, did you find yours?</li>
        </ul>
      </td>
      <td style="width:50%; padding: 0.1cm 3.0cm 0.1cm 1.0cm;">
        <img src="/atlas-opendata/DataAndTools/pictures/handmade_community.png" alt="FAQs" style="width:80%">
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
      <a href="/atlas-opendata/forum.php"  class="btn btn-primary btn-lg" style="font-size:150%;">Public Forum</a>
      <a href="/atlas-opendata/faqs.php"  class="btn btn-primary btn-lg" style="font-size:150%;">FAQs</a>
      <a href="/atlas-opendata/contact.php"  class="btn btn-primary btn-lg" style="font-size:150%;">Contact</a>
    </div>
  </div>
  <!-- end of buttons line-->

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.1cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>Forum</b></h1>
  </div>

  <CENTER>
    <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
      <iframe name="fBulletin" id="fBulletin" src="https://forums.fbulletin.com/?site=http://atlasoutreach.web.cern.ch/forum&forum=14970&url=http%3A%2F%2Fatlasoutreach.web.cern.ch%2Fforum" width="100%" height="500" frameborder="0" border="0" align="center" style="width:100%;border:hidden;overflow:hidden;"></iframe>
    </div>
  </CENTER>

  <?php include('menu.html'); ?>

  <?php include('trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('footer.html'); ?>
</footer>
</html>
