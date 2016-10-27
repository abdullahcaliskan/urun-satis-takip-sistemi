<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php $m_no=$_GET['m_no']; ?> 
 <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-pencil"></i>
              <h3>Müvekkil Düzenle</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="muvekkil_duzenle.php?m_no=<?php echo $m_no; ?>" method="POST" class="form-horizontal row-border" />
                <?php $listele=mysql_query("SELECT * FROM muvekkil WHERE nM_no='$m_no'");
                		while($list=mysql_fetch_assoc($listele)){


                 ?>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Ad Soyad</label>
                  <div class="col-sm-6">
                    <input type="text" name="adsoyad" value="<?php echo $list['tM_ad']; ?>" class="form-control mask" data-inputmask="" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Telefon</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" value="<?php echo $list['tM_tel']; ?>" name="telefon1" data-inputmask="'mask':'(999) 999-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Telefon 2</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" value="<?php echo $list['tM_tel2']; ?>" name="telefon2" data-inputmask="'mask':'(999) 999-9999'" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">T.C No</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" value="<?php echo $list['tM_tc']; ?>" data-inputmask="" name="tcno" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Adres</label>
                  <div class="col-sm-6 left-align">
                    <textarea rows="4" cols="51" name="adres"><?php echo $list['tM_adres']; ?></textarea>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-6 left-align">
                    <input type="submit" name="send" class="btn btn-s-md btn-default" value="Müvekkili Güncelle" />
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
                <?php } ?>
                </form>
                <div align="center">
                <?php
                  if(isset($_POST['send'])){
                        if(empty($_POST['adsoyad']) or empty($_POST['telefon1']) or empty($_POST['adres']) or empty($_POST['tcno']) ){
                            echo "<i class='icon large icon-remove'></i> <p style='font-size:16px;'>Tüm Alanların Doldurulması Zorunludur.</p>";
                        }
                        else{
                        $ad=$_POST['adsoyad'];
                        $telefon1=$_POST['telefon1'];
                        $telefon2=$_POST['telefon2'];
                        $adres=$_POST['adres'];
                        $tcno=$_POST['tcno'];
                        $sorgu=mysql_query("UPDATE muvekkil SET tM_ad='$ad',tM_tel='$telefon1', tM_tel2='$telefon2', tM_adres='$adres', tM_tc='$tcno' WHERE nM_no='$m_no'");
                        if($sorgu){
                            echo "<i class='icon-large icon-ok-sign'></i> <p style='font-size:16px;'>Müvekkil Bilgileri Değiştirildi.</p>";
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