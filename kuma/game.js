// enchant.Game��enchant.Sprite��
// enchant.��������Game��Sprite�Ƃ�����悤�ɂ���
enchant();

// �y�[�W�̓ǂݍ��݂��������Ă���Q�[��������������
window.onload = function(){

	// �Q�[����������
	// ������320�̓Q�[����ʂ̉����Əc��
	var game = new enchant.Game(320, 320);
		
	// �K�v�ȉ摜�����[�h����
	game.preload("chara1.gif");
	game.onload = function (){
		// �X�v���C�g(�L����)�𐶐�
		// �R���X�g���N�^�ŕ��ƍ������w��
		var bear = new enchant.Sprite(32, 32);
		
		// �X�v���C�g�ɉ摜��ݒ�
		bear.image = game.assets["chara1.gif"];
		
		// ���[�g�V�[���̃C�x���g���Ď�
		game.rootScene.addEventListener("touchmove", function(e){
			bear.x = e.x;
			bear.y = e.y;
		});
		
		// ���t���[���J�n���ɌĂяo����鏈����o�^
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
		
		
		// �X�v���C�g�����[�g�V�[���ɒǉ�(�o�^)
		//game.rootScene.addChild(enemy);
		game.rootScene.addChild(bear);
	}

	game.start();
//	game.rootScene.backgroundColor = "red";
}