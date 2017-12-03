function init() {
            
 
            //SATIRLARIN YANIP YANIP SONME DURUMU BAŞLANGIC
                scheduler.attachEvent("onTemplatesReady", function() {
			var highlight_step = 60; // we are going to highlight 30 minutes timespan

			var highlight_html = "";
			var hours = scheduler.config.last_hour - scheduler.config.first_hour; // e.g. 24-8=16
			var times = hours*60/highlight_step; // number of highlighted section we should add
			var height = scheduler.config.hour_size_px*(highlight_step/60);
			for (var i=0; i<times; i++) {
				highlight_html += "<div class='highlighted_timespan' style='height: "+height+"px;'></div>"
			}
			scheduler.addMarkedTimespan({
				days: "fullweek",
				zones: "fullday",
				html: highlight_html
			});
		});   
                //SATIRLARIN YANIP YANIP SONME DURUMU SONU
                
              
              //RENKLENDIRME BASLANGIC
              scheduler.templates.event_class=function(start, end, event){
				var css = "";

				if(event.renklendir) // if event has subject property then special class should be assigned
					css += "event_"+event.renklendir;

				if(event.id == scheduler.getState().select_id){
					css += " selected";
				}
				return css; // default return

				/*
					Note that it is possible to create more complex checks
					events with the same properties could have different CSS classes depending on the current view:

					var mode = scheduler.getState().mode;
					if(mode == "day"){
						// custom logic here
					}
					else {
						// custom logic here
					}
				*/
			};

			var subject = [
				{ key: '', label: 'Mavi' },
				{ key: 'pembe', label: 'Pembe' },
				{ key: 'turuncu', label: 'Turuncu' },
				{ key: 'yesil', label: 'Yeşil' }
			];

			scheduler.config.lightbox.sections=[
				{name:"Not", height:150, map_to:"text", type:"textarea" , focus:true},
				{name:"Renklendir", height:20, type:"select", options: subject, map_to:"renklendir" },
				{name:"time", height:72, type:"time", map_to:"auto" }
			];
                                    
			scheduler.init('scheduler_here', new Date(2015, 3, 20), "week");

              //RENKLENDIRME BITIS
              
              //hergun tarih yenile 
                var bugun = new Date();
                
                scheduler.config.multi_day = true;
		scheduler.config.time_step = 15;
		scheduler.config.xml_date="%Y-%m-%d %H:%i";
		scheduler.init('scheduler_here',new Date(bugun.getFullYear(),bugun.getMonth(),bugun.getDate()),"week");
                scheduler.load("./data/events.xml");
                
                //EKLENDIGINDE Çalışan Olay
            scheduler.attachEvent("onEventAdded", function(event_id,event_object){
     
      var veri=  scheduler.templates.event_text(event_object.start_date,event_object.end_date,event_object);
      var Guntarih =scheduler.templates.day_date(event_object.start_date,event_object.end_date,event_object);
      var saat = scheduler.templates.event_header(event_object.start_date,event_object.end_date,event_object);
     var tekid = event_id;
   
   
     
        var malof = new Date(Guntarih);
   var gun = malof.getDate();
   var ay = malof.getMonth()+1;
   var yil = malof.getFullYear();
   
   var startBasObje = new Date(event_object.start_date);
        var basSaat = startBasObje.getHours().toString()+":"+startBasObje.getMinutes().toString();
  
   var endBasObje = new Date(event_object.end_date);
          var bitSaat = endBasObje.getHours().toString()+":"+endBasObje.getMinutes().toString();
    
  
 var renk = scheduler.formSection('Renklendir').getValue();



    var ekle = "Ekleme";   
          $(document).ready(function(){
               $.ajax({
                        url:"verigetir.php",
                        data:"ekle="+ekle+"&name="+veri+"&tarih="+Guntarih+"&saat="+saat
                                            +"&idim="+tekid+"&gun="+gun+"&ay="+ay+"&yil="+yil
                                            +"&starttime="+basSaat+"&endtime="+bitSaat+"&renk="+renk,    
                        success:function(stp){
                     // alert(Guntarih);
                     //alert(gun+"/"+ay+"/"+yil);
                        }
                    }).error(function(){
                        alert("Erorring baby..");
                    }).success(function(){
                        alert("success bebek");
                    }).complete(function(){
                        alert("complete calıstı");
                    });
          });
                     
         
            }); //attachEvent
            //Eklendiğinde calısan Olay END
            
            //SILDIIGINDE calişan olay
            scheduler.attachEvent("onEventDeleted", function(id){
                var silinend = id; 
                
                    $.ajax({
                        url:"verigetir.php",
                        data:"sil="+silinend,
                        success:function(stp){
                            
                        }
                    });
});//onEventDeleted
            //SILDIGINDE calisan oLAY END 
            
            //GUNCELLEME İŞLEMI START
            scheduler.attachEvent("onEventChanged", function(id,ev){
                       var chn = "guncelle";
                        
                         var of = new Date(ev.start_date);
            var g = of.getDate();
            var a = of.getMonth()+1;
            var y = of.getFullYear();
                   var tarih = y+"-"+a+"-"+g;   
                        
                      var Dstart = ev.start_date;
                      var Dend = ev.end_date;
                      var renk = scheduler.formSection('Renklendir').getValue();
                    
             var startOb = new Date(Dstart);
                 var startS = startOb.getHours().toString()+":"+startOb.getMinutes().toString();
                  
               var endOb = new Date(Dend);
                 var endS = endOb.getHours().toString()+":"+endOb.getMinutes().toString();
                   
                       //  data:"no="+id+"&veri="+ev.text+"&start="+startS+"&end="+endS+"&renk="+renk,
                        $.ajax({
                            type:"POST",
                            url:"verigetir.php",
                            data:"no="+id+"&veri="+ev.text+"&start="+startS+"&end="+endS+"&renk="+renk+"&tarih="+tarih,
                           
                            success:function(work){
                            
                            }
                        });
                        
              
}); //Degişti GUNCELLEME END  

/*  VERI CEKME DURUMUNU DENİYORUZ SUAN BAŞLANGIC YERİ*/

    var alno = $("#numaralar").val();
   var alveri = $("#veriler").val();
   var altarih = $("#tarihler").val();
   var albaslangic = $("#baslangicSt").val();
   var albitis = $("#bitisSt").val();
   var renk = $("#renk").val();
   
    var num =[];
   var veri =[];
   var tarih=[];
   var basSt =[];
   var bitSt = [];
    var renkle = [];
    
    $("input[id='renk']").each(function(){
     
        renkle.push($(this).val()); 
        
    }); //numaralar

 $("input[id='numaralar']").each(function(){
     
        num.push($(this).val()); 
        
    }); //numaralar

     $("input[id='veriler']").each(function(){
   
        veri.push($(this).val());
    
    });//VERILER 
    
     $("input[id='tarihler']").each(function(){
   
       tarih.push($(this).val());
    
    }); //tarihler
    
        
    $("input[id='baslangicSt']").each(function(){
   
         basSt.push($(this).val());
    
    }); //baslangicSt
    
        
    $("input[id='bitisSt']").each(function(){
   
          bitSt.push($(this).val());
    
    }); //bitisSt
    //  alert(tarih.getFullYear() + "-"+tarih.getMonth()+"-"+tarih.getDay());
     for(var i = 0; i < num.length; i++){
                
            var eleman = new Date(tarih[i]);
            
     scheduler.setEvent(num[i], {
    start_date: new Date(eleman.getFullYear(),eleman.getMonth(),eleman.getDate(),
                                                    basSt[i].substr(0,2),basSt[i].substr(3,2)),
                                                    
    end_date:   new Date(eleman.getFullYear(),eleman.getMonth(),eleman.getDate(),
                                                    bitSt[i].substr(0,2),bitSt[i].substr(3,2)),
        
    text:  ""+veri[i],
    renklendir: renkle[i]
});
   
      }//FOR
      scheduler.setCurrentView(); //EKLMEYI GERCEKLEŞTİRİR
      
    /*  VERI CEKME DURUMUNU DENİYORUZ SUAN BİTİŞ YERİ*/
   
    } ///init END


