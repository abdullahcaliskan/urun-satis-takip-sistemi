<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-plus"></i>
              <h3>Servis Ekle</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="servis_ekle.php" method="POST" class="form-horizontal row-border" />
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Ad Soyad *</label>
                  <div class="col-sm-6">
                    <input type="text" name="adsoyad" class="form-control mask" data-inputmask="" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Telefon *</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" name="telefon1" data-inputmask="'mask':'(999) 999-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <!--<div class="form-group lable-padd">
                  <label class="col-sm-3">Telefon 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" name="telefon2" data-inputmask="'mask':'(999) 999-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>-->
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Servis Türü *</label>
                  <div class="col-sm-6 left-align">
                    <?php 
                      turListele();
                    ?>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Teknisyen *</label>
                  <div class="col-sm-6 left-align">
                    <?php 
                      teknisyenListele();
                    ?>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Tutar</label>
                  <div class="col-sm-6 left-align">
                    <input type="text" name="tutar"/>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Adres *</label>
                  <div class="col-sm-6 left-align">
                    <textarea rows="4" cols="51" name="adres"></textarea>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Not</label>
                  <div class="col-sm-6 left-align">
                    <textarea rows="4" cols="51" name="not"></textarea>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-6 left-align">
                    <input type="submit" name="send" class="btn btn-s-md btn-default" value="Servis Ekle" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <!-- <div class="form-group lable-padd">
                  <label class="col-sm-3">SSN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'999-99-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">999-99-9999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Product Key</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'a*-999-a999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">a*-999-a999</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Purchase Order</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'PO: aaa-999-***'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">PO: aaa-999-***</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Percent</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'99%'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">99%</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'999,999,999.99 $', 'numericInput' : true" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">right alignment</p>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Currency 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" data-inputmask="'mask':'$ 999,999,999.99', 'greedy' : false, 'rightAlignNumerics' : false" />
                  </div>
                  <div class="col-sm-3 left-align">
                    <p class="help-block">left alignment</p>
                  </div>
                </div> -->

                </form>
                <div align="center">
                <?php
                  if(isset($_POST['send'])){
                        if(empty($_POST['adsoyad']) or empty($_POST['telefon1']) or empty($_POST['adres']) ){
                            echo "<i class='icon large icon-remove'></i> <p style='font-size:16px;'>* Alanların Doldurulması Zorunludur.</p>";
                        }
                        else{
                        $ad=$_POST['adsoyad'];
                        $telefon1=$_POST['telefon1'];
                        $tur=$_POST['tur'];
                        $adres=$_POST['adres'];
                        $teknisyen=$_POST['teknisyen'];
                        $not=$_POST['not'];
                        $bugun=date('Y-m-d');
                        $tutar=$_POST['tutar']; 
                        if(empty($tutar)){
                          $odeme_durum="2";
                        }
                        else{
                          $odeme_durum="1";
                        }
                        $sorgu=mysql_query("INSERT INTO servis(tM_ad,tM_tel,tM_adres,tS_yapilan,tS_teknisyen,tS_not,dS_tarih,nOdeme,tO_durum) VALUES('$ad','$telefon1','$adres','$tur','$teknisyen','$not','$bugun','$tutar','$odeme_durum')");
                        if($sorgu){
                            echo "<script>alert('Servis Eklendi');</script>";
                            echo "<i class='icon-large icon-ok-sign'></i> <p style='font-size:16px;'>Servis Eklendi.</p>";
                        }
                        else {
                          echo "X Eklenemedi";
                        }
                        }
                  }
                ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>