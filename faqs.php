<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.5cm 1.5cm 1.5cm;">
          <h1 style="font-family:verdana; font-size:260%;"><b>ATLAS OpenData Forum</b></h1>
        </br>
        <p style="font-family:verdana; font-size:120%;">
          <b>
            Physicists at the <a href="http://atlas.cern/">ATLAS</a> Experiment...
          </br>
        </b>
      </br>
      In this section, you can:

      <ul style="font-family:verdana; font-size:110%; padding: 0.5cm 1.0cm 1.0cm 1.0cm;">
        <li>Interact with us using the Forum below</li>
        <li>Get answer to common questions, did you find yours?</li>
      </ul>
    </p>
  </td>
  <td style="width:50%; padding: 0.1cm 0.2cm;">
    <!-- <img src="/atlas-opendata/DataAndTools/pictures/ATLAS_imagine_initial_page_2.png" alt="Forum + FAQ" style="width:100%"> -->
    <img src="/atlas-opendata/DataAndTools/pictures/handmade_community.png" alt="Community" style="width:100%">
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

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <h1><b>FAQs</b></h1>
  </div>

  <div style="float:left; clear:both; padding: 0.5cm 3.5cm 3.5cm 3.5cm; text-align: center; width:90%; margin:0px auto;">
    <ul style="font-family:verdana; font-size:110%; width:90%; text-align: left;">
      <li><b>How is the data obtained?</b></li>
      <div class="embed-responsive embed-responsive-16by9" >
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jDC3-QSiLB4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <li>Who can use this datasets and tools?</li>
      <li>Dear ATLAS member, do you have a sugestion for a question here? <b>Please use the button of Feedback on your right, thanks!</b></li>
      <li>question?</li>
    </ul>
  </div>
  <!-- End of questions -->

  <?php include('menu.html'); ?>

  <?php include('trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('footer.html'); ?>
</footer>
</html>
