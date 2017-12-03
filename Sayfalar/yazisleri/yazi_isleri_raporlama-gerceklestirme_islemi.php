
    <?php
    require_once '../VTYS-CONNECT.php';
    
    if(isset($_POST)){
        
                $tarih = $_POST["tarihislemi"];
                
                $ilktarih =trim(mb_substr(strstr($tarih, "-",TRUE),0));
                $ikincitarih = trim(mb_substr(strstr($tarih,"-",FALSE),1));
                
                //echo $ilktarih;
                echo "<br>";
                //echo $ikincitarih;
               
                
   $queryRaporSelect = "SELECT * FROM asimvtys.personelin_olusturdugu_raporlar "
                              . "WHERE tarih BETWEEN '$ilktarih' AND '$ikincitarih' ORDER BY tarih ASC";
               $resulti = mysql_query($queryRaporSelect);
            //   echo "<br> Gelen veri ".  mysql_affected_rows();

        ?>
         <!--RAPOR GORUNTULEME START-->
 
        <div id="content" class="content container-fluid">
      <div class="timeline-container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="cbp_tmtimeline">
                 <?php
               
             while($s = mysql_fetch_object($resulti)){
            ?>
         
              <li>
                <time class="cbp_tmtime">
                    <span><?php echo $s->tarih; ?></span>
                        <span><?php echo date("H:i",$s->tarih_saat);?></span>
                </time>
                <div class="cbp_tmicon cbp_tmicon-phone"></div>
                <div class="cbp_tmlabel">
                  <h2>İsim Soyisim</h2>
                  <p><?php echo $s->raporlanan_veri;?></p>
                </div>
              </li>
                  <?php
                 }; //while END
                 
             ?>  

            </ul>
          </div>
        </div>
      </div>


    
            
    </div>

<!-- RAPOR GORUNTULEME END -->
            
        <?php
    }//if 
   ?>
