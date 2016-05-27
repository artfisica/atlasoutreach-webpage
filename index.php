<!DOCTYPE html>
<html>
<header>
  <?php include('header.html'); ?>
</header>

<!-- Start of the body page -->
<body>
  <div>
    <table width="100%" border="0">
      <tr>
        <td style="width:50%; text-align: left; padding: 1.5cm 1.5cm 1.5cm 1.5cm;"> <!-- style="border: 1px solid black; background-color: #0b80c3;"> -->
          <h1 style="font-family:verdana; font-size:260%;">The <b><a href="http://atlas.cern/">ATLAS</a> Experiment</b></h1>
          <p style="font-family:verdana; font-size:120%;">
            <b>
              at <a href="http://home.cern/">CERN</a> in Geneva has made over 1fb<sup>-1</sup> of data publicly available. This data includes the world’s first open release of 8 TeV data, gathered from LHC proton collisions in 2012. <a href="./index.php">ATLASOpenData</a> guides you through how to use and download the data, how to visualize your results and even provides open-source software for you to make your own discoveries.
            </br>
            Learn how to:
          </p>
          <ul style="font-family:verdana; font-size:110%;">
            <li>Visualise the data in discovery-style graphs</li>
            <li>Develop code to select interesting collision events</li>
            <li>Use Virtual Machines to transform your computer </br> into an analysis machine!</li>
          </ul>
        </td>
        <td style="width:50%; padding: 0.1cm 0.2cm;">
          <video width="100%" controls> <!-- autoplay controls> -->
            <source src="DataAndTools/pictures/video.mp4" type="video/mp4">
              <source src="DataAndTools/pictures/video.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
              </video>
            </td>
          </tr>
        </table>
      </div>
      <br>
      <br>

      <?php include('menu.html'); ?>

      <?php include('trackers.html'); ?>
    </body>
    <!-- End main body -->

    <footer>
      <?php include('footer.html'); ?>
    </footer>
    </html>
