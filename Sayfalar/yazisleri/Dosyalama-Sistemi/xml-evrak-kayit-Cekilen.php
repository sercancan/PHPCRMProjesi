
    <?php

//header("Content-type:text/xml charset=utf-8");
header("xml version='1.0' encoding='UTF-8'");
$metin = "<rows>
	<head>
                 <column width='40' type='ro' align='left' sort='str'>Tipi</column>
		<column width='*' type='ro' align='left' sort='str'>Dosya Adı</column>
                <column width='*' type='ro' align='left' sort='str'>Dosya Yüklenme Tarihi</column>
		<column width='*' type='ro' align='left' sort='int'>Boyutu</column>
		<column width='*' type='ro' align='left' sort='str'>Yükleyen</column>
                
                
            </head>
        ";

  $a = opendir("../DATAS/evrak-kayit-birimi-uploaded");
  $say = 0;
                while($b = readdir($a)){
                    if(($b === "." ) OR ($b === "..")){
                        continue;
                    }
                    ++$say;
                    
   //TURKCELEŞTİRME KODLARI KALSIN CALISMYO DUZENLENCEK
      /*   $bul = array("İ", "ı", "Ü", "ü", "Ğ", "ğ", "ş", "Ş", "ö", "Ö", "ç", "Ç");
    $degistir = array("I", "i", "U", "u", "G", "g", "s", "S", "o", "O", "c", "C");
 
            $b = str_replace($bul, $degistir, $b);
           */
                    
                    $metin .= "<row id='$say'>";
                    if(mb_substr($b,-3) == "pdf"){
                     $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/pdf.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == "pptx"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/pptx.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == "txt"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/documents.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }
                    else if(mb_substr($b,-3) == "jpg"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/jpeg.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == "docx"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/word.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == "gif"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/gif.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == "xlsx"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/excel.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == "png"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/png.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else{
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/folderis.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }
                                   $metin .= "<cell>
                                            <![CDATA[
                                            <a href='../yazisleri/DATAS/evrak-kayit-birimi-uploaded/$b'>$b</a>
                                                ]]>
                                    </cell>
                                    <cell>".date("d.m.Y H:i",fileatime("../DATAS/evrak-kayit-birimi-uploaded/$b"))."</cell>
                                     <cell>".filesize("../DATAS/evrak-kayit-birimi-uploaded/$b")."</cell>
                                     <cell>Sercan Göger</cell>
                                </row>
                                    ";
                    
                }//while
      $metin .=  "</rows>";
                
                echo $metin;
               
                //touch("dosyabilgileri.xml");
                $dosya = fopen('xml-evrak-kayit-Cekilen.xml', 'w');
            fwrite($dosya, $metin);
                    fclose($dosya);
 
    ?>

