<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-file"></i>
              <h3>Dosya Listele</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">

                
<?php 
if(isset($_POST['send'])){
  $dosya_tipi=$_POST['dosya_tipi'];
        if($dosya_tipi=="dava"){$location="uploads/dava/";}
        else if($dosya_tipi=="icra"){$location="uploads/icra/";}
        else if($dosya_tipi=="dilekce"){$location="uploads/dilekce/";}
$dir = opendir($location); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

while (($dosya = readdir($dir)) !== false) // While Döngüsüne girerek dosyamızı okuyoruz.
{

if(! is_dir($dosya)){ // Bu if döngüsü dosya harici olan yani klasör yollarını gizlememizi sağlıyor. eyer if döngüsünü silerseniz klasör yolunu noktalarla gösterecektir..
$dosya_yolu=$location.$dosya;
echo "<div class='listele_dosya'>";

$file=pathinfo($dosya_yolu);
$dosya_kisaltilmis=$file['filename'];
$dosya_kisaltilmis=substr($dosya_kisaltilmis, 0,24);
$dosya_kisaltilmis=$dosya_kisaltilmis."..";
echo "<b>".$dosya_kisaltilmis."</b><br>";
$dosya_size=$location.$dosya;

$dosya_size=filesize($dosya_size);
$dosya_size=($dosya_size/1024)/1024;
$dosya_size=round($dosya_size,2);
echo $dosya_size." MB <br>";
$uzanti=$file['extension'];
if($uzanti=="doc" or $uzanti=="docx"){echo "Word Dosyası<br>";}
else if($uzanti=="xls" or $uzanti=="xlsx"){echo "Excel Dosyası<br>";}
else if($uzanti=="ppt" or $uzanti=="pptx"){echo "PowerPoint Dosyası<br>";}
else if($uzanti=="pdf"){echo "PDF Dosyası<br>";}
else if($uzanti=="png" or $uzanti=="jpg" or $uzanti=="jpeg"){echo "Resim Dosyası<br>";}
else if($uzanti=="txt"){echo "Metin Dosyası<br>";}
else if($uzanti=="rar" or $uzanti=="zip" or $uzanti=="tar.gz"){echo "Arşiv Dosyası<br>";}
else{echo "Bilinmeyen Dosya<br>";}
echo "<a href='".$dosya_yolu."' style='margin-right:5px;'><i class='icon-large icon-download-alt'></i></a> | <a style='margin-left:5px;' href='#' onclick='dosya_sil(this.id())' id='".$dosya_yolu."'><i class='icon-large icon-trash'></i>";


echo "</div>";

}}
closedir($dir); //İşimiz Bitti
 }
 else{
  ?>
  <form action="dosya_listele.php" name="listele_file" method="POST">
  Dosya Türünü Seç :<select name="dosya_tipi">
  <option value="dava">Dava Dosyası</option>
  <option value="icra">İcra Dosyası</option>
  <option value="dilekce">Dilekçe</option>
</select><br>
<input type="submit" name="send" value="Listele" />
  </form>
  <?php 
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