<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-plus"></i>
              <h3>Tahsilat</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
              <?php $s_no=$_GET['s_no']; ?>
                <form action="tahsilat.php?s_no=<?php echo $s_no; ?>" method="POST" class="form-horizontal row-border" />
                <table>
                
                <?php 
                
                


                $sorgu=mysql_query("SELECT * FROM servis WHERE nS_no='$s_no'");
                while ($oku=mysql_fetch_assoc($sorgu)) {
                  $tutar=$oku['nOdeme'];
                  $tahsil_edilmis=$oku['nTahsil_edilen'];
                  $kalan=$tutar-$tahsil_edilmis;
                  echo "<tr>";
                  echo "<td>Ad Soyad</td><td>".$oku['tM_ad']."</td></tr>";
                  echo "<td>Telefon</td><td>".$oku['tM_tel']."</td></tr>";
                  echo "<td>Adres</td><td>".$oku['tM_adres']."</td></tr>";
                  echo "<td>Teknisyen</td><td>".$oku['tS_teknisyen']."</td></tr>";
                  echo "<td>Yapılan</td><td>".$oku['tS_yapilan']."</td></tr>";
                  echo "<td>Not</td><td>".$oku['tS_not']."</td></tr>";
                  echo "<td>Tarih</td><td>".$oku['dS_tarih']."</td></tr>";
                  echo "<td>Toplam Borç</td><td><b>".$tutar."</b></td></tr>";
                  echo "<td>Tahsil Edilmiş</td><td><b>".$tahsil_edilmis."</b></td></tr>";
                  echo "<td>Müşterinin Ödemesi Gereken</td><td><b>".$kalan."</b></td></tr>";
                  echo "<td colspan='2'><input type='text' name='tutar' /> | <input type='submit' value='Tahsil Et' name='gonder'/></td>";
                  echo "</tr>";
                }
              
              
                if(isset($_POST['gonder'])){
                  $tutar=$_POST['tutar'];
                  if($tutar==$kalan){
                    $odeme_durum="2";
                  }
                  else{
                    $odeme_durum="1";
                  }
                  $tahsilat=$tutar+$tahsil_edilmis;
                  $tahsil=mysql_query("UPDATE servis SET nTahsil_edilen='$tahsilat', tO_durum='$odeme_durum'  WHERE nS_no='$s_no'");
                  if($tahsil){
                    echo "<script>alert('Tahsilat Gerçekleştirildi');</script>";
                  }
                  else{
                    echo "<script>alert('Tahsilat Gerçekleştirilemedi. yöneticiye danısın');</script>";
                  }
                }
              
                ?>

                </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>