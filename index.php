<?php include("mainheader.php"); ?>
    <div id="content">
  <!--   <div class="cloud1"></div>
        <div class="cloud2"></div>
        <div class="cloud3"></div> -->
        <div style="width:100%; height:auto; margin:60px 0px"></div>
        <div class="house">
            <!-- <div class="boxTau">
                <div class="slideTau">
                    <div class="isi">
                     <span class="item">Typewriter adalah kata terpanjang yang dapat diketik menggunakan huruf-huruf yang terdapat pada satu baris tombol keyboard (baris QWERTY).</span>
                     <span class="item">Dreamt adalah satu-satunya kata bahasa Inggris yang berakhir dengan huruf 'mt'.</span>
                     <span class="item">Huruf yang paling sedikit digunakan dalam bahasa Inggris adalah 'q'.</span>
                     </div>
                </div>
            </div> -->
             <a href="" data-target="#Modal2" role="button" class="" data-toggle="modal"><div class="kitchen btnroom"><h3>BANTUAN</h3></div></a>
            <a href="drag.php"><div class="kd btnroom"><h3>KUIS</h3></div></a>
            <a href="topologi.php"><div class="about btnroom"><h3>TOPOLOGI JARINGAN</h3></div></a>
            
            <!-- <a href="simulasi.php"><div class="simulasi btnroom"><h3>SIMULASI</h3></div></a> -->
            <a href="komputer.php" class=""><div class="livingroom btnroom"><h3>PERIPHERAL KOMPUTER</h3></div></a>
            
            <a href="" data-target="#Modal" role="button" class="" data-toggle="modal"><div class="bedroom btnroom"><h3>KOMPETENSI DASAR</h3></div></a>
            <a href="jaringan.php" class=""><div class="bathroom btnroom"><h3>PERIPHERAL JARINGAN</h3></div></a>
        </div>
     <!--    <div id="pohon"></div>
        <div id="bg"></div>
        <div id="bg_kanan"></div> -->
        <script>
            // $('.btnroom').hover(function(){
            //     $(this).animate({
            //         "opacity" : "0.75"
            //     });
            // },function(){
            //     $(this).animate({
            //         "opacity" : "0.4"
            //     });
            // });
        </script>
    </div>
    

    <div class="modal hide fade" id="Modal">
  <div class="modal-header">
    <button type="button" class="close" id="keluar" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>KOMPETENSI DASAR</h3>
  </div>
  <div class="modal-body">
    Melalui media pembelajaran ini diharapkan siswa dapat menguasai kompetensi dasar berikut:
    <ol start=1>
        <li>Siswa mampu mendeskripsikan macam-macam periperal komputer, periperal jaringan, dan topologi jaringan</li>
        <li>Siswa mampu mengklasifikasi fungsi dari periperal komputer dan periperal jaringan</li>
        <li>Siswa mampu mendeskripsikan kelebihan dan kelemahan dari topologi jaringan</li>
    </ol>
  </div>
  <div class="modal-footer">
     <button class='btn'  id="keluar" data-dismiss='modal' aria-hidden='true'>&larr; Kembali</button>
    
  </div>
</div>

<!-- modal untuk bantuan -->
<div class="modal hide fade" id="Modal2">
  <div class="modal-header">
    <button type="button" class="close" id="keluar" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>BANTUAN</h3>
  </div>
  <div class="modal-body">
   <a href=""><strong>BelajarAsyik.com</strong></a> adalah media pembelajaran berbasis website. Berisi materi pengenalan komputer dan jaringan. 
   
   <center><hr width=90%></center>
   <strong>Developed by :</strong>
   <center>
   <div class="row-fluid">
   <div class="span4">@eka_nur</div>
   <div class="span4">Gayan</div>
   <div class="span4">Yara</div>
   </div>
   </center>
   
  </div>
  <div class="modal-footer">
     <button class='btn'  id="keluar" data-dismiss='modal' aria-hidden='true'>&larr; Kembali</button>
    
  </div>
</div>
<?php include("mainfooter.php"); ?>
