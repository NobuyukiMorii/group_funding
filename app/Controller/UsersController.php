<?php

App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));

class UsersController extends AppController {

	public function index() {

	}

	public function email_signup() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}

	public function email_login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        
	}

    //facebookの認証処理部分
    public function facebook(){
        $this->autoRender = false;
        $this->facebook = $this->createFacebook();
        //ユーザ情報取得
        $user = $this->facebook->getUser();
        //認証後
        if($user){
        	//ユーザ情報を日本語で取得
            $me = $this->facebook->api('/me','GET',array('locale'=>'ja_JP'));
            //ユーザ情報をセッションに保存
            $this->Session->write('mydata',$me);
            //Userモデルに、同じidがあるかどうか検索
            $res = $this->User->find('first', array('User' => array('User.fb_id' => $me['id'])));
            //既にユーザー登録されている場合
            if(!empty($res)) {
				// 更新する内容を設定
				$data = array('User' => array('id' => $res['User']['id'], 'email' => $me['email']));
				// 更新する項目（フィールド指定）
				$fields = array('email');
				// 更新
				$this->User->save($data, false, $fields);
            } else {
            //新規登録の場合
	            //変数を加工
	            $fb_data['User']['fb_id'] = $me['id'];
	            $fb_data['User']['email'] = $me['email'];
	            //saveする
	            $save_data = $this->User->save($fb_data);
	        }
	        //saveが終わったらホーム画面にリダイレクトする
            $this->redirect(array('controller' => 'Campaigns', 'action' => 'home'));
        } else {//認証前
            $url = $this->facebook->getLoginUrl(array(
           	//スコープの確認
            'scope' => 'email,publish_stream','canvas' => 1,'fbconnect' => 0));
            $this->redirect($url);
        }
    }
    
 	//Facebookに接続(appID, secretを記述)
    private function createFacebook() {
        return new Facebook(array(
            'appId' => '828906960467092',
            'secret' => '65b2a9a9645ae2c741678da3bc79246d'
        ));
    }

	public function facebook_login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}

}