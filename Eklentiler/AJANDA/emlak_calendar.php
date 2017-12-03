<!DOCTYPE html>

<html>
    <?php 
    if(file_exists("./links.php")){
            include_once 'links.php';
    }else{
        echo "LINKLER.php Dosyası Bulunamadı.<br>";
        exit();
    }
    ?>
   
<?php 
   //require_once('codebase/connector/scheduler_connector.php');

if(file_exists("../../Sayfalar/VTYS-CONNECT.php")){
   require_once '../../Sayfalar/VTYS-CONNECT.php';
}else{
    echo "VTYS-CONNECT.php Dosyası Bulunamadı <br>";
    exit();
}
 
  $quer = mysql_query("SELECT * FROM yazi_isleri_ajanda");
   while($oku = mysql_fetch_assoc($quer)){
       ?>
<p id="ter"> </p>
<input type="text" id="numaralar" hidden value="<?php echo $oku["id"]; ?>" >  </input>
<input type="text" id="veriler"  hidden value="<?php echo $oku["veri"]; ?>"> </input>
<input type="text" id="tarihler" hidden value="<?php echo $oku["tarih"]; ?>"> </input>
  <input type="text" id="baslangicSt" hidden value="<?php echo $oku["baslangicSaat"]; ?>" > </input>
  <input type="text" id="bitisSt" hidden value="<?php echo $oku["bitisSaat"]; ?>"> </input>
  <input type="text" id="renk" hidden value="<?php echo $oku["renk"]; ?>"> </input>
    
   <?php
   // echo $oku["numara"] . "-".$oku["veri"]."-".$oku["tarih"]."-".$oku["saat"]."<br>";
     }
   mysql_close();
   
?>
   
</head>
<body onload="init();">
    
<div id="gelen"></div>

    <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
		<div class="dhx_cal_navline">

                    
                    
                           
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
                        <div class="dhx_cal_tab" name="agenda_tab" style="right:265px;"></div>
                        <div class="dhx_cal_tab" name="year_tab" style="right:330px;"></div>
			<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
			<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
			<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>
	</div>
    
    
    <?php
    // put your code here
    ?>
</body>
</html>
