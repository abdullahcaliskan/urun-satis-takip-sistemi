<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php 

?>
  <div class="page-content">
    <div class="content container">
      
      <?php 
      if(empty($_POST['list'])){


      ?>
      <div align="center"><form action="kazancAy.php" name="tek" method="POST">
        <table>
        <tr><td>Tarih</td><td> : <input type="text" name="baslangic" id="inputField"/> dan <input type="text" id="inputField2" name="bitis"> e kadar</td></tr>
        </table>
        <input type="submit" value="Listele" name="list"/>
      </form></div>
      <?php } else {
          
          $baslangic=$_POST['baslangic'];
          $bitis=$_POST['bitis'];
          if(empty($baslangic) and empty($bitis)){ ?>
            <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-fullscreen"></i>
              <h3>Kazanç</h3>

            </div>
            <div class="widget-content">
              <div class="panel-body">
                          
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Toplam Tutar</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                $sorgu=mysql_query("SELECT SUM(nOdeme) FROM servis");
                $tutar=mysql_fetch_array($sorgu);
                echo $tutar[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Ödemelerin Hepsi</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tahsil Edilmiş</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                $sorgu=mysql_query("SELECT SUM(nTahsil_edilen) FROM servis");
                $tahsil_edilmis=mysql_fetch_array($sorgu);
                echo $tahsil_edilmis[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Alınmış Ödemeler</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tahsil Edilecek</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                echo $tutar[0]-$tahsil_edilmis[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Alınacak Ödemeler</div>
              </a> </div>

              </div>
            </div>
          </div>
        </div>
      <!--         COLSPAN ************************      -->
          <?php }
          else{?>

<div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-fullscreen"></i>
              <h3>Kazanç</h3>

            </div>
            <div class="widget-content">
              <div class="panel-body">
                          
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Toplam Tutar</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                $sorgu=mysql_query("SELECT SUM(nOdeme) FROM servis WHERE dS_tarih BETWEEN '$baslangic' and '$bitis'");
                $tutar=mysql_fetch_array($sorgu);
                echo $tutar[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Ödemelerin Hepsi</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tahsil Edilmiş</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                $sorgu=mysql_query("SELECT SUM(nTahsil_edilen) FROM servis WHERE dS_tarih BETWEEN '$baslangic' and '$bitis'");
                $tahsil_edilmis=mysql_fetch_array($sorgu);
                echo $tahsil_edilmis[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Alınmış Ödemeler</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tahsil Edilecek</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php 
                echo $tutar[0]-$tahsil_edilmis[0];
                 ?></div>
                <small></small> </div>
              <div class="stats-footer">Alınacak Ödemeler</div>
              </a> </div>

              </div>
            </div>
          </div>
        </div>      
          <?php }

         ?>
      </div><?php } ?>
    </div>
  </div>
</div>
  
<?php  include("footer.php"); ?>