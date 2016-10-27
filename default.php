<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>


<div class="page-content">
    <div class="content container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Başlangıç <small>Genel İstatistikler</small></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Servisler</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("yok"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Sistemdeki Servis Sayısı</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("Montaj"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yapılan Montajlar</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Klima-Montaj</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("Klima-Montaj"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yapılan Klima Montajı</div>
              </a> </div>
              <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Arıza</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("Arıza"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Giderilen Arızalar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Ek Garanti</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("Ek Garanti"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Satılan Ek Garanti</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Tanıtım</div>
              <div class="stats-body-alt"> 
               
                <div class="text-center"><span class="text-top"></span><?php sys("Tanıtım"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Yapılan Tanıtımlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Aksesuar Satış</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sys("Aksesuar Satış"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Satılan Aksesuarlar</div>
              </a> </div>
            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Nakliye</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sys("Nakliye"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Nakliye Sayısı</div>
              </a> </div>


            <div class="col-md-3 col-xs-12 col-sm-6"> <a href="#" class="stats-container">
              <div class="stats-heading">Borçlu Kişiler</div>
              <div class="stats-body-alt"> 
             
                <div class="text-center"><span class="text-top"></span><?php sys("borc"); ?></div>
                <small></small> </div>
              <div class="stats-footer">Size Borçlu Kişi Sayısı</div>
              </a> </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include("footer.php");