<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<!-- Start of the body page -->
<body>
  <CENTER>
    <video width="55%" autoplay controls>
      <source src="DataAndTools/video.mp4" type="video/mp4">
        <source src="DataAndTools/video.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
        </video>
      </CENTER>

      <br>
      <br>

      <div class="view view-home-page">
        <div class="view-content">
          <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
            <div class="layout-standard">
              <div class="background" style="background: 50% 50% no-repeat; background-size: cover;">
                <?php include('banner.html'); ?>
              </div>

              <div class="panel">
                <div class="panel-inner">
                  <h1>Run 1 Data and MonteCarlo</h1>
                  The ATLAS experiment released a set of samples recorded at 8 TeV proton-proton collisions
                  <a href="https://cds.cern.ch/record/2034188" class="more">Learn More →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="view-content">

        <CENTER>
          <a href="http://atlasoutreach.web.cern.ch/atlasoutreach/DataAndTools/repository.php" style="background-color:rgb(61,148,0);
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
          color:white!important">Samples Repository</a>
          <br>
        </CENTER>
      </div>


      <?php include('menu.html'); ?>

      <?php include('forumbuttom.html'); ?>

      <?php include('trackers.html'); ?>
    </body>
    <!-- End main body -->

    <footer>
      <?php include('footer.html'); ?>
    </footer>
    </html>
