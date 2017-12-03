<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    if(is_file("../VTYS-CONNECT.php")){
     include_once "../VTYS-CONNECT.php";
    
    }else{
         die("../VTYS-CONNECT.php DOSYASI BULUNAMADI.");
    }
   $hata = "";
                                                
     $Admod="";
   $soyadMod="";
     $mailMod="";
     $telefonMod="";
   
     if($_POST["durum"] == "guncelle"){
         
         $id = mysql_real_escape_string($_POST["id"]);
         $ad = strip_tags($_POST["ad"]);
         $soyad = mysql_real_escape_string($_POST["soyad"]);
         $email = strip_tags($_POST["mail"]);
         $telefon = mysql_real_escape_string($_POST["tel"]);
         
       
        $islemUPDATE = mysql_query("UPDATE yazi_isleri_rehber "
                                . "SET email='$email',telefon='$telefon',ad='$ad',soyad='$soyad' WHERE id='$id'");
            
        
        mysql_close();
         exit();
     }
     
     if($_POST["durum"]=="sil"){

         $silinecekID = mysql_real_escape_string($_POST["idsi"]);
             $islemDELETE = mysql_query("DELETE FROM yazi_isleri_rehber WHERE id='$silinecekID'");
         exit();
     }//SİLME DURUMU ICIN 
     
                if($_POST["durum"]=="ekle"){
                                                    
                                                    if($_POST["ad"] != ""){
                                                        $ad = $_POST["ad"];
                                                       
                                                            $Admod = htmlspecialchars(addslashes($ad));
                                                            $checket = ereg("[^Aa-zZ aA-zZ]",$Admod,$sonuc);
                                                            if($sonuc[0] > 0){
                                                                print " 'Ad' bölümüne Rakamsal veri girişinde bulundunuz.!";
                                                                exit();
                                                            }
                                                    }else{
                                                        $hata .= " Ad Bölümünü Boş Bıraktınız.<br>";
                                                        echo $hata;
                                                        exit();
                                                    }
                                                    if($_POST["soyad"] != ""){
                                                         $soyad = $_POST["soyad"];
                                                        
                                                         $soyadMod = htmlspecialchars(addslashes($soyad));
                                                         $checket = ereg("[^a-z A-Z]",$soyadMod,$sonuc);
                                                            if($sonuc[0] > 0){
                                                                print " 'Soyad' bölümüne Rakamsal veri girişinde bulundunuz.!";
                                                                exit();
                                                            }
                                                    }else{
                                                        $hata .=" Soyad Bölümünü boş bıraktınız.<br>";
                                                        echo $hata;
                                                        exit();
                                                    }
                                                    if($_POST["mail"] != ""){
                                                     
                                                        $mail = $_POST["mail"];
                      
                                                           if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                                                                    $mailMod = htmlspecialchars(addslashes($mail));
                                                           }else{
                                                               $sir = "E-mail istenilen standartta giriniz..(NOT : Türkçe Karakterler Girilemez )";
                                                               printf("%s \n",$sir);
                                                               exit();
                                                           }
                                                    }else{
                                                         $hata .=" Email bölümünü boş bıraktınız<br>";
                                                         echo $hata;
                                                         exit();
                                                    }
                                                    if($_POST["telefon"] != ""){
                                                         $telefon = $_POST["telefon"];
                                                         $telefonMod = htmlspecialchars(addslashes($telefon));
                                                         $rakamsal = mb_strlen($telefonMod);
                                                        
                                                         $q1 = ereg("([0-9]{4})-([0-9]{3})-([0-9]{2})-([0-9]{2})",$telefonMod,$sonuc1);
                                                        if($q1 > 0){
                                                             $telefonMod = $sonuc1[0];
                                                        }else{
                                                            printf("Hatalı Numara Girişi Yaptınız..!İstenilen şekilde Girmeniz Gerekmektedir.<br> Örnek : (0123-456-78-91)");
                                                            exit();
                                                        }
                                                    }else{
                                                         $hata .=" Telefon bölümünü boş bıraktınız <br>";
                                                         echo $hata;
                                                         exit();
                                                        
                                                    }
      $ekle = mysql_query("INSERT INTO yazi_isleri_rehber(ad,soyad,email,telefon) VALUES ('$Admod','$soyadMod','$mailMod','$telefonMod')");
         if(!$ekle){
           ?>
           <div class="alert alert-dismissable alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>Eklerken HATA !</h4> 

		<p>Girerken bir hata tuş kodlaması yapmış olabilirsin lütfen kriterlere uygun giriş yapınız</p>
		<br>
		<p><a class="btn btn-danger" href="#">Sorun Gider.!</a></p>
	</div>
           
            <?php
           }else{
              ?>
            <div class="alert alert-dismissable alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>Kayıt Başarılı.</h4> 

                <p><?php echo "<b>{$Admod} {$soyadMod}</b>"; ?> adlı kişi Rehbere kaydedildi.</p>
			<br>
		<p><a class="btn btn-success" href="#">Okay</a></p>
                
            </div>    
               <?php
           }
           
                }//if EKL
             mysql_close();  
             

    
    
    ?>
</body>
</html>
