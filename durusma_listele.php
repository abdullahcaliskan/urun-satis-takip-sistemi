<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-table"></i>
              <h3>Duruşma Listele</h3>
            </div>
            <div class="widget-content">
         
<div class="example_alt_pagination">
      <div id="container">
        <div class="full_width big"></div>
  <div id="demo">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Başlık</th>
          <th>Dava Türü</th>
          <th>Tarih</th>
          <th>Saat</th>
          <th>Yapılacak</th>
          <th>Müvekkil</th>
          <th></th>
          </tr>
        </thead>
      <tbody>
          
          <?php
            $sorgu=mysql_query("SELECT * FROM durusma");
            $kac_kayit=mysql_num_rows($sorgu);
            $kacar=15;
            
            if(empty($_GET['p'])){
              $p=1;
            }
            else{
              $p=$_GET['p']; 
            }
            $bugün_suan=date('Y-m-d');
            $saat_suan=date('H:i',time()+3600);
            $bugün_suan=$bugün_suan."T".$saat_suan;   
            $kac_sayfa=ceil($kac_kayit/$kacar);
            $baslangic=($p*$kacar)-$kacar;
            $sorgu=mysql_query("SELECT * FROM durusma WHERE tD_tarih_saat>='$bugün_suan' ORDER BY tD_tarih_saat LIMIT $baslangic,$kacar");
            
            while($oku=mysql_fetch_assoc($sorgu)){
              $m_no=$oku['nD_mno'];
              $d_no=$oku['nD_no'];
              echo "<tr id='s$d_no' >";
              echo "<td>".$oku['tD_baslik']."</td>";
              echo "<td>".$oku['tD_turu']."</td>";
              $tarih_saat=$oku['tD_tarih_saat'];
              $tarih=substr($tarih_saat, 0,10);
              $saat=substr($tarih_saat,11);
              echo "<td>".$tarih."</td>";
              echo "<td>".$saat."</td>";
              echo "<td>".$oku['tD_yapilacak']."</td>";
              $muvekkil_ismi=muvekkil_kim($m_no);
              echo "<td>$muvekkil_ismi</td>";
              echo "<td><a href='durusma_duzenle.php?d_no=$d_no'><i class='icon-large icon-pencil'></i></a> <a href='#' id='$d_no' onclick='durusmaSil(this.id)'><i class='icon-large icon-trash'></i></a></td>";
              echo "</tr>";
            }
            echo "<tr>";
            echo "<td colspan='7' align='center'>";
            echo "<ul class='pagination' style='padding:0px; margin:0px;'>";
            for($i=1;$i<=$kac_sayfa;$i++){
              echo "<li><a href='durusma_listele.php?p=$i'>".$i."</a></li>";
            }
            echo "</ul>";
            echo "</td>";
            
          ?>
      </tbody>
  </table>
    </div>  
        </div>
    </div>   
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>
<?php include("footer.php"); ?>