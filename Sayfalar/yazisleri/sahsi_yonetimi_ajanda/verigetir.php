<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
         include_once '../../VTYS-CONNECT.php';
         
  if(isset($_GET["ekle"])){
  
      
        $veri=$_GET["name"];  
        $id = $_GET["idim"];
        $tarih = $_GET["tarih"];
        $saat = $_GET["saat"];  
        $ingilizceAylar = array("Jan"=>1,"Feb"=>2,"Mar"=>3,"Apr"=>4,"May"=>5,"Jun"=>6,
                     "Jul"=>7,"Aug"=>8,"Sep"=>9,"Oct"=>10,"Nov"=>11,"Dec"=>12);
        
    
        $gun = $_GET["gun"];
        $ay =  $_GET["ay"];
        $year = $_GET["yil"];
        $tarihNew = "$year-$ay-$gun";
      
        
        $baslangicTime = $_GET["starttime"];
        $bitisTime = $_GET["endtime"];
        
        $mekan = $_REQUEST["mekan"];
        $renk = $_REQUEST["renk"];

           
                
     $ekle =  mysql_query("INSERT INTO sahsi_isler_ajanda(id,veri,tarih,baslangicSaat,bitisSaat,renk)"
                                   . " VALUES ('$id','$veri','$tarihNew','$baslangicTime','$bitisTime','$renk')");
     mysql_close();
     
  }else if(isset($_GET["sil"])){
    
      $idle = $_GET["sil"];
 
    
     $ekle =  mysql_query("DELETE FROM sahsi_isler_ajanda WHERE id=$idle");
     mysql_close();
     
     
  } else if(isset($_POST["veri"])){
      
      $guncelle = $_POST["veri"];
      $numara = $_POST["no"];
      $tarih = $_POST["tarih"];
      
      $start = $_POST["start"];
      $end = $_POST["end"];
      $renk = $_POST["renk"];
      
    
       // , baslangicSaat='$start', bitisSaat='$end', renk='$renk'
     $ekle =  mysql_query("UPDATE sahsi_isler_ajanda SET veri='$guncelle', "
                                              . "baslangicSaat='$start', bitisSaat='$end', renk='$renk',tarih='$tarih'"
                                                                                        . " WHERE id=$numara");
     if($ekle)
           echo "Günceleniyo";
     else
         echo "Olmuyor";
     mysql_close();
      
      
  }
  
  
  
        ?>
</body>
</html>
