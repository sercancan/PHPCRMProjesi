
    <?php    
    
  function Uzanti($uza){
      $say = 1;
    
        header("Content-type:text/xmins");
        $metin = "<rows>
	    <head>
                <column width='*' type='ro' align='left' sort='str'>Tipi</column>
		<column width='*' type='ro' align='left' sort='str'>Dosya Adı</column>
            </head>
        ";

          $viri = glob("../DATAS/meclis-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
            ++$say;
             $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>";
            $metin .= "<cell>$meta</cell>
                       </row>
                                    ";
        }
         $viri = glob("../DATAS/encumen-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
           $metin .= "<row id='$say'>";
          
                               $metin.="<cell>$meta</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/evlendirme-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>$meta</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/arsiv-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>$meta</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/evrak-kayit-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
            $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>$meta</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/personel-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>$meta</cell>
                      </row>
                                    ";
             }
                 $metin .=  "</rows>";  
                 
                       echo $metin;
                //touch("dosyabilgileri.xml");
                $dosya = fopen('uzantiya-gore-goster_1.xml', 'w');
                     fwrite($dosya, $metin);
                    fclose($dosya);
    }//Uzanti END
 /*
    function Resmet($b,$tipi){
          $metin ="";
                    if(mb_substr($b,-3) == $tipi){
                     $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/pdf.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/pptx.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/jpeg.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/word.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/gif.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-4) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/excel.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }else if(mb_substr($b,-3) == $tipi){
                        $metin = "<cell>
                            <![CDATA[
                              <img  src='./Dosyalama-Sistemi/TreeViewIcons/png.png' height='20px' width='20px'/>
                              ]]>
                        </cell>";
                    }
             
                return $metin;                   
    }//RESMET FUNCTION END

*/
if(!empty($_POST)){
if($_POST["Tipi"] == "word"){
    Uzanti("docx");
}else if ($_POST["Tipi"] == "excel"){
    Uzanti("xlsx");
}else if ($_POST["Tipi"] == "pdf"){
    Uzanti("pdf");
}else if ($_POST["Tipi"] == "jpeg"){
    Uzanti("jpeg");
    Uzanti("jpg");
    Uzanti("png");
}else if($_POST["Tipi"] == "document"){
    Uzanti("txt");
}else if ($_POST["Tipi"] == "pwrpoint"){
    Uzanti("pptx");
}
}

    ?>

