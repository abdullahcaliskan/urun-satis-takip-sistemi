<?php include("header.php"); include("bildirim.php"); include("menu.php"); ?>
<?php 

?>
  <div class="page-content">
    <div class="content container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-fullscreen"></i>
              <h3>Teknisyen Karşılaştırması</h3>

            </div>
            <div class="widget-content">
              <div class="panel-body">
<div class="row">
        <div class="col-md-12">
          <div class="row">
<?php             	$ariza_tur=array("Arıza","Montaj","Klima-Montaj","Tanıtım","Ek Garanti","Aksesuar Satış","Nakliye"); ?>            
            <table border="1" width="1000" align="center" style='text-align:center; border:1px solid #ccc;'>
            	<tr>
            	<td></td>
            		<?php 
            		for($j=0;$j<7;$j++){
            			echo "<td><b>".$ariza_tur[$j]."</b></td>";
            		}
            		?>
            	</tr>
            	<?php 
            	$teknisyenler=array("Vedat Kavala","Hasan Tatar","Soner Tutar","H İbrahim Coşkun","Sefa Deniz","Ali Ateş","Ali Dönmez","Yakup Türkmen","Koray");

            	for($i=0;$i<9;$i++)
            	{
            		$tek=$teknisyenler[$i];
            		
			echo "<tr>";
			echo "<td><b>".$tek."</b></td>";
			for($j=0;$j<7;$j++){
				$kosul=$ariza_tur[$j];
				echo "<td>";
				sayi_ver($kosul,$tek);
				echo "</td>";
			}
			echo "</tr>";
			
            	}
            	?>
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
</div>
  
<?php  include("footer.php"); ?>