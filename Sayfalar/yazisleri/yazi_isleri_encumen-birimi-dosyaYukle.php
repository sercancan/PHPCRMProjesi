<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
   require_once '../VTYS-CONNECT.php';
    
    $ds          = DIRECTORY_SEPARATOR;  //1
    $storeFolder = 'DATAS/encumen-birimi-uploaded';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = $storeFolder.$ds;  //4
    $targetFile = $targetPath.$_FILES['file']['name'];  //5
 
    $bul = array("İ", "ı", "Ü", "ü", "Ğ", "ğ", "ş", "Ş", "ö", "Ö", "ç", "Ç");
    $degistir = array("I", "i", "U", "u", "G", "g", "s", "S", "o", "O", "c", "C");
 
         $targetFile = str_replace($bul, $degistir, $targetFile);
         
    move_uploaded_file($tempFile,$targetFile); //6
}//if

    if(isset($_POST["Veriekle"])){
       
     $dosyaAciklama = $_POST["aciklama"];
      $dosyaismi = $_POST["eklenenDosyadi"];    
       $dosyaYuklenmeTarihi = date("d.m.Y H:i:s");
       $yukleyenKisi = "sercan"; // $_SESSION["kisi"];
       $dosyaBoyutu = $_POST["dosyaBoyutu"];
            
 $ekleQuery = "INSERT INTO dosya_klasor_bilgiler 
        (dosya_ismi,dosya_aciklama,dosya_yuklenme_tarihi,yukleyen_kullanici,dosya_boyutu,yukleyen_birim)
        VALUES ('$dosyaismi','$dosyaAciklama','$dosyaYuklenmeTarihi','$yukleyenKisi','$dosyaBoyutu','encumen')";
          
    $resulting = mysql_query($ekleQuery);
    
   echo "Eklendi..";
   }
   
//SİLME İŞLEMİ AJAX İLE GELEN VERI İLE SİLİNİYOR..

if(isset($_POST["filename"])){
     $silinecek = $_POST["filename"];
    
    unlink("DATAS/encumen-birimi-uploaded/{$silinecek}");
    echo "<b>{$silinecek} isimli Dosya Silindi...</b>";
}
    ?>
</body>
</html>
