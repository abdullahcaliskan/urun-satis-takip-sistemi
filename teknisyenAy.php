<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php 

?>
  <div class="page-content">
    <div class="content container">
      
      <?php 
      if(empty($_POST['list'])){


      ?>
      <div align="center"><form action="teknisyenAy.php" name="tek" method="POST">
        <table><tr><td>Teknisyen</td><td> : <?php teknisyenListele(); ?></td></tr>
        <tr><td>Tarih</td><td> : <input type="text" name="baslangic" id="inputField"/> dan <input type="text" id="inputField2" name="bitis"> e kadar</td></tr>
        </table>
        <input type="submit" value="Listele" name="list"/>
      </form></div>
      <?php } else {
          $teknisyen=$_POST['teknisyen'];
          $baslangic=$_POST['baslangic'];
          $bitis=$_POST['bitis'];

         ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-fullscreen"></i>
              <h3>Teknisyen Ay</h3>

            </div>
            <div class="widget-content">
              <div class="panel-body"><?php echo "<h4 align='center'>Seçili Teknisyen : ".$teknisyen."</h4>"; ?>
              
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Servisler</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("yok",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Tarihler Arasındaki Servis</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tamamladığı Servis</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("all",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Tamamladığı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Montaj",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Montajı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Klima-Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Klima-Montaj",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Klima Montajı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Arıza</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Arıza",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Giderdiği Arızalar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Ek Garanti</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Ek Garanti",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sattığı Ek Garanti</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tanıtım</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Tanıtım",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yaptığı Tanıtımlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Aksesuar Satış</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Aksesuar Satış",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sattığı Aksesuarlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Nakliye</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sayi_top("Nakliye",$baslangic,$bitis,$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yaptığı Nakliyeler</div>
              </a> </div>


              </div>
            </div>
          </div>
        </div>
      </div><?php } ?>
    </div>
  </div>
</div>
  
<?php  include("footer.php"); ?>