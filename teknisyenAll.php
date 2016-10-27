<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php 

?>
  <div class="page-content">
    <div class="content container">
      
      <?php 
      if(empty($_POST['list'])){


      ?>
      <div align="center"><form action="teknisyenAll.php" name="tek" method="POST">
        <?php teknisyenListele(); ?>
        <input type="submit" value="Listele" name="list"/>
      </form></div>
      <?php } else {
          $teknisyen=$_POST['teknisyen'];
         ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-fullscreen"></i>
              <h3>Teknisyen Genel</h3>

            </div>
            <div class="widget-content">
              <div class="panel-body">
<div class="row"><?php echo "<h4 align='center'>Seçili Teknisyen : ".$teknisyen."</h4>"; ?>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Servisler</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("yok",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sistemdeki Servis Sayısı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tamamladığı Servis</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("all",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Tamamladığı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Montaj",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Montajı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Klima-Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Klima-Montaj",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Klima Montajı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Arıza</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Arıza",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Teknisyenin Giderdiği Arızalar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Ek Garanti</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Ek Garanti",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sattığı Ek Garanti</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tanıtım</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Tanıtım",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yaptığı Tanıtımlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Aksesuar Satış</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Aksesuar Satış",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sattığı Aksesuarlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Nakliye</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sayi_ver("Nakliye",$teknisyen); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yaptığı Nakliyeler</div>
              </a> </div>
          </div>
        </div>
      </div>
              </div>
            </div>
          </div>
        </div>
      </div><?php } ?>
    </div>
  </div>
</div>
  
<?php  include("footer.php"); ?>