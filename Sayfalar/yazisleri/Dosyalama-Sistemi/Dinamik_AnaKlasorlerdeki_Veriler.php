
    <?php
      $json = array();

      if(isset($_POST["DosyaKlasor"])){
           $toplamKlasorSayisi = 0;
$toplamDosyaSayisi = 0;
        
$json['items'][0] = array(
    'id'=> "anadizin",
    'text'=> "Ana dizin",
    'text2'=>"$toplamKlasorSayisi Klasor \n  $toplamDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "folderis.png",
    'selected'=>"true",
     'enable_progress' =>"disable_progress"
);

$evraKayitDosyaSayisi = 0;
$evraKayitKlasorSayisi = 0;

    $viri = glob("../DATAS/evrak-kayit-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $evraKayitKlasorSayisi++;
                
        }else{
            $evraKayitDosyaSayisi++;
        }    
      }//FOREACH


$json['items'][1] = array(
    'id'=> "evrakkayit",
    'text'=> "Evrak Kayit Birimi",
    'text2'=>"$evraKayitKlasorSayisi Klasor \n  $evraKayitDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
     'enable_progress' =>"disable_progress"
);

$encumenDosyaSayisi = 0;
$encumenKlasorSayisi = 0;

    $viri = glob("../DATAS/encumen-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $encumenKlasorSayisi++;    
        }else{
            $encumenDosyaSayisi++;
        }    
      }//FOREACH
$json['items'][2] = array(
    'id'=> "encumen",
    'text'=> "Encümen Birimi",
    'text2'=>"$encumenKlasorSayisi Klasor \n  $encumenDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);
$arsivDosyaSayisi = 0;
$arsivKlasorSayisi = 0;

    $viri = glob("../DATAS/arsiv-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $arsivKlasorSayisi++;    
        }else{
            $arsivDosyaSayisi++;
        }    
      }//FOREACH
$json['items'][3] = array(
    'id'=> "arsiv",
    'text'=> "Arşiv Birimi",
    'text2'=>"$arsivKlasorSayisi Klasor \n  $arsivDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);
$evlendirmeDosyaSayisi = 0;
$evlendirmeKlasorSayisi = 0;

    $viri = glob("../DATAS/evlendirme-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $evlendirmeKlasorSayisi++;    
        }else{
            $evlendirmeDosyaSayisi++;
        }    
      }//FOREACH
$json['items'][4] = array(
    'id'=> "evlendirme",
    'text'=> "Evlendirme Birimi",
    'text2'=>"$evlendirmeKlasorSayisi Klasor \n  $evlendirmeDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);

$meclisDosyaSayisi = 0;
$meclisKlasorSayisi = 0;

    $viri = glob("../DATAS/meclis-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $meclisKlasorSayisi++;    
        }else{
            $meclisDosyaSayisi++;
        }    
      }//FOREACH
$json['items'][5] = array(
    'id'=> "meclis",
    'text'=> "Meclis Birimi",
    'text2'=>"$meclisKlasorSayisi Klasor \n  $meclisDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);

$personelDosyaSayisi = 0;
$personelKlasorSayisi = 0;

    $viri = glob("../DATAS/personel-birimi-uploaded/*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $personelKlasorSayisi++;    
        }else{
            $personelDosyaSayisi++;
        }    
      }//FOREACH
      
$json['items'][6] = array(
    'id'=> "personel",
    'text'=> "Personel Birimi",
    'text2'=>"$personelKlasorSayisi Klasor \n  $personelDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);

$toplamKlasorSayisi = $evraKayitKlasorSayisi + $encumenKlasorSayisi + $arsivKlasorSayisi 
                     + $evlendirmeKlasorSayisi + $meclisKlasorSayisi + $personelKlasorSayisi;

$toplamDosyaSayisi = $evraKayitDosyaSayisi + $encumenDosyaSayisi + $arsivDosyaSayisi
                     +$evlendirmeDosyaSayisi + $encumenDosyaSayisi + $arsivDosyaSayisi;




echo "<pre>";
$jsonDizinler =  json_encode($json);
echo $jsonDizinler;
$dosya = fopen('anaKlasorler.json', 'w');
            fwrite($dosya, $jsonDizinler);
                    fclose($dosya);
          
      }//İF post 



    ?>
