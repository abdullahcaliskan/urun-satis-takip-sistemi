<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>

 <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-pencil"></i>
              <h3>Şifre Değiştir</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="sifreDegistir.php" name="degis" method="POST">
                <input type="text" name="sifre"/> &nbsp; <input type="submit" value="Güncelle" name="degistir" />
                </form>
                <?php 
                if(isset($_POST['degistir'])){
                  if(isset($_POST['sifre'])){
                    $user_id=$_SESSION['user'];
                    $sifre=$_POST['sifre'];
                    $guncelle=mysql_query("UPDATE admin SET user_pw='$sifre' WHERE user_id='$user_id'");
                    if($guncelle){
                      echo "Şifre Güncellendi";

                    }
                    else{
                      echo "Şifre Güncellenmedi. Yöneticiye Danışın.";
                    }
                  }
                  else{
                    echo "Tüm Alanları Doldurunuz.";
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>