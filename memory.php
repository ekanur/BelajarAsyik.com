<?php include("header.php"); ?>
<div class="roof"></div>
<div class="television">
    <div id="content">
<canvas id="stage" width="800" height="500">
</canvas>

<script>

//function shuffle(o) {
	//for(var j,x,i = o.length;i;j = Math.floor(Math.random() * i), x = o[--i] , i = o[j] , o[j] = x);
	
	//return o;
//}

var stage;
var card = [];
var queue;
var aClick = 1;
var choose = 1;
//var imageT = ['bantal','buku','bunga','sikat','kursi','panci'];
//var imageM = imageT.concat(imageT);
var indexTemp;
var finish = 0;
var scoreResult;
var timeT;
var time;
var black;
var scoreBoard;
var pause = 1;
var black;
imageM = ['bantal','buku','bunga','sikat','kursi','panci','buku','kursi','panci','sikat','bantal','bunga'];//shuffle(imageM);



$(function(){
	init();
});
function init() {
	queue = new createjs.LoadQueue();
	queue.installPlugin(createjs.Sound);
	queue.addEventListener('complete',onLoad);
	queue.loadManifest([
		{id:"card",src:"assets/images/card.png"},
		{id:"bantal",src:"assets/images/barang/110/bantal.png"},
		{id:"buku",src:"assets/images/barang/110/buku.png"},
		{id:"bunga",src:"assets/images/barang/110/bunga.png"},
		{id:"sikat",src:"assets/images/barang/110/sikat.png"},
		{id:"kursi",src:"assets/images/barang/110/kursi.png"},
		{id:"panci",src:"assets/images/barang/110/panci.png"},
		{id:"bantalSound",src:"assets/sound/pillow.mp3"},
		{id:"bukuSound",src:"assets/sound/book.mp3"},
		{id:"bungaSound",src:"assets/sound/flower.mp3"},
		{id:"sikatSound",src:"assets/sound/brushtooth.mp3"},
		{id:"kursiSound",src:"assets/sound/chair.mp3"},
		{id:"panciSound",src:"assets/sound/pan.mp3"},
		{id:"scoreBoard",src:"assets/images/score_board_green.png"}
		
	]);
}

function onLoad(){
	stage = new createjs.Stage('stage');
	var b = 0;
	var k = 1;
	for(i = 0;i<12;i++) {
		card[i] = new createjs.Bitmap(queue.getResult('card'));
		card[i].x = 130 + (b * 140);
		card[i].y = -70 + (k * 140) ;
		card[i].i = i;
		card[i].selected = 0;
		b++;
		if(b == 4) {
			b = 0;
			k++;
		}
		card[i].addEventListener('click',cardClick);
		stage.addChild(card[i]);
	}
	
	timeT  = new createjs.Text('TIME : 0','30px bazar','#ffffff');
	timeT.textAlign = "center";
	timeT.textBaseline = "middle";
	timeT.x = 400;
	timeT.y = 30;
	stage.addChild(timeT);
	
	
	scoreBoard = new createjs.Bitmap(queue.getResult('scoreBoard'));
	scoreResult = new createjs.Text("00",'30px bazar','#FFFFFF');
	scoreBoard.x = 280;
	scoreBoard.y = 80;
	scoreResult.x = 400;
	
	scoreResult.y = 280;
	
	
	scoreBoard.regX = 50;
	scoreBoard.regY = 50;
	
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
	
	createjs.Ticker.setPaused(true);
	createjs.Ticker.addEventListener('tick',tick);
	black = new createjs.Shape();
	black.graphics.beginFill('#000000').drawRect(0,0,800,500);
	black.alpha = 0;
	black.visible = false;
	
	stage.addChild(black);
	stage.addChild(scoreResult);
	stage.addChild(scoreBoard);
	
	
	stage.update();
}

function tick(event){
	if(event.pause != true) {
		if(pause == 0) {
			var second = Math.floor(createjs.Ticker.getTime('true') / 1000);
		var milli = Math.floor(createjs.Ticker.getTime('true') / 100) - second;
		
		timeT.text = "TIME : "+milli ;
		}
		
	}
	stage.update();
	
}
function cardClick(event){
	var target = event.target;
	
	if(aClick == 1) {
		createjs.Sound.play(imageM[target.i]+"Sound");
		createjs.Ticker.setPaused(false);
		pause = 0;
		if(choose == 1 && event.target.selected == 0) {
			
			target.selected = 1;
			event.target.image = queue.getResult(imageM[target.i]);
			indexTemp = target.i;
			choose++;
			
		} else if(choose == 2 && event.target.selected == 0) {
			aClick = 0;
			target.selected = 1;
			target.image = queue.getResult(imageM[target.i]);
			if(imageM[target.i] == imageM[indexTemp]) {
				setTimeout(function() {
					finish++;
					aClick = 1;
					card[indexTemp].visible = false;
					target.visible = false;			
					stage.update();
					console.log(finish);
					if(finish == 6) {
						showScore();
					}
					
				},700);
			} else {
				setTimeout(function() {
					aClick = 1;
					card[indexTemp].image = queue.getResult('card');
					target.image = queue.getResult('card');			
					stage.update();
					
				},700);
				
			}
			card[indexTemp].selected = 0;
			target.selected = 0;	
			choose = 1;
		}
		stage.update();
	}
}

function showScore() {
	black.visible = true;
	scoreBoard.visible = true;
	scoreResult.visible = true;
	pause++;
	
	scoreResult.text = timeT.text;
	createjs.Tween.get(black).to({ alpha: 0.5 },500,createjs.Ease.bounceOut);
	createjs.Tween.get(scoreBoard).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut).call(function(){
		createjs.Tween.get(scoreResult).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut)
	});
	scoreBoard.addEventListener('click',function(){
		window.history.back();	
	});
}



</script>
</div>
</div>
<?php include("footer.php"); ?>