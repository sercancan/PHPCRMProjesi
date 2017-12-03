
    <?php
      $json = array();

$json['items'][0] = array(
    'id'=> "anadizin",
    'text'=> "Ana dizin",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "folderis.png",
    'selected'=>"true",
     'enable_progress' =>"disable_progress"
);

$evraKayitDosyaSayisi = 0;
$evraKayitKlasorSayisi = 0;

    $viri = glob("*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                $evraKayitKlasorSayisi++;    
        }else{
            $evraKayitDosyaSayisi++;
        }    
      }//FOREACH


$json['items'][1] = array(
    'id'=> "evrakkayit",
    'text'=> "Evrak Kayıt Birimi",
    'text2'=>"$evraKayitKlasorSayisi Klasor \n  $evraKayitDosyaSayisi Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
     'enable_progress' =>"disable_progress"
);

$json['items'][2] = array(
    'id'=> "encumen",
    'text'=> "Encümen Birimi",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);

$json['items'][3] = array(
    'id'=> "arsiv",
    'text'=> "Arşiv Birimi",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);
$json['items'][4] = array(
    'id'=> "evlendirme",
    'text'=> "Evlendirme Birimi",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);
$json['items'][5] = array(
    'id'=> "meclis",
    'text'=> "Meclis Birimi",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);
$json['items'][6] = array(
    'id'=> "personel",
    'text'=> "Personel Birimi",
    'text2'=>"15 Klasor \n  25 Dosya",
    'bubble'=>"9",
    'icon'=> "systemicon.png",
    'selected'=>"true",
    'enable_progress' =>"disable_progress"
);


echo "<pre>";
echo json_encode($json);


    ?>
