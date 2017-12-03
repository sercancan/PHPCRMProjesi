<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title>DOSYA YUKLE SAHSI YONETIM</title>
</head>
<body>
    <?php
    session_start();
    require_once '../VTYS-CONNECT.php';
    
    $ds  = DIRECTORY_SEPARATOR;  //1
     
     
     $durum = $_POST["durum"];
      $storeFolder="albums/$durum";
   
            // $_COOKIE["durum"] = $storeFolder;
             setcookie("durum",$storeFolder,time()+36000);
             ECHO "$durum KLASORU";

    
if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath =$_COOKIE["durum"]."/";  //4
    $targetFile = $targetPath.$_FILES['file']['name'];  //5
    
    $dosyaBoyutu = $_FILES["file"]["size"]; 
    
    move_uploaded_file($tempFile,$targetFile); //6
    
   
        
}//if

 
if(isset($_POST["AileAlbumInsert"])){
       
  /*   $dosyaAciklama = $_POST["aciklama"];
      $dosyaismi = $_POST["eklenenDosyadi"];    
       $dosyaYuklenmeTarihi = date("d.m.Y H:i:s");
       $yukleyenKisi = "sercan"; // $_SESSION["kisi"];
       $dosyaBoyutu = $_POST["dosyaBoyutu"];
            */
 /*$ekleQuery = "INSERT INTO aile-albums 
        (dosya_ismi,dosya_aciklama,dosya_yuklenme_tarihi,yukleyen_kullanici,dosya_boyutu,yukleyen_birim)
        VALUES ('$dosyaismi','$dosyaAciklama','$dosyaYuklenmeTarihi','$yukleyenKisi','$dosyaBoyutu','meclis')";
          
    $resulting = mysql_query($ekleQuery);
    */
  // echo "Eklendi..";
   }
   
    
//SİLME İŞLEMİ AJAX İLE GELEN VERI İLE SİLİNİYOR..

if(isset($_POST["Silinecekfilename"])){
     $silinecek = $_POST["Silinecekfilename"];
    
    unlink("./Aile-Albums/{$silinecek}");
    echo "<b>{$silinecek} isimli Dosya Silindi...</b>";
}
    ?>
</body>
</html>
