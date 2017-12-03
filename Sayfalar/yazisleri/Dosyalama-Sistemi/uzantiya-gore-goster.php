
    <?php    
    
  function Uzanti($uza){
      $say = 1;
    
        header("Content-type:text/xmins");
        $metin = "<rows>
	    <head>
		<column width='*' type='ro' align='left' sort='str'>Dosya Adı</column>
                <column width='150' type='ro' align='left' sort='str'>Dosya Yüklenme Tarihi</column>
		<column width='80' type='ro' align='left' sort='int'>Boyutu</column>
		<column width='150' type='ro' align='left' sort='str'>Yükleyen</column>
            </head>
        ";

          $viri = glob("../DATAS/meclis-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
            ++$say;
             $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>
                                             <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                                   </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
        }
         $viri = glob("../DATAS/encumen-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
           $metin .= "<row id='$say'>
                               <cell>
                                          <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                                </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/evlendirme-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>
                                          <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                               </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/arsiv-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>
                                          <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                                </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/evrak-kayit-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
            $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>
                                           <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                                </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
        }
           $viri = glob("../DATAS/personel-birimi-uploaded/*.$uza");
        foreach ($viri as $meta){
             ++$say;
              $meta = mb_substr($meta,9);
            $metin .= "<row id='$say'>
                               <cell>
                                          <![CDATA[
                                            <a href='../yazisleri/DATAS/$meta'>$meta</a>
                                                ]]>
                                </cell>
                                   <cell>".date("d.m.Y H:i",fileatime("../DATAS/$meta"))."</cell>
                                     <cell>".filesize("../DATAS/$meta")."</cell>
                                     <cell>Sercan Göger</cell>
                      </row>
                                    ";
             }
                 $metin .=  "</rows>";  
                 
                       echo $metin;
                //touch("dosyabilgileri.xml");
                $dosya = fopen('uzantiya-gore-goster.xml', 'w');
                     fwrite($dosya, $metin);
                    fclose($dosya);
    }//Uzanti END
 
    


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
}else if($_POST["Tipi"] == "document"){
    Uzanti("txt");
}else if ($_POST["Tipi"] == "pwrpoint"){
    Uzanti("pptx");
}
}

    ?>

