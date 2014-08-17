<?php
App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));

class UsersController extends AppController {

	public $uses = array('User'); 

	public $components = array(
	    'DebugKit.Toolbar', //デバッグきっと
	);

	public function index() {

	}

	//emailアドレスでサインアップ
	public function email_signup() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //postされたらユーザーを作成する
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('ユーザー登録に成功しました。'));
            } else {
                $this->Session->setFlash(__('登録に失敗しました。申し訳ございませんが、もう一入力して下さい。'));
            }
        }

	}
	//emailアドレスでログイン
	public function login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //postされたらログインする
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect(array('controller'=>'Campaigns','action'=>'home'));
	        } else {
	            $this->Session->setFlash(__('ログインに失敗しました。'));
	        }
	    }     
	}

	public function profile() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}

	//利用規約
	public function policy() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;


	}

    //facebookの認証処理部分
    public function facebook(){
        $this->autoRender = false;
        $this->facebook = $this->createFacebook();
        //ユーザ情報取得しますよと言う
        $user = $this->facebook->getUser();
        //認証後
        if($user){
        	//ユーザ情報を日本語で取得
            $me = $this->facebook->api('/me','GET');
            //友達の情報を取得
            $friends = $this->facebook->api('/me/friends?fields=id,name,birthday');
            //ユーザ情報をセッションに保存
            $this->Session->write('mydata',$me);
            $this->Session->write('friendsdata',$friends);
            //Userテーブルに、同じidがあるかどうか検索
            $res = $this->User->find('all', 
            	array(
            		'conditions' => array('User.fb_id' => $me['id']),
            		'limit' => 1,
            		'fields' => array('User.id', 'User.fb_id','User.email'),
    			)
    		);
            if($res != array()) {
				// 更新する内容を設定
				$data = array('User' => array('id' => $res[0]['User']['id'], 'email' => $me['email']));
				// 更新する項目（フィールド指定）
				$fields = array('email');
				//ログインする
				$this->Auth->login($res);
				//リダイレクトする
				$this->redirect(array('controller'=>'Campaigns','action'=>'home'));
            } else {
	            //変数を加工
	            $fb_data['User']['fb_id'] = $me['id'];
	            $fb_data['User']['email'] = $me['email'];
	            //これはユーザー登録ですよと言う
				$this->User->create();
				//saveする
	            $save_data = $this->User->save($fb_data);
	            //saveできなかった時の処理を書く
	            if($save_data === false) {
	            	$this->redirect(array('controller' => 'Campaigns', 'action' => 'pre_login'));
	            }
	        }
	        //saveが終わったらホーム画面にリダイレクトする
            $this->redirect(array('controller' => 'Campaigns', 'action' => 'home'));
        } else {//認証前
        	//スコープの確認
            $url = $this->facebook->getLoginUrl(array('scope' => 'email,publish_stream','canvas' => 1,'fbconnect' => 0));
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

    //ログアウト処理
	public function logout() {
	//facebook apiにアクセス
	$this->facebook = $this->createFacebook();
	//セッションを削除する
	$this->facebook->destroySession(); 
	//ログアウトする
	$this->Auth->logout();
	//emailログインした人のセッションを削除
	$this->Session->destroy();
	$this->redirect(array('controller'=>'Campaigns','action'=>'pre_login'));
	
	}

}