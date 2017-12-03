
    <?php
    
header("Content-type:text/xmins");
$metin = "<rows>
	<head>
              <column width='40' type='ro' align='left' sort='str'>Tipi</column>
		<column width='*' type='ro' align='left' sort='str'>Dosya Adı</column>
                <column width='*' type='ro' align='left' sort='str'>Dosya Yüklenme Tarihi</column>
		<column width='*' type='ro' align='left' sort='int'>Boyutu</column>
		<column width='*' type='ro' align='left' sort='str'>Yükleyen</column>
            </head>
        ";
        
         ?>

<?php
  $a = opendir("../DATAS/arsiv-birimi-uploaded");
  $say = 0;
                while($b = readdir($a)){
                    if(($b === "." ) OR ($b === "..")){
                        continue;
                    }
                    ++$say;
    
                    
                    
                    
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
                    }else if(mb_substr($b,-3) == "jpg"){
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
                    }else if(mb_substr($b,-3) == "txt"){
                        $metin .= "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/documents.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }
                    else if(mb_substr($b,-3) == "png"){
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
                                            <a href='../yazisleri/DATAS/arsiv-birimi-uploaded/$b'>$b</a>
                                                ]]>
                                    </cell>
                                    <cell>".date("d.m.Y H:i",fileatime("../DATAS/arsiv-birimi-uploaded/$b"))."</cell>
                                     <cell>".filesize("../DATAS/arsiv-birimi-uploaded/$b")."</cell>
                                     <cell>Sercan Göger</cell>
                                </row>
                                    ";
                    
                }//while
      $metin .=  "</rows>";
                
                echo $metin;
               
                //touch("dosyabilgileri.xml");
                $dosya = fopen('xml-arsiv-Cekilen.xml', 'w');
            fwrite($dosya, $metin);
                    fclose($dosya);
 
    ?>

