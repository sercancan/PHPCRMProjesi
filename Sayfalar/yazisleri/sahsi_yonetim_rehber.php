  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
        
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
<script>
/*  TABLO DİNAMIK VERI ARAYABİLEN BİR TABLO */ 
  
  var RehberSahsi = $.noConflict(true);
(function($) {

 $(document).ready(function(){
     
     $("#btnRehberEkle").click(function(){
         //alert("buton ekle başarılı");
         
         var gelenad = $("#adtxt").val();
         var gelensoyad = $("#soyadtxt").val();
         var gelenadres =  $("#adrestxt").val();
         var gelenposta = $("#epostatxt").val();
         var gelensehir = $("#sehirtxt").val();
         var gelenNot =  $("#notxt").val();
         
        
                              $.ajax({
              url:"sahsi_yonetim_rehber.php",
              type:"POST",
              data:"SahsiRehber=SahsiRehberEkle&ad="+gelenad+"&soyad="+gelensoyad+"&adres="+gelenadres+"&posta="+gelenposta+"&sehir="+gelensehir+"&not="+gelenNot,
              success:function(res){
                // $("#allah").html(res);
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
     });//$("#btnRehberEkle").click
     
         var Numara = 0;
         
        $(document).on("click","#modal-rehber-Editing",function(){
          
      var id = $(this).data("id");
      Numara = id;
      
      
      var GelenAd = $(this).data("ad");
      var GelenSoyad = $(this).data("soyad");
      var GelenAdres =  $(this).data("adres");
      var GelenPosta =  $(this).data("posta");
      var GelenSehir = $(this).data("sehir");
      var GelenNot =  $(this).data("not");
    
        
        $("#adDuzenle").val(GelenAd);
        $("#soyadDuzenle").val(GelenSoyad);
        $("#adresDuzenle").val(GelenAdres);
        $("#epostaDuzenle").val(GelenPosta);
        $("#sehirDuzenle").val(GelenSehir);
        $("#notDuzenle").val(GelenNot);
      
        }); // $(document).on("click", END
       
       $(document).on("click","#btnRehberGuncelle",function(){
           
        // alert(Numara);
          
        
        
       var GuncelAd =  $("#adDuzenle").val();
       var GuncelSoyad =  $("#soyadDuzenle").val();
       var GuncelAdres = $("#adresDuzenle").val();
       var GuncelPosta = $("#epostaDuzenle").val();
       var GuncelSehir = $("#sehirDuzenle").val();
       var GuncelNot =  $("#notDuzenle").val();
        
                      $.ajax({
              url:"sahsi_yonetim_rehber.php",
              type:"POST",
              data:"SahsiRehberGuncel=SahsiRehberGuncelle&Numara="+Numara+
                                                        "&ad="+GuncelAd+
                                                        "&soyad="+GuncelSoyad+
                                                        "&adres="+GuncelAdres+
                                                        "&posta="+GuncelPosta+
                                                        "&sehir="+GuncelSehir+
                                                        "&not="+GuncelNot,
              success:function(res){
                // $("#allah").html(res);
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
        
         
           
       });//GUNCELLE modal
     
      (function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tr td');
                       
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
  });//document.ready END



})(RehberSahsi);
</script>
          

</head>
<body>
  
 <?php include './sidebarr.php'; ?>    
    <?php
    include_once '../VTYS-CONNECT.php';
    
    if(isset($_POST["SahsiRehber"])){
            //Rehber EKLEME
        
        $Ad = mysql_real_escape_string($_POST["ad"]);
       // echo $Ad; echo "<br>";
        $Soyad = mysql_real_escape_string($_POST["soyad"]);
       // echo $Soyad; echo "<br>";
        $Adres = mysql_real_escape_string($_POST["adres"]);
       // echo $Adres; echo "<br>";
        $EPosta = mysql_real_escape_string($_POST["posta"]);
        //echo $EPosta; echo "<br>";
        $Sehir = mysql_real_escape_string($_POST["sehir"]);
     //   echo $Sehir; echo "<br>";
        $Not = mysql_real_escape_string($_POST["not"]);
        echo $Not; echo "<br>";
   
    $InsertRehber = "INSERT INTO sahsi_yonetim_rehber (ad,soyad,adres,eposta,sehir,BilgiNotu)"
                    . " VALUES ('$Ad','$Soyad','$Adres','$EPosta','$Sehir','$Not')";
    
             $ResultInsert = mysql_query($InsertRehber);
             echo mysql_error();
             
     }else if(isset($_POST["SahsiRehberGuncel"])){
         ///GUNCELLEME
         $Numara = strip_tags($_POST["Numara"]);
         
        $Ad = mysql_real_escape_string($_POST["ad"]);
        $Soyad = mysql_real_escape_string($_POST["soyad"]);
        $Adres = mysql_real_escape_string($_POST["adres"]);
        $EPosta = mysql_real_escape_string($_POST["posta"]);
        $Sehir = mysql_real_escape_string($_POST["sehir"]);
        $Not = mysql_real_escape_string($_POST["not"]);
     
        $UpdateQuery = "UPDATE sahsi_yonetim_rehber SET "
                . "ad='$Ad',"
                . "soyad='$Soyad',"
                . "adres='$Adres',"
                . "eposta='$EPosta',"
                . "sehir='$Sehir',"
                . "BilgiNotu='$Not' WHERE id='$Numara'";
        
        mysql_query($UpdateQuery);
     }
    ?>
<div<div id="allah"></div>
    
      <!--Content-->
    <div id="content" class="content container-fluid">
  
        <div class="row">
            
            <div class='col-lg-10 col-lg-offset-1'>
                
                   
             
            </div>
               <br>
 <div class="col-lg-10 col-lg-offset-1">
     
      <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="input-group">
                <input type="text" class="form-control input-lg" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Aranacak Bilgi" />
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-warning btn-lg waves-effect waves-light"
                           data-toggle="modal" data-target="#con-close-modal"><i class='fa fa-text-width'></i></button>
                                              
                                            </span>
                                        </div>
                                    </div>
                                </div>
 </div>
            <div class="col-lg-7 col-lg-offset-1">
                
                <table class="table table-hover" id="task-table">
                  <?php 
                
                     $queryCay = "SELECT * FROM sahsi_yonetim_rehber";
                     $feza = mysql_query($queryCay);
   
                     while($veri = mysql_fetch_row($feza)){
                           
                             ?>
                    <tr>
                          <td>
                              <div class="panel">
                                    <div class="panel-body">
                                        <div class="media-main">
                                            <a class="pull-left" href="#">
                                                <img class="thumb-lg img-rounded" src="chat_profil_resims/erkek.jpg" 
                                                     width="95px" height="95px" alt="">
                                            </a>
                                            <div class="pull-right btn-group-lg">
                            <button type="button" id="modal-rehber-Editing"
                                    class="btn btn-warning btn-lg waves-effect waves-light"
                                    data-toggle="modal" data-target="#modal-rehber-duzenle"
                                    
                                        data-id="<?php echo $veri[0]; ?>" 
                                        data-ad="<?= $veri[1]; ?>" 
                                        data-soyad="<?= $veri[2]; ?>"
                                        data-adres="<?= $veri[3]; ?>"
                                        data-posta= "<?= $veri[4]; ?>"
                                        data-sehir="<?= $veri[5]; ?>" 
                                        data-not = "<?= $veri[6]; ?>"    
                                        >
                                <i class='fa fa-envelope-o'></i>
                            </button>
                                                
                                            </div>
                                         
                                            <div class="info">
                                                <h4><?php echo $veri[1]." ".$veri[2];  ?></h4>
                                                <p class="text-muted">  
                                                    <a href='yazi_isleri_mail_gonder.php?MailAdresi=<?= $veri[4]; ?>'><?= $veri[4]; ?> </a>
                                                    </p>
                                                <p class="text-lime">
                                                    <?= $veri[5]; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <ul class="social-links list-inline">
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                    
                                            <li>
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Mesaj"><i class="fa fa-envelope-o"></i></a>
                                            </li>
                                        </ul>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                          </td>
                    </tr>
                    
                             <?php
                     }//WHİLE end
                     
                     
                  
                  
                          
                  
                       
                  ?>
        
                </table>
            </div>
           <!-- MODAL REHBER EKLE START -->           
                                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title" style='color:black;font-weight: bold;'>Kritere Uygun Rehber Ekle</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label" style='color:black;font-weight: bold;'>Adı : </label> 
                                                                    <input type="text" class="form-control" id="adtxt" placeholder="Ad Gir"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-2" class="control-label" style='color:black;font-weight: bold;'>Soyadı : </label> 
                                                                    <input type="text" class="form-control" id="soyadtxt" placeholder="Soyad Gir"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label"  style='color:black;font-weight: bold;'>Adres : </label> 
                                                                    <input type="text" class="form-control" id="adrestxt" placeholder="adresimiz"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-4" class="control-label" style='color:black;font-weight: bold;'>E-Posta :  </label> 
                                                                    <input type="text" class="form-control" id="epostatxt" placeholder="mail@mail.com"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-5" class="control-label"  style='color:black;font-weight: bold;'>Şehir : </label> 
                                                                    <input type="text" class="form-control" id="sehirtxt" placeholder="istanbul"> 
                                                                </div> 
                                                            </div> 
                                                             
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group no-margin"> 
                                                                    <label for="field-7" class="control-label" style='color:black;font-weight: bold;'>Kısa Bilgi Notu :</label> 
                                                                    <textarea class="form-control autogrow" id="notxt" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default btn-lg waves-effect" data-dismiss="modal">Çıkış</button> 
                                                        <button type="button" id="btnRehberEkle" class="btn btn-warning btn-lg waves-effect waves-light"><i class='fa fa-pencil'></i></button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

           <!-- MODAL REHBER EKLE END -->
           
          <!-- MODAL REHBER GOSTER START -->           
                                        <div id="modal-rehber-duzenle" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="modal-header"> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                                                        <h4 class="modal-title" style='color:black;font-weight: bold;'>Kritere Uygun Rehber Düzenle</h4> 
                                                    </div> 
                                                    <div class="modal-body"> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                  
                                                                    <label for="field-1" class="control-label" style='color:black;font-weight: bold;'>Adı : </label> 
                                                                    <input type="text" class="form-control" id="adDuzenle" placeholder="Ad Gir"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-2" class="control-label" style='color:black;font-weight: bold;'>Soyadı : </label> 
                                                                    <input type="text" class="form-control" id="soyadDuzenle" placeholder="Soyad Gir"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-3" class="control-label"  style='color:black;font-weight: bold;'>Adres : </label> 
                                                                    <input type="text" class="form-control" id="adresDuzenle" placeholder="adresimiz"> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-4" class="control-label" style='color:black;font-weight: bold;'>E-Posta :  </label> 
                                                                    <input type="text" class="form-control" id="epostaDuzenle" placeholder="mail@mail.com"> 
                                                                </div> 
                                                            </div> 
                                                            <div class="col-md-6"> 
                                                                <div class="form-group"> 
                                                                    <label for="field-5" class="control-label"  style='color:black;font-weight: bold;'>Şehir : </label> 
                                                                    <input type="text" class="form-control" id="sehirDuzenle" placeholder="istanbul"> 
                                                                </div> 
                                                            </div> 
                                                             
                                                        </div> 
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                                <div class="form-group no-margin"> 
                                                                    <label for="field-7" class="control-label" style='color:black;font-weight: bold;'>Kısa Bilgi Notu :</label> 
                                                                    <textarea class="form-control autogrow" id="notDuzenle" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-default btn-lg waves-effect" data-dismiss="modal">Çıkış</button> 
                                                        <button type="button" id="btnRehberGuncelle" class="btn btn-warning btn-lg waves-effect waves-light"><i class='fa fa-pencil'></i></button> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div><!-- /.modal -->

           <!-- MODAL REHBER SAHSI GOSTER END -->
           
                       
                            
        </div>         
      </div>
      
     <?php //require_once "bildirim-ve-loginas.php"; ?>

    
</body>
  </html>
