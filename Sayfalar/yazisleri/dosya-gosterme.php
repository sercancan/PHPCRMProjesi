  <!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php require './LNKLER.php'; ?>
    <!--
<link href="../../CSSS/cl-callout.css" rel="stylesheet" type="text/css"/>
       -->
      
<script src="../../Eklentiler/jquery-3.1.0.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/fonts/font_awesome/css/font-awesome.min.css"/>
         
         <link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/fonts/font_roboto/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/dhtmlxsidebar.css"/>
        <link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/dhtmlx.css"/>
	<script src="./Dosyalama-Sistemi/codebase/dhtmlxsidebar.js"></script>
        <script src="./Dosyalama-Sistemi/codebase/dhtmlx.js"></script>
        <style>
		div#sidebarObj {
                        position: relative;
			margin-left: 10px;
			margin-top: 10px;
			width: 1200px;
			height: 600px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.05), 0 1px 3px rgba(0,0,0,0.09);
                        overflow: auto;
                     
                        
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item {
			height: 53px;
			line-height: 53px;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item img.dhxsidebar_item_icon {
			top: 11px;
			width: 32px;
			height: 32px;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text {
			padding-top: 9px;
			padding-left: 54px;
			line-height: 17px;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text div.line_two {
			color: #909090;
			padding-top: 2px;
			font-size: 0.92em;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text div.line_progress {
			border: 1px solid #c0c0c0;
			background-color: #f2f2f2;
			height: 5px;
			overflow: auto;
			position: relative;
			width: 130px;
			margin-top: 3px;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text div.line_progress div.filled_progress {
			position: relative;
			left: 0px;
			top: 0px;
			height: 5px;
			background-color: #52C1E0;
			overflow: auto;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text.enable_progress {
			padding-top: 3px;
		}
		.dhxsidebar_base_material div.dhxsidebar_cont div.dhxsidebar_side.dhxsidebar_tpl_two_lines div.dhxsidebar_side_items div.dhxsidebar_item div.dhxsidebar_item_text.disable_progress div.line_progress {
			display: none;
		}
	</style>
        
        <script>

		var mySidebar;
                
		var myGridEvrakKayit;
                var myGridEncumen;
                var myGridMeclis;
                var myGridEvlendirme;
                var myGridArsiv;
                var myGridPersonel;
                
                var sbObj;
               var myToolbar;
               var myTreeView;
               var myTree;
               
               
		function doOnLoad() {
                    var TUT ="";
			mySidebar = new dhtmlXSideBar({
				parent: "sidebarObj",
				icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
				template: "two_lines",
                                autohide: false,
                                header: true,
				width: 300,
                               json: "./Dosyalama-Sistemi/anaKlasorler.json",
                                onload: function() {
                                    
                                  //  myTree = mySidebar.cells("anadizin").attachTree();
					//myTree.setImagePath("Dosyalama-Sistemi/skins/web/imgs/dhxtree_web/");
					//myTree.load("Dosyalama-Sistemi/anadizin.xml");
                                        
                                        
                           myToolbar = new dhtmlXToolbarObject({
				parent: "toolbarObj",
				icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
				xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
			});
                        myToolbar.setIconSize(48); //ICON BOYUTLARI TOOLBARIN
                        myToolbar.attachEvent("onClick", function(id) {
                            
          
            $.ajax({
              url:"Dosyalama-Sistemi/uzantiya-gore-goster.php",
              type:"POST",
              data:"Tipi="+id,
              success:function(res){
                   // alert(res);
                        myGridEvrakKayit = mySidebar.cells("anadizin").attachGrid();
                         myGridEvrakKayit.load("./Dosyalama-Sistemi/uzantiya-gore-goster.xml");
              },
              error:function(ult){
                  alert("error");
              },
              complete:function(result){
                
              }
          }); // AJAX END
          
          
           if(id == "klasorOlustur"){
      
                             //   var jQueryModal = $.noConflict(true);
                              //(function($) {
                             $(document).ready(function($) {
                                       $('#myModal').modal();
                                       
                                       $("#dalkilic").text(TUT);
                                       
                                 $("#btnModalKlasorOlustur").on("click",function(){
                                     alert(TUT+" olustu..");
                                   
                                 });//click
                                  }); //$(document).ready(function($)
                          //  })(jQueryModal);
          }//if
        
});//TOolbar MENU CLICK OLAYI EVENT YANI
                        
        
                        //ANA DIZIN KLASORLERI TIKLANMA OLAYI
                        	mySidebar.attachEvent("onSelect", function(id, lastId){
                                    
				if(id == "encumen"){
                                    TUT = "encumen";
                                     $.ajax({
                                        url:"Dosyalama-Sistemi/xml-encumen-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("encumen").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-encumen-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("ENCUMEN error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                              $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                             
                                }else if(id == "evrakkayit"){
                                    TUT = "evrak kayit";
                                      $.ajax({
                                        url:"Dosyalama-Sistemi/xml-evrak-kayit-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("evrakkayit").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-evrak-kayit-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("EVRAK KAYIT error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                             
                                      $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                             
                             
                                }else if(id == "arsiv"){
                                    TUT = "Arşiv";
                                    
                                      $.ajax({
                                        url:"Dosyalama-Sistemi/xml-arsiv-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("arsiv").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-arsiv-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("ARSIV error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                              $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                             
                             
                                }
                                else if(id == "evlendirme"){
                                    TUT = "evlendirme";
                                    
                                            $.ajax({
                                        url:"Dosyalama-Sistemi/xml-evlendirme-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("evlendirme").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-evlendirme-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("EVLENDİRME error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                              $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                                }
                                else if(id == "meclis"){
                                    TUT = "meclis";
                                      $.ajax({
                                        url:"Dosyalama-Sistemi/xml-meclis-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("meclis").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-meclis-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("MECLIS error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                              $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                                }
                                else if(id == "personel"){
                                    
                                    TUT = "personel";
                                    
                                    
                                      $.ajax({
                                        url:"Dosyalama-Sistemi/xml-personel-Cekilen.php",
                                        type:"POST",
                                        data:"Kolaj="+id,
                                        success:function(res){
                                             // alert(res);
                                                  myGridEvrakKayit = mySidebar.cells("personel").attachGrid();
                                                   myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-personel-Cekilen.xml");
                                        },
                                        error:function(ult){
                                            alert("PERSONEL error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // AJAX END
                             
                              $.ajax({
                                        url:"Dosyalama-Sistemi/Dinamik_AnaKlasorlerdeki_Veriler.php",
                                        type:"POST",
                                        data:"DosyaKlasor=Yenileme",
                                        success:function(res){
                                             // alert(res);
                                             
                                        },
                                        error:function(ult){
                                            alert("Dinamik AnaKlasorlerdeki Veriler error AJAX");
                                        },
                                        complete:function(result){

                                        }
                             }); // GÜNCEL DOSYA KLASOR SAYISINI text2 ye yazması için güncelleme AJAX END
                                }
			});//SİDEBARDA ANA DIZIN KLASORLERINE TIKLANDIGINDA CALISAN OLAY EVENT
                                    
                                    /*
					myToolbar = mySidebar.cells("evrakkayit").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
					});
          
                                        myToolbar = mySidebar.cells("encumen").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
					});
                                        myToolbar = mySidebar.cells("arsiv").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
					});
                                        myToolbar = mySidebar.cells("meclis").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
					});
                                        myToolbar = mySidebar.cells("evlendirme").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
					});
                                        myToolbar = mySidebar.cells("personel").attachToolbar({
						icons_path: "./Dosyalama-Sistemi/TreeViewIcons/",
						xml: "./Dosyalama-Sistemi/toolbarMenu.xml"
                                                
					});
            */
                                        
                                        
                                        myGridEvrakKayit = mySidebar.cells("evrakkayit").attachGrid();
					myGridEvrakKayit.load("./Dosyalama-Sistemi/xml-evrak-kayit-Cekilen.xml");
                                        
                                        myGridEncumen = mySidebar.cells("encumen").attachGrid();
					myGridEncumen.load("./Dosyalama-Sistemi/xml-encumen-Cekilen.xml");
                                        
                                         myGridMeclis = mySidebar.cells("meclis").attachGrid();
					myGridMeclis.load("./Dosyalama-Sistemi/xml-meclis-Cekilen.xml");
                                        
                                        myGridEvlendirme = mySidebar.cells("evlendirme").attachGrid();
					myGridEvlendirme.load("./Dosyalama-Sistemi/xml-evlendirme-Cekilen.xml");
                                        
                                             myGridArsiv = mySidebar.cells("arsiv").attachGrid();
					myGridArsiv.load("./Dosyalama-Sistemi/xml-arsiv-Cekilen.xml");
                                        
				}    
			});
                         
			mySidebar.items("evrakkayit").attachObject("cell_change_me1");
			mySidebar.items("encumen").attachObject("cell_change_me2");
			mySidebar.items("arsiv").attachObject("cell_change_me3");
			mySidebar.items("evlendirme").attachObject("cell_change_me4");
			mySidebar.items("meclis").attachObject("cell_change_me5");
			mySidebar.items("personel").attachObject("cell_change_me6");
                        
                     
                                
		} //doOnLoad END FUNCTION
          
		dhtmlXSideBar.prototype.templates.two_lines = "<img class='dhxsidebar_item_icon' src='#icons_path##icon#' border='0'>"+
								"<div class='dhxsidebar_item_text #enable_progress#'>"+
									"<div>#text#</div>"+
									"<div class='line_progress'><div class='filled_progress' style='width:#width#px;'></div></div>"+
									"<div class='line_two'>#text2#</div>"+
								"</div>";
                                                        
	</script>
</head>
<body onload="doOnLoad();">
  
 <?php include './sidebarr.php'; ?>    
      <!--Content-->
    <div id="content" class="content container-fluid">
      
        
        <div class="row">
 <div class="col-lg-12 col-lg-offset-0">
     
     <div id="toolbarObj"></div>
     <div  id="sidebarObj">
        
     </div>
     
        
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <p id="dalkilic"></p>
        </div>
        <div class="modal-footer">
          <button id="btnModalKlasorOlustur" type="button" class="btn btn-default" data-dismiss="modal">Klasor oluştur</button>
        </div>
      </div>
      
    </div>
  </div>
   
    <!--
	<div id="cell_change_me1">
		<div style="padding: 10px 8px;overflow: auto;">
               
                </div>
	</div>
	<div id="cell_change_me2" style="display: none;">
		<div style="padding: 10px 8px;">Gül.</div>
	</div>
	<div id="cell_change_me3" style="display: none;">
		<div style="padding: 10px 8px;">Sultan.</div>
	</div>
	<div id="cell_change_me4" style="display: none;">
		<div style="padding: 10px 8px;">Çağlar.</div>
	</div>
	<div id="cell_change_me5" style="display: none;">
		<div style="padding: 10px 8px;">Soner.</div>
	</div>
	<div id="cell_change_me6" style="display: none;">
		<div style="padding: 10px 8px;">Nihat.</div>
	</div>
        -->
 </div>
        </div>
   

            
      </div>
     
  <!-- bildirim include et -->
</body>
  </html>
