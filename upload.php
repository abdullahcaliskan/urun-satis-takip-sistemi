<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-upload"></i>
              <h3>Dosya Yükle</h3>
            </div>
            <div class="widget-content">
              <div class="panel-body">
                
<form name="upload" action="" method="POST" enctype="multipart/form-data">
Dosya Türünü Seç :<select name="dosya_tipi">
  <option value="dava">Dava Dosyası</option>
  <option value="icra">İcra Dosyası</option>
  <option value="dilekce">Dilekçe</option>
</select><br>
<input type="file" name="file"/><br>
<input type="submit" name="yukle" value="Yükle"/>
</form><?php 
  if(isset($_POST['yukle'])){
    if(isset($_FILES['file']['name'])){
      if(!empty($_FILES['file']['name'])){
        $dosya_tipi=$_POST['dosya_tipi'];
        if($dosya_tipi=="dava"){$location="uploads/dava/";}
        else if($dosya_tipi=="icra"){$location="uploads/icra/";}
        else if($dosya_tipi=="dilekce"){$location="uploads/dilekce/";}
        $name=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $var_dizinler=array("uploads/dava/","uploads/icra/","uploads/dilekce/");
        $i=0;
        for($sayac=0;$sayac<3;$sayac++){
          $dosya=$location.$name;
          $dosya_adi=explode(".", $name);
        
        
        if(file_exists($dosya)){
          $name=$dosya_adi[0].$i.".".$dosya_adi[1];
          $i++;
                
        }
        else {
          
          if(copy($tmp_name, $location.$name)){
            echo "<br>Dosya Yüklendi.";
            break;
         }
          else{
            if($sayac==3){
           echo "Dosya Yüklenemedi.";
         }
         continue;
          }
      }
        }
        

      }
      else{
        echo "Choose a file";
      }
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