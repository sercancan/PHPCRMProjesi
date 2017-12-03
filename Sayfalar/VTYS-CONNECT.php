<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php

        $host = "localhost";
        $username =  "root";
        $password = "199144";
        $db = "restoran_asim";
        
        $baglan = mysql_connect($host,$username,$password);
        
        if(!$baglan){
            $r = "MYSQL Bağlantısı Sağlanamadı..";
            $hataKodu = mysql_errno();
            $hataMesaj = mysql_error();
            
             printf("<h1 style='color:black;'> %s\n %s \n %s\n</h1>",$v,$hataMesaj, $hataKodu);
             exit();
        }
        
         $db_connect = mysql_select_db($db);
         
        if(!$db_connect){
            $v = "Veritabanına Bağlantı Sağlanamadı..";
            $hataKodu = mysql_errno();
            $hataMesaj = mysql_error();
            
            printf("<h1 style='color:black;'> %s\n %s \n %s\n</h1>",$v,$hataMesaj, $hataKodu);
            exit();
        }
                
    
            #Türkçe verilerin okunması ve girilmesi amacıyla yazılan CODES
                    mysql_query("SET NAMES UTF8");    
                  //  mysql_query("SET CHARACTER SET 'UTF-8'");
                    //mysql_query("SET COLLECTION_CONNECTION= 'latin5_turkish_ci'");
    
    
    ?>
</body>
</html>
