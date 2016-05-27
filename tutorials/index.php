<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>

  <div class="view-content">
    <CENTER>
      <br>
      <br>
      <a href="../tutorials/" style="background-color:rgb(61,148,0);
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
      color:white!important">Tutorials</a>
      <br>
      <br>
      <br>
    </CENTER>
  </div>

  <?php /*include('../banner.html');*/ ?>

  <br>
  <br>
  <!-- Tabs  -->
  <div class="container">
    <!-- <h2>Dynamic Tabs</h2>-->
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Documentation</a></li>
      <li><a data-toggle="tab" href="#menu1">Samples repository</a></li>
      <li><a data-toggle="tab" href="#menu2">VM repository</a></li>
      <li><a data-toggle="tab" href="#menu3">Software repository</a></li>
    </ul>

    <CENTER>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <iframe width="100%" height="1250" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu1" class="tab-pane fade">
          <iframe width="100%" height="1100" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu2" class="tab-pane fade">
          <iframe width="100%" height="1200" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="menu3" class="tab-pane fade">
          <iframe width="100%" height="1050" src="https://artfisica.gitbooks.io/atlasdatatools/content/" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </CENTER>
  </div>


  <?php include('../menu.html'); ?>

  <?php include('../forumbuttom.html'); ?>

  <?php include('../trackers.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
