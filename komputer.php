<?php include("header.php"); ?>
 <div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>Periperal Komputer</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222">Peripheral adalah hardware tambahan yang disambungkan ke komputer, biasanya dengan bantuan kabel. Peripheral ini bertugas membantu komputer menyelesaikan tugas yang tidak dapat dilakukan oleh hardware yang sudah terpasang didalam casing.</div></div>
 	</div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"> <h2>MONITOR</h2>
      		
      			<div class="span3"><img src="assets/images/barang/monitor.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Berfungsi menampilkan proses dan hasil pekerjaan komputer. Jenis lain mointor yaitu touch screen monitor, yaitu monitor yang dilengkapi dengan teknologi untuk bisa menangkap sentuhan dilayar, jadi pemakai semakin dimanjakan untuk bisa mengoperasikan. Biasanya digunakan untuk tujuan khusus, misalnya di restourant ataupun sebagai media promisi untuk menampilkan informasi, sehingga untuk berinteraksi, pemakai cukup menyentuh layar monitor saja, tanpa perlu menggunakan keyboard atau mouse.</p>
      			</div>	
      		
      	</div>
        <div class="item"><h2>KEYBOARD</h2>
        	
      			<div class="span3"><img src="assets/images/barang/keyboard.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Gunanya untuk memberi perintah kepada komputer dengan cara menuliskannya atau menekan kombinasi beberapa tombol. Saat ini sejumlah perusahaan seperti Microsoft dan Logitech sudah membuat keyboard tanpa kabel (wireless) yang menggunakan pancaran infrared ataupun radio frequency</p>
      			</div>	
      		
        </div>
        <div class="item"><h2>MOUSE</h2>
        	
      			<div class="span3"><img src="assets/images/barang/mouse.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Berfungsi untuk mengendalikan kursor/pointer dilayar monitor dengan cara menggerakkannya maju, mundur atau kesamping. Untuk versi lama, didalamnya terdapat bola karet yang akan menggerakkan roda-roda kecil, yang akan mengatur gerakan kursor/pointer. Sekarang mouse tidak menggunakan bola karet lagi, tetapi menggunakan sinar ataupun laser, biasanya disebut optical mouse atau laser mouse</p>
      			</div>	
      		
       	</div>
        <div class="item"> <h2>PRINTER</h2>
        	
      			<div class="span3"><img src="assets/images/barang/printer.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Digunakan untuk mencetak hasil proses komputer keatas kertas sehingga bisa dibaca. Ada tiga jenis printer yang dikenal luas yaitu dot-matrix printer, inkjet printer, dan laser printer.</p>
      			<a href="http://localhost/project/tubes_mm/BelajarAsyik.com/assets/simulasi/animasiprinter.swf" class="btn btn-default">Lihat simulasi</a>
      			</div>	
      		
        </div>
       </div>
  	  </div>
      <div class="nav">
   
      <div class="next"></div><div class="prev"></div>
      </div>
    </div>

 </div> 

  <style>
 
  	
 </style>
 <script>

 i = 0;
var countItem = 4;

 $(function(){
	
	 $('.prev').fadeOut();
	$('.next').fadeIn();
	 $('.next').on('click',function(){
		
	
		 if(i < countItem) {
			
			 i++;
			 
			 $('.content-slider').animate({
				 "marginLeft": "-=770px"
			 },function(){
				 playSound(i);
			 });
		if(i == countItem-1) {
				 $(this).hide();
			 $('.prev').fadeIn();
		} else {
				
				 $(this).fadeIn();
			 $('.prev').fadeIn();
			
			}
		 }
		 
		 
		
	});

	$('.prev').on('click',function(){
		
		 
	
		 if(i > 0) {
			
			 i--;
			 
			 $('.content-slider').animate({
				 "marginLeft": "+=770px"
			 },function(){
				 playSound(i);
			 });
			 
			if(i == 0) {
				 $(this).fadeOut();
			 $('.next').fadeIn();
			} else {
				 $(this).fadeIn();
			 $('.next').fadeIn();
			}
		 }
		 
		 
		
	});
 });
 function playSound(i){
	i = i+1;
	 switch(i){
	 	case 1 :
			var audioElement = document.createElement('audio');
			// audioElement.setAttribute('src', './assets/sound/refrigrator.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 2 :
			var audioElement = document.createElement('audio');
			// audioElement.setAttribute('src', './assets/sound/bowl.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 3 :
			var audioElement = document.createElement('audio');
			// audioElement.setAttribute('src', './assets/sound/glass.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 4 :
			var audioElement = document.createElement('audio');
			// audioElement.setAttribute('src', './assets/sound/pan.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
	 }
 }
 </script>
<?php include("footer.php"); ?>