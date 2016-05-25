<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<!-- Start of the body page -->
<body>
  <div class="view-content">
    <CENTER>
      <br>
      <br>
      <a href="./forum.php" style="background-color:rgb(61,148,0);
      background-image:-webkit-linear-gradient(top,rgb(0,0,255),rgb(80,80,250));
      border:1px solid rgba(0,0,0,0);
      border-bottom-left-radius:2px;
      border-bottom-right-radius:2px;
      border-top-left-radius:2px;
      border-top-right-radius:2px;
      display:inline-block;
      font-size:40px;
      text-align: center;
      font-weight:bold;
      height:100px;
      line-height:100px;
      margin-right:0px;
      min-width:25%;
      outline:rgb(255,255,255) none 0px;
      padding:0px 8px;
      text-transform:uppercase;
      white-space:nowrap;
      color:white!important">Forum + Q&A</a>
      <br>
      <br>
      <h2>Discussion, reports and Q&A from the public to the ATLAS members!</h2>
      <br>
    </CENTER>
  </div>

  <?php /*include('banner.html');*/ ?>
  <br>
  <br>
  <br>

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
          <iframe width="800" height="450" src="https://www.youtube.com/embed/m9mVhadnwWo?list=PLaD4FvsFdarTthRrvRYXsYCYDeHooNKio" frameborder="0" allowfullscreen></iframe>
          <br>
          <br>
        </div>
      </div>
    </CENTER>
  </div>


  <?php include('menu.html'); ?>

  <?php include('repobuttom.html'); ?>

  <?php include('trackers.html'); ?>
</body>
<!-- End main body -->


<footer>
  <?php include('footer.html'); ?>
</footer>
</html>
