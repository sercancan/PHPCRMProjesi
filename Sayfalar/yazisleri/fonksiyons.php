<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
  <?php
  function RaporlamaYanYana($birim){
     
       chdir($birim);
    
                            foreach(glob("*.*") as $v){
                            /* if(($v === ".") OR ($v === "..")){
                                 continue;
                             } */      
                                if(mb_substr($v, -3) == "pdf"){
                                 ?>
                          <div class='col-lg-4'>
                          <img width='100px' height='100px' src="Eklentiler/Resims/R-yazisleri/pdf.png" />
                           <p> <a href='Sayfalar/yazisleri/DATAS/meclis-birimi-uploaded/<?= $v ?>'> <?=$v?> </a></p>
                          </div>
                                 <?php
                                }else if(mb_substr($v, -4) == "docx"){
                                  ?>
                          <div class='col-lg-4'>
                          <img width='100px' height='100px' src="Eklentiler/Resims/R-yazisleri/word.png"/>  
                          <p> <a href='Sayfalar/yazisleri/DATAS/meclis-birimi-uploaded/<?= $v ?>'> <?=$v?> </a></p>
                          </div>
                                  <?php
                                }else if(mb_substr($v,-4) == "xlsx"){
                                      ?>
                          <div class='col-lg-4'>
                          <img width='100px' height='100px' src="Eklentiler/Resims/R-yazisleri/excel.png"/> 
                           <p > <a class='text text-success' href='Sayfalar/yazisleri/DATAS/meclis-birimi-uploaded/<?= $v ?>'> <?=$v?> </a></p>
                          </div>
                                 
                                  <?php
                                }else if(mb_substr($v,-3) == "jpg"){
                                      ?>
                          <div class='col-lg-4'>
                          <img width='100px' height='100px' src="Eklentiler/Resims/R-yazisleri/jpg.png"/> 
                           <p > <a class='text text-success' href='Sayfalar/yazisleri/DATAS/meclis-birimi-uploaded/<?= $v ?>'> <?=$v?> </a></p>
                          </div>
                                  <?php
                                }else{
                                    ?>
                                  <div class='col-lg-4'>
                          <img width='100px' height='100px' src="Eklentiler/Resims/R-yazisleri/png.png"/> 
                           <p > <a class='text text-success' href='Sayfalar/yazisleri/DATAS/meclis-birimi-uploaded/<?= $v ?>'> <?=$v?> </a></p>
                          </div>      
                                    <?php    
                                }

                            }//foreach END
          
  }//FUNCTIONS 'Raporlama' END 

  function RaporlamaAltAlta($birim){
     
           $az = array("danger","success","warning","danger","primary");
          // $per = "DATAS/".$birim;
                $a = opendir($birim);
                while($b = readdir($a)){
                    if(($b === "." ) OR ($b === "..")){
                        continue;
                    }
                ?>
            <div class="bs-callout bs-callout-<?php $e =  rand(0, 4); echo $az[$e]; ?>">
                    <h4>
                        <?php 
                        ?>
                     <a href='<?= $birim ?>/<?=$b?>' <?php echo "class='text text-{$az[$e]}'";?>><b><?=$b?></b></a>
                     <a href="raporlama.php?sil=<?=$b;?>&birim=<?=$birim;?>" class="btn btn-primary btn-xs pull-right">Sil</a>
                    <?php    
                    ?>
                    </h4>
                
                    <p style="color:black;">
                        <?php 
                        echo "Yüklenme Tarih ve Saati : ".date("d.m.Y H:i:s A");
                            ?>
                    </p>
                   
            </div>
            <?php
              
                }
                closedir($a);
                 }//FUNCTION 'RaporlamaAltAlta' END
                 
             
               function KontrolizeYan($birimBilgi){
                              
   
                                 if(function_exists("RaporlamaYanYana")){
                                     $deger = "Sayfalar/yazisleri/DATAS/".$birimBilgi."-uploaded/";
                                     RaporlamaYanYana($deger);
                                     
                                 }else{
                                     ?>
                                     <?php
                                     die("<h1>RaporlamaYanYana Fonksiyonu Bulunamadı.</h1>");
                                 }

                           
                            }//FUNCTİON KontrolizeYan END
                            ##############################################
                            
                            
                             function KontrolizeAlt($birimBilgi){
                                 global $birimadi;
                                 
                                 if(function_exists("RaporlamaAltAlta")){
                                      $deger = "Sayfalar/yazisleri/DATAS/".$birimBilgi."-uploaded/";
                                     RaporlamaAltAlta($deger);
                                     
                                 }else{
                                     ?>
                                     <?php
                                     die("<h1>RaporlamaAltAlta Fonksiyonu Bulunamadı.</h1>");
                                 }

                            
                            }//FUNCTİON KontrolizeYan  
                 
                 
       function Birimlerdeki_Klasorlere_Yuklenen_Dosya_Boyutu($value){
           
            $toplam_Boyut2 = array();
                     $symbols = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
                     
                     $kdr = "SELECT * FROM dosya_klasor_bilgiler WHERE yukleyen_birim='$value'";
                     $resultMclis = mysql_query($kdr);
                     
                     while($trkiye = mysql_fetch_assoc($resultMclis)){
          
                         $ane = stat("./DATAS/$value-birimi-uploaded/".$trkiye["dosya_ismi"]);
                            array_push($toplam_Boyut2, $ane["size"]);
                            
                     }//while END
                     
           
                     $toplam_disk_alani2 = round(array_sum($toplam_Boyut2));
                 
                        $exp = floor(log($toplam_disk_alani2)/log(1024));

            $ret = sprintf('%.2f '.$symbols[$exp], ($toplam_disk_alani2/pow(1024, floor($exp))));
          echo $ret;    
          
       }// Birimlerdeki_Klasorlere_Yuklenen_Dosya_Boyutu END                    
                            
           
       function GLOB_ile_Klasorleri_Listeleme(){
                                 
                        
     $albums_resim = "";
       $bal = "albums";
        $dizi = array();
        
     chdir($bal);
        $viri = glob("*");
        foreach ($viri as $meta){
            if(is_dir($meta)){
                
                ?>        
                          <div  class="ultra-widget direcorying" data-counter="65" style='float:left;padding:30px;' > 
                              <a  href='#<?= $meta; ?>' style='color:gray;'>
                                  <div class="w-icon"><i class="glyphicon glyphicon-folder-open"></i></div>
                                     <?= $meta;?>
                              </a>    
                          </div>        
                 <?php           
                
            }//if END
            }//for END
                
                
       }//GLOB_ile_Klasorleri_Listeleme ENDF

           ?>
</body>
</html>
