<?php include("header.php"); ?>
<div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>HOME / KUIS / TEBAK GAMBAR</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222"></div></div>
 	</div>
 </div>
<div class="television">
    <div id="content">
<canvas width="800" height="500"  id="stage" >
</canvas>

<script>
var stage;
var choiceBitmap = [];
var quest = ['Memberi perintah kepada komputer dengan cara menuliskannya atau menekan kombinasi beberapa tombol','Berfungsi menampilkan proses dan hasil pekerjaan komputer','Berfungsi untuk mengendalikan kursor/pointer dilayar monitor', 'Sarana penghubung antara kabel dengan colokan NIC (Network Interface Card) yang ada pada komputer', 'Digunakan untuk menyatukan kabel-kabel network dari tiap workstation, server atau perangkat lainnya', 'Jaringan ini hanya terdiri dari satu saluran kabel yang menggunakan kabel BNC dan kedua ujungnya diakhiri oleh sebuah terminator', 'Topologi ini secara fisik membentuk suatu lingkaran', 'Topologi jaringan yang berupa konvergensi dari node tengah ke setiap node atau pengguna'];

var imageChoice1 = ['keyboard', 'monitor', 'mouse', 'switch', 'switch', 'topologi_star', 'topologi_mesh', 'topologi_star'];
var imageChoice2 = ['monitor','printer','keyboard','connector','server', 'topologi_bus', 'topologi_ring', 'topologi_bus'];
var answer = [0,0,0,1,0,1,1,0];
var boxTarget;
var queue;
var iQuest = 0;
var textQuest;
var black;
var popup;
var scoreT;
var uScore = 20;
var score = 0;
var scoreBoard;
var scoreResult;

$(function(){
	init();
});
function init() {
	queue = new createjs.LoadQueue();
	queue.installPlugin(createjs.Sound);
	queue.addEventListener('complete',onLoad);
	queue.loadManifest([
		{id:"drop",src:"assets/images/drop.png"},
		{id:"keyboard",src:"assets/images/barang/110/keyboard.jpg"},
		{id:"monitor",src:"assets/images/barang/110/monitor.jpg"},
		{id:"printer",src:"assets/images/barang/110/printer.jpg"},
		{id:"mouse",src:"assets/images/barang/110/mouse.jpg"},
		{id:"switch",src:"assets/images/barang/110/switch.jpg"},
		{id:"connector",src:"assets/images/barang/110/rj45.jpg"},
		{id:"server",src:"assets/images/barang/110/server.jpg"},
		{id:"topologi_star",src:"assets/images/barang/110/topologi-star.jpg"},
		{id:"topologi_bus",src:"assets/images/barang/110/topologi-bus.jpg"},
		{id:"topologi_mesh",src:"assets/images/barang/110/topologi+mesh.jpg"},
		{id:"topologi_ring",src:"assets/images/barang/110/topologi-ring.gif"},
		{id:"benar",src:"assets/images/benar.png"},
		{id:"salah",src:"assets/images/salah.png"},
		{id:"pigora",src:"assets/images/barang/110/pigora.png"},
		{id:"scoreBoard",src:"assets/images/score_board_green.png"}
	]);
}

function onLoad(){
	stage = new createjs.Stage('stage');
	boxTarget = new createjs.Bitmap(queue.getResult('drop'));
	choiceBitmap[0] = new createjs.Bitmap(queue.getResult(imageChoice1[iQuest]));
	choiceBitmap[1] = new createjs.Bitmap(queue.getResult(imageChoice2[iQuest]));
	boxTarget.x = 375;
	boxTarget.y = 70;
	boxTarget.regX = 50;
	textQuest = new createjs.Text(quest[iQuest],'15px Segoe UI', '#FFFFFF');
	textQuest.textAlign = "center";
	textQuest.width=50;
	textQuest.height=100;
	textQuest.textBaseline = "middle";
	textQuest.x = 400;
	textQuest.y = 250;
	stage.addChild(textQuest);
	
	
	choiceBitmap[0].x = 100;
	choiceBitmap[0].y = 370;
	choiceBitmap[0].regX = 50;
	choiceBitmap[0].regY = 50;
	choiceBitmap[0].i = 0;
	
	choiceBitmap[1].x = 700;
	choiceBitmap[1].y = 370;
	choiceBitmap[1].regX = 50;
	choiceBitmap[1].regY = 50;
	choiceBitmap[1].i = 1;
	
	choiceBitmap[1].addEventListener('mousedown',choiceDrag);
	choiceBitmap[0].addEventListener('mousedown',choiceDrag);
	
	stage.addChild(boxTarget);
	stage.addChild(choiceBitmap[1]);
	stage.addChild(choiceBitmap[0]);
	
	
	
	
	popup = new createjs.Bitmap(queue.getResult('benar'));
	popup.x = 350;
	popup.y = 140;
	
	
	popup.regX = 50;
	popup.regY = 50;
	
	popup.scaleX = 0.5;
	popup.scaleY = 0.5;
	popup.alpha = 0;
	popup.visible = false;
	
	popup.addEventListener('click',nextQuest);
	black = new createjs.Shape();
	black.graphics.beginFill('#000000').drawRect(0,0,800,500);
	black.alpha = 0;
	black.visible = false;
	black.addEventListener('click',nextQuest);
	createjs.Ticker.addEventListener('tick',tick);
	stage.addChild(black);
	stage.addChild(popup);
	
	
	scoreBoard = new createjs.Bitmap(queue.getResult('scoreBoard'));
	scoreResult = new createjs.Text("00",'30px bazar','#FFFFFF');
	scoreBoard.x = 280;
	scoreBoard.y = 80;
	scoreResult.x = 400;
	
	scoreResult.y = 280;
	
	
	scoreBoard.regX = 50;
	scoreBoard.regY = 50;
	stage.addChild(scoreBoard);
	scoreBoard.scaleX = 0.5;
	scoreBoard.scaleY = 0.5;
	scoreBoard.alpha = 0;
	scoreBoard.visible = false;
	
	
	
	scoreResult.textAlign = "center";
	scoreResult.textBaseline = "middle";
	scoreResult.visible = false;
	scoreResult.alpha = 0;
	scoreResult.scaleX = 0.5;
	scoreResult.scaleY = 0.5;
	stage.addChild(scoreResult);
	
	
	
	stage.update();
	
}
function tick(event) {
	stage.update();
}

function choiceDrag(event){
	var target = event.target;
	var offset = {x:target.x - event.stageX, y:target.y - event.stageY };
	
	event.addEventListener('mousemove',function(evt){
		
		evt.target.x = evt.stageX + offset.x;
		evt.target.y = evt.stageY + offset.y;
		stage.update();
	});
	
	event.addEventListener('mouseup',function(ev){
		var pt = ev.target.localToLocal(20,20,boxTarget);
		if(boxTarget.hitTest(pt.x,pt.y)) {
			boxTarget.image = ev.target.image;
			ev.target.visible = false;
			stage.update();
			if(ev.target.i == answer[iQuest]) {
				showPopup("true");
			} else {
				showPopup("false");
			}
			
		}
		
		
	});
}

function showPopup(type) {
	popup.visible = true;
	black.visible = true;
	if(type == "true") {
		score+= uScore;
		popup.image = queue.getResult('benar');
		createjs.Tween.get(black).to({ alpha: 0.5 },500,createjs.Ease.bounceOut);
		createjs.Tween.get(popup).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut);
		
	} else {
		popup.image = queue.getResult('salah');
		createjs.Tween.get(black).to({ alpha: 0.5 },500,createjs.Ease.bounceOut);
		createjs.Tween.get(popup).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut);
	}
	
}
function nextQuest() {
	iQuest++;
	if(iQuest >= answer.length) {
		showScore();
	}
	popup.alpha = 0;
	black.alpha = 0;
	popup.visible = false;
	black.visible = false;
	choiceBitmap[0].image = queue.getResult(imageChoice1[iQuest]);
	choiceBitmap[1].image = queue.getResult(imageChoice2[iQuest]);
	choiceBitmap[0].x = 100;
	choiceBitmap[0].y = 370;
	popup.scaleX = 0.5;
	popup.scaleY = 0.5;
	choiceBitmap[0].visible = true;
	choiceBitmap[1].visible = true;
	
	choiceBitmap[1].x = 700;
	choiceBitmap[1].y = 370;
	boxTarget.image = queue.getResult('drop');
	textQuest.text = quest[iQuest];
	stage.update();
	
}

function showScore(){
	scoreBoard.visible = true;
	scoreResult.visible = true;
	scoreResult.text = score;
	createjs.Tween.get(scoreBoard).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut).call(function(){
		createjs.Tween.get(scoreResult).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut)
	});
	scoreBoard.addEventListener('click',function(){
		window.history.back();	
	});
}



</script>
</div>
<a href="http://localhost/project/tubes_mm/BelajarAsyik.com/assets/simulasi/TesHardwareJaringan.swf" class="btn btn-default">KUIS LAIN >></a>
</div>
<?php include("footer.php"); ?>