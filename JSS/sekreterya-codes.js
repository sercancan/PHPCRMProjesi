$(function(){
$('a[title]').tooltip();
});
 var SekreteryaYonetimi = $.noConflict(true);
 (function($) {
     
     
     
      $(document).ready(function(){
        
        var ad,soyad,mail,telefon;
        
        $("#VeriKaydetButonu").click(function(){
            
            ad = $.trim($("#inputAd").val());
            soyad = $.trim($("#inputSoyad").val());
            mail =  $.trim($("#inputEmail").val());
            telefon = $.trim($("#inputTelefon").val());
                
                //BU KONTROLU BAŞKA YERDE YAPMA GEREGI DUYDUM O YUZDEN BURDA KAPATTIM KODLARI
                /*if(ad === ""){
                    $("#MesajGoruntulemeHATA").removeAttr("hidden");
                   $("#DurumMesajiHATA").text("Ad Bölümünü boş bıraktınız.!");
                }else if(soyad === ""){
                     $("#MesajGoruntulemeHATA").removeAttr("hidden");
                     $("#DurumMesajiHATA").text("Soyad Bölümünü boş bıraktınız.!");
                }else if(mail === ""){
                     $("#MesajGoruntulemeHATA").removeAttr("hidden");
                    $("#DurumMesajiHATA").text("Mail Bölümünü boş bıraktınız.!");
                }else if(telefon === ""){
                     $("#MesajGoruntulemeHATA").removeAttr("hidden");
                     $("#DurumMesajiHATA").text("Telefon Bölümünü boş bıraktınız.!");
                }else{*/
                
              
                        $.ajax({
              url:"rehber-ekle-sil-guncelle.php",
              type:"POST",
              data:"durum=ekle&ad="+ad+"&soyad="+soyad+"&mail="+mail+"&telefon="+telefon,
              success:function(res){
               
                   //$("#MesajGoruntulemeHATA").removeAttr("hidden");
                    // $("#DurumMesajiBASARI").text("Rehbere Başarıyla Veriyi Kaydettiniz.");
                     $("#DurumMesajGoruntuleme").html(res);
                 
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
              //  }//else
          
        }); //VeriKaydetButonu BUTTON CLİCK  
         
            
      $(document).on("click", "#duzenleModalButton", function () {
                            
                        var myBookId = $(this).data('id');  
                           var myBookad = $(this).data('ad');
                           var myBooksoyad = $(this).data('soyad');
                           var myBookmail = $(this).data('mail');
                           var myBooktel = $(this).data('tel');
                           
                            $("#cekilenId").val( myBookId );
                            $("#cekilenAd").val( myBookad );  
                              $("#cekilenSoyad").val( myBooksoyad );  
                               $("#cekilenMail").val( myBookmail ); 
                                $("#cekilenTelefon").val( myBooktel ); 
});//CLİCK

 
   $(document).on("click", "#GuncelleModalButonu", function () {
                    
                    var id = $("#cekilenId").val();
                      var ad = $("#cekilenAd").val();
                       var soyad = $("#cekilenSoyad").val();
                        var mail = $("#cekilenMail").val();
                         var tel = $("#cekilenTelefon").val();
                
                $.ajax({
                    method:"POST",
                    url:"rehber-ekle-sil-guncelle.php",
                    data:"durum=guncelle&id="+id+"&ad="+ad+"&soyad="+soyad+"&mail="+mail+"&tel="+tel,
                    success:function(result){
                        //alert(result);
                    },
                    error:function(res){
                        
                    },
                    complete:function(ult){
                        
                    }
                });//AJAX
        });//CLİCK GUNCELLE
        
        //CLİCK ID VERISINI SILMEK ICIN ILK ONCE CEKIYORUZ end
          var idsi = 0;
             $(document).on("click", "#SilModalButton", function () {
                    
                    idsi = $(this).data("id");
                // alert(idsi);

             });//CLİCK ID VERISINI SILMEK ICIN ILK ONCE CEKIYORUZ end
            
         $(document).on("click", "#SilModalButonuEVET", function () {
                   
                        $.ajax({
                            method:"POST",
                            url:"rehber-ekle-sil-guncelle.php",
                            data:"durum=sil&idsi="+idsi,
                            success:function(donenDeger){
                                //alert(donenDeger);
                            },
                            error:function(donen){
                                
                            },
                            complete:function(deger){
                                
                            }
                        });
                 
             });//CLİCK SIL ISLEMINIDE BURADA SIMDI YAZPIYORUZ
             
             
             
             
               /* TAB 1 DEKİ REHBERDEKİ ARAMAYA YAPMAK ICIN CODES */
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
             
    }); //document.ready(); END
})(SekreteryaYonetimi);

