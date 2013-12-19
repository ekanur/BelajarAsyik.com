<?php include("header.php"); ?>
 <div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>Periperal Jaringan</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222">
 			Pengertian perangkat keras jaringan komputer adalah perangkat yang digunakan untuk menghubungkan komputer ke komputer lainnya dalam jaringan untuk tujuan berbagi data, berbagi informasi serta berbagi peripheral dalam jaringan.
 adapun contoh  dari perangkat keras jaringan komputer antra lain
 		</div></div>
 	</div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"> <h2>SERVER</h2>
      		
      			<div class="span3"><img src="assets/images/barang/server.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Server merupakan perangkat keras yang berfungsi menyediakan layanan kepada client. Terdapat beberapa macam server, yaitu: File server, Web server, Mail server, Proxy server, dll</p>
      			</div>	
      		
      	</div>
        <div class="item"><h2>KABEL JARINGAN</h2>
        	
      			<div class="span3"><img src="assets/images/barang/twisted-pair-cable.gif"/><img src="assets/images/barang/kabel-fiberoptic.jpg"/><img src="assets/images/barang/coaxial.png"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Kabel dalam sebuah jaringan digunakan sebagai media penghubung. Meskipun sekarang sudah ada teknologi tanpa kabel (wireless) namun kabel masih sering digunakan karena mudah dalam pengoperasiannya. Ada beberapa macam tipe kabel yang biasa digunakan untuk membangun sebuah jaringan komputer seperti: 
      				<ul>
      					<li>Kabel Twisted Pair</li>
      					<li>Kabel Coaxial</li>
      					<li>Kabel Fiber Optic</li>
      				</ul>

      			</p>
      			</div>	
      		
        </div>
         <div class="item"> <h2>CONNECTOR</h2>
        	
      			<div class="span3"><img src="assets/images/barang/rj45.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>
      				Konektor digunakan sebagai sarana penghubung antara kabel dengan colokan NIC (Network Interface Card) yang ada pada komputer. Jenis konektor ini disesuaikan dengan tipe kabel yang digunakan misalnya Konektor RJ-45 berpasangan dengan kabel UTP/STP, konektor BNC/T berpasangan dengan kabel coaxial dan konektor ST berpasangan dengan kabel fiber optic.
      			</p>
      			</div>	
      		
        </div>
        <div class="item"><h2>SWITCH</h2>
        	
      			<div class="span3"><img src="assets/images/barang/switch.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Switch digunakan untuk menyatukan kabel-kabel network dari tiap workstation, server atau perangkat lainnya. Switch mampu menganalisa paket data yang dilewatkan padanya sebelum dikirim ke tujuan. Selain itu switch juga memiliki kecepatan transfer data dari server ke workstation atau sebaliknya.
</p>
      			</div>	
      		
       	</div>
        <div class="item"> <h2>ROUTER</h2>
        	
      			<div class="span3"><img src="assets/images/barang/router.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>
      				Router memiliki kemampuan untuk menyaring atau menfilter data yang lalu lalang di jaringan berdasarkan aturan atau protocol tertentu. Sama seperti hub/switch, router juga dapat digunakan untuk menghubungkan beberapa jaringan seperti jaringan model LAN, MAN, bahkan WAN.

      			</p>

      			</div>	
      		
        </div>

       </div>

  	  </div>
      <div class="nav">
   
      <div class="next"></div><div class="prev"></div>
      </div>

    </div>
    <a href="simulasi_jaringan.php" class="btn btn-default">Lihat simulasi</a>
 </div> 

  <style>
 
  	
 </style>
 <script>

 i = 0;
var countItem = 5;

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