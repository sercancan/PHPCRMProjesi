<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
    <script src="Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
     <script src="jquery-ui.js" type="text/javascript"></script>
     
    <link href="dist/jquery.postitall.css" rel="stylesheet" type="text/css"/>
    
    <script src="dist/jquery.postitall.js" type="text/javascript"></script>
    <script src="dist/jquery.postitall.ajax.js" type="text/javascript"></script>
    <script src="dist/jquery.postitall.chromeManager.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function(){
            
    
        /* 
         * var data = $(".ata").text()+"<br>";
         var id = $(".id").text()+"<br>";
       asala(data);
       
       function asala(veri){
          
            $.PostItAll.new(veri);
           
       }*/
      
       
          /*
       $.PostItAll.new({
 content : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
 width : 320,
 height : 400,
});////$.PostItAll.new
*/
        

        var data = $(".ata").text()+"<br>";
         var id = $(".id").text()+"<br>";

         //alert(id);
         


$.PostItAll.new({
   
 content : data,
 width : 320,
 height : 400,
 position : 'relative',
 posX :  Math.floor((Math.random() * 1000)),
 posY :  Math.floor((Math.random() * 100)),
 style : {
    tresd           : true,
    fontfamily      : 'verdana',
    fontsize        : 'small',
    textshadow      : true,
    arrow           : 'none',
 },
 flags : {
    blocked         : false,
    fixed           : true,
    highlight       : false,
 },
 onCreated: function(id, options, obj) {
                idNewNote = id;
               // alert();
            },
            onDelete: function() {
                idNewNote = null;
            }

});////$.PostItAll.new
       
        }); //   $(document).ready(function(){
        

    
    </script>
</head>
<body>  
    <?php
        include "Sayfalar/VTYS-CONNECT.php";
        
        $que = "SELECT * FROM personelin_olusturdugu_raporlar";
        $t = mysql_query($que);
        
        while($r = mysql_fetch_object($t)){
          
            ?>
    <div class="ata"><?= $r->raporlanan_veri; ?></div>
    <div class="id" value=""><?= $r->rapor_id; ?></div>
    <?php
        }//while END
    ?>
</body>
</html>
