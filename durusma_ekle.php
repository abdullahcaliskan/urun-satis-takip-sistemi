<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-plus"></i>
              <h3>Duruşma Ekle</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                <form action="durusma_ekle.php" method="POST" class="form-horizontal row-border" />
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Müvekkil Seç</label>
                  <div class="col-sm-6">
                    <div align="left"><?php muvekkil_selectbox(); ?></div>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Başlık</label>
                  <div class="col-sm-6">
                    <div align="left"><input type="text" name="baslik"/></div>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Duruşma Türü</label>
                  <div class="col-sm-6">
                    <div align="left"><input type="text" name="durusma_turu"/></div>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Tarih ve Saat</label>
                  <div class="col-sm-6 left-align">
                    <input type="text" name="tarih" id="inputField" /> Zaman <input type="text" name="saat" style="width:35px;"/>:<input type="text" style="width:35px;" name="dakika"/>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Yapılacak</label>
                  <div class="col-sm-6 left-align">
                    <textarea rows="4" cols="51" name="yapilacak"></textarea>
                  </div>
                  <div class="col-sm-3 left-align">
                    
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3"></label>
                  <div class="col-sm-6 left-align">
                    <input type="submit" name="send" class="btn btn-s-md btn-default" value="Duruşma Ekle" />
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
                        if(empty($_POST['baslik']) or empty($_POST['durusma_turu']) or empty($_POST['tarih']) ){
                            echo "<i class='icon large icon-remove'></i> <p style='font-size:16px;'>Tüm Alanların Doldurulması Zorunludur.</p>";
                        }
                        else{
                        $baslik=$_POST['baslik'];
                        $durusma_turu=$_POST['durusma_turu'];
                        $tarih=$_POST['tarih'];
                        $saat=$_POST['saat'];
                        $dakika=$_POST['dakika'];
                        $m_no=$_POST['muvekkil_no'];
                        if(empty($saat)){ $saat="00"; }
                        if(empty($dakika)){ $dakika="00"; }
                        if(strlen($saat)==1){
                          $saat="0".$saat;
                        }
                        if(strlen($dakika)==1){
                          $dakika="0".$dakika;
                        }
                        $tarih=$tarih."T".$saat.":".$dakika;

                        $yapilacak=$_POST['yapilacak'];
                        $sorgu=mysql_query("INSERT INTO durusma(tD_baslik,tD_turu,tD_tarih_saat,tD_yapilacak,nD_mno) VALUES('$baslik','$durusma_turu','$tarih','$yapilacak','$m_no')");
                        if($sorgu){
                            echo "<i class='icon-large icon-ok-sign'></i> <p style='font-size:16px;'>Duruşma Eklendi.</p>";
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