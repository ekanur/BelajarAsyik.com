<?php include("header.php"); ?>
<div class="roof"></div>
<div class="television">
    <div id="content">
<canvas id="stage" width="800" height="500">
</canvas>

<script>
var stage;

var queue;
var landscape;
var lContent;
var ballon = [];
var uSpeed = 100;
var ballonT = [];
var choice = [['GLASS','BOWL','CHAIR'],['PILLOW','FAN','LAMP'],['BOOK','SOAP','SPOON'],['PILLOW','TISSUE','GLASS'],['BOWL','FLOWER','LAMP']];
var iQuest = 0;
var imageQuest = ['gelas','kipas','sendok','tisu','lampu'];
var answer = [0,1,2,1,2];
var imageB;
var scoreT;
var score = 0;
var uScore = 20;
var livesBitmap;
var lastClick;
var start = 1;
var scoreResult;

var black;
var scoreBoard;

$(function(){
	init();
});
function init() {
	queue = new createjs.LoadQueue();
	queue.installPlugin(createjs.Sound);
	queue.addEventListener('complete',onLoad);
	queue.loadManifest([
		{id:"ballon",src:"assets/images/balon.png"},
		{id:"dor",src:"assets/images/dor.png"},
		{id:"landscape",src:"assets/images/pemandangan.png"},
		{id:"lContent",src:"assets/images/leftContainer.png"},
		{id:"gelas",src:"assets/images/barang/110/gelas.png"},
		{id:"kipas",src:"assets/images/barang/110/kipas.png"},
		{id:"tisu",src:"assets/images/barang/110/tisu.png"},
		{id:"sendok",src:"assets/images/barang/110/sendok.png"},
		{id:"lampu",src:"assets/images/barang/110/lampu.png"},
		{id:"kursi",src:"assets/images/barang/110/kursi.png"},
		{id:"heart1",src:"assets/images/heart1.png"},
		{id:"heart2",src:"assets/images/heart2.png"},
		{id:"heart3",src:"assets/images/heart3.png"},
		{id:"panci",src:"assets/images/barang/110/panci.png"},
		{id:"scoreBoard",src:"assets/images/score_board_green.png"}
		

		
	]);
}

function onLoad(){
	stage = new createjs.Stage('stage');
	lContent = new createjs.Bitmap(queue.getResult('lContent'));
	lContent.x = 0;
	lContent.y = 0;
	landscape = new createjs.Bitmap(queue.getResult('landscape'));
	landscape.x = 0;
	landscape.y = 0;
	
	stage.addChild(landscape);
	stage.addChild(lContent);
	
	imageB = new createjs.Bitmap(queue.getResult(imageQuest[iQuest]));
	imageB.x = 30;
	imageB.y = 100;
	
	scoreT = new createjs.Text('SCORE : 0','30px bazar','#00a3ef');
	//scoreT.weight = "bold";
	scoreT.x = 20;
	scoreT.y = 10;
	
	livesBitmap = new createjs.Bitmap(queue.getResult(''))
	
	
	
	stage.addChild(scoreT);
	stage.addChild(imageB);	
	
	for(i = 0;i<3;i++) {
		ballon[i] = new createjs.Bitmap(queue.getResult('ballon'));
		ballon[i].x = 260+(140 * i);
		ballon[i].y = 500 + (Math.random() * 100);
		ballon[i].speed = uSpeed + (Math.random() * 60); 
		ballonT[i] = new createjs.Text(choice[iQuest][i],'20px bazar','#FFFFFF');
		ballonT[i].textBaseline = "middle";
		
		ballonT[i].x = ballon[i].x;
		ballonT[i].y = ballon[i].y;
		ballon[i].regX = 50;
		ballon[i].regY = 50;
		ballon[i].i = i;
		
		ballon[i].addEventListener('click',ballonC);
		stage.addChild(ballon[i]);
		stage.addChild(ballonT[i]);
	}
	createjs.Ticker.addEventListener('tick',tick);
	
	scoreBoard = new createjs.Bitmap(queue.getResult('scoreBoard'));
	scoreBoard.x = 350;
	scoreBoard.y = 50;
	
	
	scoreBoard.regX = 50;
	scoreBoard.regY = 50;
	stage.addChild(scoreBoard);
	scoreBoard.scaleX = 0.5;
	scoreBoard.scaleY = 0.5;
	scoreBoard.alpha = 0;
	scoreBoard.visible = false;
	
	scoreResult = new createjs.Text("00",'30px bazar','#FFFFFF');
	scoreResult.x = 470;
	
	scoreResult.y = 250;
	scoreResult.textAlign = "center";
	scoreResult.textBaseline = "middle";
	scoreResult.visible = false;
	scoreResult.alpha = 0;
	scoreResult.scaleX = 0.5;
	scoreResult.scaleY = 0.5;
	stage.addChild(scoreResult);
	stage.update();
}

function tick(event){
	var out = 0;
	for(i = 0;i<3;i++) {
		ballon[i].y -= event.delta/1000 * ballon[i].speed;
		ballonT[i].y = ballon[i].y;
		//console.log(ballon[i].y);
		if(ballon[i].y <= -100) {
			out++;
		}
	}
	//console.log(out);
	if(out >= 3) {
		nextQuest();
	}
	stage.update();
}

function ballonC(event) {
	var target = event.target;
	lastClick = target.i;
	target.image = queue.getResult('dor');
	ballonT[target.i].visible = false;
	createjs.Tween.get(target).wait(100).to({ alpha :0},100);
	for(i = 0;i<3;i++) {
		ballon[i].speed += 400;
	}
	if(target.i == answer[iQuest]) {
		score += uScore;
		scoreT.text = "SCORE : "+ score;
	} else {
		
	}
}

function nextQuest(){
	if(start == 1) {
		start++;
		iQuest++;
		if(iQuest >= answer.length) {
			showScore();
		}
		//console.log('next');
		imageB.image = queue.getResult(imageQuest[iQuest]);
		ballon[lastClick].image = queue.getResult('ballon');
		ballon[lastClick].alpha = 1;
		ballonT[lastClick].visible = true;
		for(i = 0;i<3;i++) {
			ballon[i].x = 260+(140 * i);
			ballon[i].y = 500 + (Math.random() * 100);
			ballon[i].speed = uSpeed + (Math.random() * 60); 			
			ballonT[i].x = ballon[i].x;
			ballonT[i].y = ballon[i].y;
			ballonT[i].text = choice[iQuest][i];
		}
		stage.update();
		start = 1;
		
	}
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
</div>
<?php include("footer.php"); ?>