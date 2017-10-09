<!DOCTYPE html>
<html>
<header>
  <?php include('../header.html'); ?>
</header>

<body>
  <div style="float:left; clear:both; padding: 0.0cm 0.0cm 0.0cm 0.0cm; text-align: left; width:100%; margin:0px auto;">
    <CENTER>
      <h1 style="font-family:verdana; font-size:260%;"><b>Data & Tools</b> - Datasets</h1>
    </CENTER>

    <table width="100%" border="0">
      <tr>
        <td style="width:50%; padding: 1cm 1% 1cm 10%;">
          <p style="font-family:verdana; font-size:140%; text-align: left;">
            <b>Download the ATLAS open datasets below!</b> Download the complete collection in a <i>.ZIP</i> file or a subset as single ROOT files.
            Don't forget to grab the software or the Virtual Machines to carry out your analysis.
          </p>
        </td>
        <td style="width:50%; text-align: left; padding: 1cm 10% 1cm 1%">
          <img src="/atlas-opendata/DataAndTools/pictures/handmade_downloads.png" alt="Data & Tools - datasets" style="width:100%">
        </td>
      </tr>
    </table>
  </div>
  <!-- End header-->


  <!-- Navegation buttons bar -->
  <div style="width:100%; text-align: center; padding: 0.2cm 2.0cm 0.5cm 2.0cm; float:left; clear:both;">
    <div class="btn-group btn-group-justified">
      <a href="../extendedanalysis/documentation.php" class="btn btn-primary" style="font-size:150%;">Documentation</a>
      <a href="../extendedanalysis/datasets.php"      class="btn btn-primary" style="font-size:150%;">Datasets</a>
      <a href="../extendedanalysis/software.php"      class="btn btn-primary" style="font-size:150%;">Software</a>
      <a href="../extendedanalysis/vm-toolbox.php"    class="btn btn-primary" style="font-size:150%;">Virtual Machines</a>
    </div>
  </div>
  <!-- End navegation buttons bar -->


  <!-- Tabs -->
  <div style="width:100%; padding: 1.2cm 8% 2.5cm 8%; clear:both; text-align:left; float:left; margin:0px auto;">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#mc">Samples MC</a></li>
        <li><a data-toggle="tab" href="#data">Samples Data</a></li>
        <li><a data-toggle="tab" href="#zip">Bulk download</a></li>
      </ul>

      <div class="tab-content">
        <div id="mc" class="tab-pane fade in active">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">Set of MonteCarlo (MC) samples</h1>
          <table style="width:100%" >
            <tr>
              <th>File type</th>
              <th>Name</th>
              <th>Description</th>
              <th>Last modified</th>
              <th>Size</th>
              <th># Events</th>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_105985.WW.root">mc_105985.WW.root</a></td>
              <td>Diboson process <i>WW</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>64,7Mb</td>
              <td>500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_105986.ZZ.root">mc_105986.ZZ.root</a></td>
              <td>Diboson process <i>ZZ</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>19,8Mb</td>
              <td>125000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_105987.WZ.root">mc_105987.WZ.root</a></td>
              <td>Diboson process <i>WZ</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>69,5Mb</td>
              <td>500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110090.stop_tchan_top.root">mc_110090.stop_tchan_top.root</a></td>
              <td>Single top <i>t</i>-channel top</td>
              <td>21-Jul-2016 16:00</td>
              <td>21,6Mb</td>
              <td>150000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110091.stop_tchan_antitop.root">mc_110091.stop_tchan_antitop.root</a></td>
              <td>single top <i>t</i>-channel antitop</td>
              <td>21-Jul-2016 16:00</td>
              <td>14,5Mb</td>
              <td>150000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110119.stop_schan.root">mc_110119.stop_schan.root</a></td>
              <td>single top <i>s</i>-channel</td>
              <td>21-Jul-2016 16:00</td>
              <td>15,1Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110140.stop_wtchan.root">mc_110140.stop_wtchan.root</a></td>
              <td>single top <i>Wt</i>-channel</td>
              <td>21-Jul-2016 16:00</td>
              <td>26,4Mb</td>
              <td>150000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110899.ZPrime400.root">mc_110899.ZPrime400.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 400 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,4Mb</td>
              <td>21941</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110901.ZPrime500.root">mc_110901.ZPrime500.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 500 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,8Mb</td>
              <td>23231</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110902.ZPrime750.root">mc_110902.ZPrime750.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 750 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,4Mb</td>
              <td>25021</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110903.ZPrime1000.root">mc_110903.ZPrime1000.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 1000 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,7Mb</td>
              <td>25525</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110904.ZPrime1250.root">mc_110904.ZPrime1250.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 1250 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,6Mb</td>
              <td>25030</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110905.ZPrime1500.root">mc_110905.ZPrime1500.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 1500 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,5Mb</td>
              <td>24142</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110906.ZPrime1750.root">mc_110906.ZPrime1750.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 1750 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,2Mb</td>
              <td>23084</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110907.ZPrime2000.root">mc_110907.ZPrime2000.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 2000 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,0Mb</td>
              <td>21997</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110908.ZPrime2250.root">mc_110908.ZPrime2250.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 2250 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,8Mb</td>
              <td>21127</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110909.ZPrime2500.root">mc_110909.ZPrime2500.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 2500 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,6Mb</td>
              <td>20327</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_110910.ZPrime3000.root">mc_110910.ZPrime3000.root</a></td>
              <td><i>Z' <span>&#8594;</span> t<span style="text-decoration: overline">t</span>  </i>with M<i><sub>Z'</sub></i> = 3000 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,4Mb</td>
              <td>19646</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_117049.ttbar_had.root">mc_117049.ttbar_had.root</a></td>
              <td><i>t<span style="text-decoration: overline">t</span></i> <span>&#8594;</span> Jets</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,8Mb</td>
              <td>25170</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_117050.ttbar_lep.root">mc_117050.ttbar_lep.root</a></td>
              <td><i>t<span style="text-decoration: overline">t</span> <span>&#8594;</span> l</i> + X</td>
              <td>21-Jul-2016 16:00</td>
              <td>300,1Mb</td>
              <td>1500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_147770.Zee.root">mc_147770.Zee.root</a></td>
              <td><i>Zee</i> + Jets</td>
              <td>21-Jul-2016 16:00</td>
              <td>966,1Mb</td>
              <td>7500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_147771.Zmumu.root">mc_147771.Zmumu.root</a></td>
              <td><i>Z&mu;&mu;</i> + Jets</td>
              <td>21-Jul-2016 16:00</td>
              <td>946,4Mb</td>
              <td>7500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_147772.Ztautau.root">mc_147772.Ztautau.root</a></td>
              <td><i>Z&tau;&tau;</i> + Jets</td>
              <td>21-Jul-2016 16:00</td>
              <td>95,8Mb</td>
              <td>750000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_160155.ggH125_ZZ4lep.root">mc_160155.ggH125_ZZ4lep.root</a></td>
              <td><i>gg <span>&#8594;</span> H <span>&#8594;</span> ZZ <span>&#8594;</span> 4l  </i>with M<i><sub>H</sub></i> = 125 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>17,6Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_160205.VBFH125_ZZ4lep.root">mc_160205.VBFH125_ZZ4lep.root</a></td>
              <td>VBF <i>H <span>&#8594;</span> ZZ <span>&#8594;</span> 4l  </i>with M<i><sub>H</sub></i> = 125 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>19,4Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_161005.ggH125_WW2lep.root">mc_161005.ggH125_WW2lep.root</a></td>
              <td><i>gg <span>&#8594;</span> H <span>&#8594;</span> WW <span>&#8594;</span> ll&nu;&nu;  </i>with M<i><sub>H</sub></i> = 125 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>13,6Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_161055.VBFH125_WW2lep.root">mc_161055.VBFH125_WW2lep.root</a></td>
              <td>VBF <i>H <span>&#8594;</span> WW <span>&#8594;</span> ll&nu;&nu;  </i>with M<i><sub>H</sub></i> = 125 GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>15,4Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167740.WenuWithB.root">mc_167740.WenuWithB.root</a></td>
              <td><i>We&nu;</i> + Jets with <i>b</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>88,0Mb</td>
              <td>750000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167741.WenuJetsBVeto.root">mc_167741.WenuJetsBVeto.root</a></td>
              <td><i>We&nu;</i> + Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>305,4Mb</td>
              <td>2600000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167742.WenuNoJetsBVeto.root">mc_167742.WenuNoJetsBVeto.root</a></td>
              <td><i>We&nu;</i> no Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>747,2Mb</td>
              <td>8000000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167743.WmunuWithB.root">mc_167743.WmunuWithB.root</a></td>
              <td><i>W&mu;&nu;</i> + Jets with <i>b</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>86,7Mb</td>
              <td>750000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167744.WmunuJetsBVeto.root">mc_167744.WmunuJetsBVeto.root</a></td>
              <td><i>W&mu;&nu;</i> + Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>296,1Mb</td>
              <td>2500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167745.WmunuNoJetsBVeto.root">mc_167745.WmunuNoJetsBVeto.root</a></td>
              <td><i>W&mu;&nu;</i> no Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>689,2Mb</td>
              <td>7500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167746.WtaunuWithB.root">mc_167746.WtaunuWithB.root</a></td>
              <td><i>W&tau;&nu;</i> + Jets with <i>b</i></td>
              <td>21-Jul-2016 16:00</td>
              <td>12,8Mb</td>
              <td>100000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167747.WtaunuJetsBVeto.root">mc_167747.WtaunuJetsBVeto.root</a></td>
              <td><i>W&tau;&nu;</i> + Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>31,6Mb</td>
              <td>250000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_167748.WtaunuNoJetsBVeto.root">mc_167748.WtaunuNoJetsBVeto.root</a></td>
              <td><i>W&tau;&nu;</i> no Jets with <i>b</i> veto</td>
              <td>21-Jul-2016 16:00</td>
              <td>56,3Mb</td>
              <td>550000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173041.DYeeM08to15.root">mc_173041.DYeeM08to15.root</a></td>
              <td>Drell-Yan <i>ee</i>  with M<sub><i>ee</i></sub>[08-15] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>58,2Mb</td>
              <td>400000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173042.DYeeM15to40.root">mc_173042.DYeeM15to40.root</a></td>
              <td>Drell-Yan <i>ee</i>  with M<sub><i>ee</i></sub>[15-40] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>102,2Mb</td>
              <td>750000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173043.DYmumuM08to15.root">mc_173043.DYmumuM08to15.root</a></td>
              <td>Drell-Yan <i>&mu;&mu;</i>  with M<sub><i>&mu;&mu;</i></sub>[08-15] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>76,1Mb</td>
              <td>500000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173044.DYmumuM15to40.root">mc_173044.DYmumuM15to40.root</a></td>
              <td>Drell-Yan <i>&mu;&mu;</i>  with M<sub><i>&mu;&mu;</i></sub>[15-40] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>105,9Mb</td>
              <td>750000</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173045.DYtautauM08to15.root">mc_173045.DYtautauM08to15.root</a></td>
              <td>Drell-Yan <i>&tau;&tau;</i>  with M<sub><i>&tau;&tau;</i></sub>[08-15] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>1,5Mb</td>
              <td>9993</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/MC/mc_173046.DYtautauM15to40.root">mc_173046.DYtautauM15to40.root</a></td>
              <td>Drell-Yan <i>&tau;&tau;</i>  with M<sub><i>&tau;&tau;</i></sub>[15-40] GeV</td>
              <td>21-Jul-2016 16:00</td>
              <td>4,6Mb</td>
              <td>32393</td>
            </tr>
          </table>
        </div>
        <div id="data" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">Set of Data samples</h1>
          <table style="width:100%" >
            <tr>
              <th>File type</th>
              <th>Name</th>
              <th>Description</th>
              <th>Last modified</th>
              <th>Size</th>
              <th># Events</th>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/Data/DataEgamma.root">DataEgamma.root</a></td>
              <td>ATLAS 2012 data Egamma-string sample for 2016 open data release</td>
              <td>21-Jul-2016 16:00</td>
              <td>746,3Mb</td>
              <td>7917590</td>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/Data/DataMuons.root">DataMuons.root</a></td>
              <td>ATLAS 2012 data Muons-string sample for 2016 open data release</td>
              <td>21-Jul-2016 16:00</td>
              <td>619,8Mb</td>
              <td>7028084</td>
            </tr>
          </table>
        </div>
        <div id="zip" class="tab-pane fade">
          <h1 style="padding: 0.7cm 1.0cm 1.0cm 1.0cm;">Set of container files</h1>
          <table style="width:100%" >
            <tr>
              <th>File type</th>
              <th>Name</th>
              <th>Description</th>
              <th>Last modified</th>
              <th>Size</th>
            </tr>
            <tr>
              <td><a href="https://root.cern.ch/doc/master/classTFile.html" target="_blank"> <img src="/atlas-opendata/DataAndTools/pictures/ROOT_icon_small.png" alt="root icon" style="width:40px;height:40px;border:0;"></a></td>
              <td><a href="../release/samples/complete_set_of_ATLAS_open_data_samples_July_2016.zip">complete_set_of_ATLAS_open_data_samples_July_2016.zip</a></td>
              <td>Complete set of Data and MonteCarlo samples into a single <i>ZIP</i> file</td>
              <td>21-Jul-2016 16:00</td>
              <td>5,6Gb</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div style="float:left; clear:both; padding: 0.5cm 0.5cm 0.5cm 0.5cm; text-align: center; width:100%; margin:0px auto;">
    <p style="font-size:120%;"><b>Do you need help? Go to the <a href="./documentation.php">documentation of this Level</a> or its dedicated resource:</b></p>
    <h1><b><a href="https://cheatham1.gitbooks.io/openatlasdatatools/content/data_and_simulated_data.html" target="_blank">in GitBook</a></b></h1>
  </div>
  <!-- -->


  <?php include('../menu.html'); ?>
  <?php include('../trackers.html'); ?>
  <?php include('../share.html'); ?>
</body>
<!-- End main body -->

<footer>
  <?php include('../footer.html'); ?>
</footer>
</html>
