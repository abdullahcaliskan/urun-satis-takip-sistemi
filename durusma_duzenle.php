<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php $d_no=$_GET['d_no']; ?> 
 <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-pencil"></i>
              <h3>Duruşma Düzenle</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="durusma_duzenle.php?d_no=<?php echo $d_no; ?>" method="POST" class="form-horizontal row-border" />
                <?php $listele=mysql_query("SELECT * FROM durusma WHERE nD_no='$d_no'");
                		while($list=mysql_fetch_assoc($listele)){


                 ?>
                 <div class="form-group lable-padd">
                  <label class="col-sm-3">Müvekkil</label>
                  <div class="col-sm-6" align="left">
                  <?php
                    $d_m_no=$list['nD_mno'];
                    
                    $srg=mysql_query("SELECT * FROM muvekkil");
                    echo "<select name='muvekkil'>";
                    while($cek=mysql_fetch_assoc($srg)){
                      if($cek['nM_no']==$d_m_no){
                        echo "<option selected value='".$cek['nM_no']."'>".$cek['tM_ad']."</option>";
                      }
                      else{
                        echo "<option value='".$cek['nM_no']."'>".$cek['tM_ad']."</option>";
                      }
                    }
                    echo "</select>";
                  ?>
                    </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Başlık</label>
                  <div class="col-sm-6">
                    <input type="text" name="baslik" value="<?php echo $list['tD_baslik']; ?>" class="form-control mask" data-inputmask="" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Dava Türü</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control mask" value="<?php echo $list['tD_turu']; ?>" name="dava_turu" data-inputmask="" />
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Tarih</label>
                  <div class="col-sm-6" align="left">
                  <?php $tarih_saat=$list['tD_tarih_saat'];
                    $tarih=substr($tarih_saat, 0,10);
                    $saat=substr($tarih_saat,11,2);
                    $dakika=substr($tarih_saat, 14,2);
                  ?>
                    <input type="text" name="tarih" id="inputField" value="<?php echo $tarih ?>">Zaman<input type="text" name="saat" value="<?php echo $saat; ?>" style="width:35px;"/>:<input type="text" style="width:35px;" value="<?php echo $dakika; ?>" name="dakika"/>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Yapılacak</label>
                  <div class="col-sm-6 left-align">
                    <textarea rows="4" cols="51" name="yapilacak"><?php echo $list['tD_yapilacak']; ?></textarea>
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
                        if(empty($_POST['baslik']) or empty($_POST['tarih']) or empty($_POST['dava_turu']) ){
                            echo "<i class='icon large icon-remove'></i> <p style='font-size:16px;'>Tüm Alanların Doldurulması Zorunludur.</p>";
                        }
                        else{
                        $muvekkil=$_POST['muvekkil'];
                        $baslik=$_POST['baslik'];
                        $dava_turu=$_POST['dava_turu'];
                        $tarih=$_POST['tarih'];
                        $saat=$_POST['saat'];
                        $dakika=$_POST['dakika'];
                        $yapilacak=$_POST['yapilacak'];
                        if(empty($saat)){
                          $saat="00";
                        }
                        if(strlen($saat)!=2){
                          $saat="0".$saat;
                        }
                        if(empty($dakika)){
                          $dakika="00";
                        }
                        if(strlen($dakika)!=2){
                          $dakika="0".$dakika;
                        }
                        }
                        $zaman=$tarih."T".$saat.":".$dakika;
                        $sorgu=mysql_query("UPDATE durusma SET nD_mno=$muvekkil,tD_baslik='$baslik',tD_turu='$dava_turu',tD_tarih_saat='$zaman',tD_yapilacak='$yapilacak'  WHERE nD_no='$d_no'");
                        if($sorgu){
                            echo "<i class='icon-large icon-ok-sign'></i> <p style='font-size:16px;'>Duruşma Güncellendi.</p>";
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