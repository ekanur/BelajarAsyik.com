<?php include("header.php"); ?>
 <div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>Topologi Jaringan</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222">Topologi jaringan adalah cara menghubungkan perangkat telekomunikasi yang satu dengan yang lainnya sehingga membentuk jaringan. Dalam suatu jaringan telekomunikasi, jenis topologi yang dipilih akan mempengaruhi kecepatan komunikasi. Untuk itu maka perlu dicermati kelebihan/keuntungan dan kekurangan/kerugian dari masing ‐masing topologi berdasarkan karakteristiknya masing topologi berdasarkan karakteristiknya. Berikut ini adalah jenis atau Macam - macam Topologi dari jaringan tersebut</div></div>
 	</div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"> <h2>TOPOLOGI BUS</h2>
      		
      			<div class="span3"><img src="assets/images/barang/topologi-bus.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Topologi ini menggunakan satu segment backbone, yaitu yang menyambungkan host secara langsung. Jaringan ini hanya terdiri dari satu saluran kabel yang menggunakan kabel BNC dan kedua ujungnya diakhiri oleh sebuah terminator. 
      Karakteristik Topologi Bus :
      <ol>
<li>merupakan satu kabel yang kedua ujungnya ditutup oleh terminator, dimana sepanjang kabel terdapat node - node.</li>
<li>umum digunakan karena sederhana dalam instalasi.</li>
<li>sinyal melewati kabel dalam dua arah dan mungkin akan terjadi collision.</li>
<li>jika salah satu segment kabel putus, maka seluruh jaringan akan terhenti</li>
</ol></p>
      			</div>	
      		
      	</div>
        <div class="item"><h2>TOPOLOGI RING</h2>
        	
      			<div class="span3"><img src="assets/images/barang/topologi-ring.gif"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Topologi ini secara fisik membentuk suatu lingkaran ( Ring ). Pada Topologi Ring, komunikasi data dapat terganggu jika salah satu titik mengalami gangguan. Akan tetapi, jaringan FDDI mengantisipasi kelemahan ini dengan mengirimkan data searah jarum jam dan berlawanan secara bersama.
       Karakteristik Topologi Ring :
       <ol>
<li>teknologi token pasing untuk mengirim paket data.</li>
<li>jika salah satu kabel node terputus yang lain tidak terganggu.</li>
<li>setiap segment dihubungkan dengan hub central ( central node ).</li>
<li>mudah dikembangkan, karena setiap node hanya memiliki kabel yang langsung terhubung ke central node.</li>
</ol>
</p>
      			</div>	
      		
        </div>
        <div class="item"><h2>TOPOLOGI STAR</h2>
        	
      			<div class="span3"><img src="assets/images/barang/topologi-star.jpg"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Topologi Star merupakan hubungan semua kabel pada host ke satu titik utama. Titik ini biasanya menggunakan Hub atau Switch. Topologi bintang merupakan bentuk topologi jaringan yang berupa konvergensi dari node tengah ke setiap node atau pengguna.
          Karakteristik Topologi Star :
          <ol>
<li>Topologi yang banyak digunakan sampai saat ini.</li>
<li>Perangkat dihubungkan ke sebuah terminal (hub/switch).</li>
<li>Jika salah satu komputer down tidak mempengaruhi yang lain & pelacakan kesalahan sangat cepat.</li>
<li>setiap node berkomunikasi langsung dengan central node, traffic data mengalir dari node ke central node dan kembali lagi. </li>
</ol>
</p>
      			</div>	
      		
       	</div>
        <div class="item"> <h2>TOPOLOGI MESH</h2>
        	
      			<div class="span3"><img src="assets/images/barang/topologi+mesh.jpg"/>

      			</div>
      			<div class="span6" style="padding-top:15px">
      			<p>
      				Topologi mesh menerapkan hubungan antar sentral secara penuh. Jumlah saluran ini harus disediakan untuk membentuk suatu jaringan topologi mesh yaitu jumlah sentral dikurangi 1 (n-1, dengan n adalah jumlah sentral). Tingkat kerumitan yang terdapat pada jaringan mesh ini sebanding dengan meningkatnya jumlah sentral yang terpasang. Dengan demikian disamping kurang ekonomis juga relatif mahal dalam pengoperasiannya.<br/><br/>
      				
      			</p>

      			</div>	
      		
        </div>
       </div>
  	  </div>
      <div class="nav">
   
      <div class="next"></div><div class="prev"></div>
      </div>
    </div>
    <a href="simulasi_topologi.php" class="btn btn-default">Lihat simulasi</a>
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