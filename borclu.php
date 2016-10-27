<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-table"></i>
              <h3>Borçlu Listesi</h3>
            </div>
            <div class="widget-content">
         
<div class="example_alt_pagination">
      <div id="container">
        <div class="full_width big"></div>
  <div id="demo">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
      <thead>
        <tr>
          <th>Ad Soyad</th>
          <th>Telefon</th>
          <th>Servis</th>
          <th>Teknisyen</th>
          <th>Tutar</th>
          <th>Tahsil Edilmiş</th>
          <th>Adres</th>
          <th>Not</th>
          <th></th>
          </tr>
        </thead>
      <tbody>
          
          <?php
            $sorgu=mysql_query("SELECT * FROM servis WHERE tO_durum='1'");
            $kac_kayit=mysql_num_rows($sorgu);
            $kacar=15;
            
            if(empty($_GET['p'])){
              $p=1;
            }
            else{
              $p=$_GET['p']; 
            }   
            $kac_sayfa=ceil($kac_kayit/$kacar);
            $baslangic=($p*$kacar)-$kacar;
            $sorgu=mysql_query("SELECT * FROM servis WHERE tO_durum='1' ORDER BY tM_ad LIMIT $baslangic,$kacar");
            
            while($oku=mysql_fetch_assoc($sorgu)){
              $s_no=$oku['nS_no'];
              echo "<tr id='s$s_no' >";
              echo "<td>".$oku['tM_ad']."</td>";
              echo "<td>".$oku['tM_tel']."</td>";
              echo "<td>".$oku['tS_yapilan']."</td>";
              echo "<td>".$oku['tS_teknisyen']."</td>";
              echo "<td>".$oku['nOdeme']."</td>";
              echo "<td>".$oku['nTahsil_edilen']."</td>";
              echo "<td>".$oku['tM_adres']."</td>";
              echo "<td>".$oku['tS_not']."</td>";
              
              echo "<td><a href='tahsilat.php?s_no=$s_no'><i class='icon-large icon-shopping-cart'></i></a> <a href='#' id='$s_no' onclick='servisSil(this.id)'><i class='icon-large icon-trash'></i></a></td>";
              echo "</tr>";
            }
            echo "<tr>";
            echo "<td colspan='6' align='center'>";
            echo "<ul class='pagination' style='padding:0px; margin:0px;'>";
            for($i=1;$i<=$kac_sayfa;$i++){
              echo "<li><a href='borclu.php?p=$i'>".$i."</a></li>";
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