// enchant.Gameやenchant.Spriteを
// enchant.をつけずにGameやSpriteとかけるようにする
enchant();

// ページの読み込みが完了してからゲームを初期化する
window.onload = function(){

	// ゲームを初期化
	// 引数の320はゲーム画面の横幅と縦幅
	var game = new enchant.Game(320, 320);
		
	// 必要な画像をロードする
	game.preload("chara1.gif");
	game.onload = function (){
		// スプライト(キャラ)を生成
		// コンストラクタで幅と高さを指定
		var bear = new enchant.Sprite(32, 32);
		
		// スプライトに画像を設定
		bear.image = game.assets["chara1.gif"];
		
		// ルートシーンのイベントを監視
		game.rootScene.addEventListener("touchmove", function(e){
			bear.x = e.x;
			bear.y = e.y;
		});
		
		// 毎フレーム開始時に呼び出される処理を登録
		game.rootScene.addEventListener("enterframe", function(){
		
			if(game.frame % 10 === 0){
				var enemy = new Sprite(32, 32);
				enemy.image = game.assets["chara1.gif"];
				enemy.frame = 5;
				enemy.x = (320 - 32) * Math.random();
				enemy.addEventListener("enterframe", function(){
					enemy.y += 5;
					
					if(enemy.within(bear)){
						game.stop();
					}
				});
				game.rootScene.addChild(enemy);
			}
		});
		
		
		// スプライトをルートシーンに追加(登録)
		//game.rootScene.addChild(enemy);
		game.rootScene.addChild(bear);
	}

	game.start();
//	game.rootScene.backgroundColor = "red";
}