<?php

App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));

class CampaignsController extends AppController {
	//使うモデル
	public $uses = array('Campaign','User','Fund','Comment');
	//使うコンポーネントを定義
	public $components = array('Common','Image','Session','Paginator');
	//ヘルパーの定義
	public $helpers = array('Common','Html');

 	//Facebookに接続
    private function createFacebook() {        //【8】appID, secretを記述
        return new Facebook(array(
            'appId' => '828906960467092',
            'secret' => '65b2a9a9645ae2c741678da3bc79246d'
        ));
    }

	//ページタイトル
	public function index() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;


	}

	//ログインしていない時の画面
	public function pre_login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //登録されているキャンペーンを全て検索する
        $this->Paginator->settings = array(
        	'conditions' => array('Campaign.status' => 0),
            'limit' => 10
        );
        //ページネーターの値を変数に格納
        $data = $this->Paginator->paginate('Campaign');
        //変数に値を渡す
        $this->set(compact('data'));
	}

	//ホーム画面
	public function home() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //ログインユーザーの情報を取得

        //FBに接続
        $facebook = $this->createFacebook();
        //ログインしている自分とその人の友達のデータをセッションから取得
        $myFbData = $this->Session->read('mydata');
        $friendsFbData = $this->Session->read('friendsdata');
        //データをビューに渡す
        $this->set(compact('myFbData', 'friendsFbData'));
        //登録されているキャンペーンを全て検索する
        $this->Paginator->settings = array(
        	'conditions' => array('Campaign.status' => 0),
            'limit' => 10
        );
        //ページネーターの値を変数に格納
        $data = $this->Paginator->paginate('Campaign');
        //変数に値を渡す
        $this->set(compact('data'));

	}
	//詳細画面
	public function detail($id) {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //コメントが投稿された時        
        if(!empty($this->request->data['Comment'])) {
        	//ポストされたデータがあれば保存する
        	$this->Comment->saveall($this->request->data['Comment']);
        }
        //Funされた時
        if(!empty($this->request->data['Fund'])) {
	        //ポストされたデータがあれば保存する
	        $this->Fund->saveall($this->request->data['Fund']);
    	}
    	//キャンペーンテーブルから、対象のidのデータを引っ張ってくる
	    $data = $this->Campaign->find('first', array(
	        'conditions' => array('Campaign.id' => $id)
	    ));
	    //ファンドテーブルから、対象のidのデータを引っ張ってくる
	    $fund_data = $this->Fund->find('all', array(
	    	'conditions' => array('Fund.Campaign_id' => $id),
	    	'order' => array('Fund.id' => 'desc')
	    ));
	    //現在の合計額
	    $current['sum'] = 0;
	    foreach ($fund_data as $key => $value) {
	    	$current['sum'] += intval($value['Fund']['amount']);
	    }
	    if(empty($fund_data)) {$current['sum'] = 0;}
	    //現在の割合
	    $current['rate'] = floor($current['sum']/$data['Campaign']['small_sum']*100);
	    //プログレスバー用
	    $current['rate_for_figure'] =  $current['rate'];
	    if($current['rate_for_figure'] > 100) {
	    	$current['rate_for_figure'] = 100;
	    }
	    //コメントテーブルから対象のデータを検索する
	    $comment_data = $this->Comment->find('all', array(
	    	'conditions' => array('Comment.Campaign_id' => $id),
	    	'order' => array('Comment.id' => 'desc')
	    ));
	    //セッションに保存する
	    $this->Session->write('data', $data);
	    //データを渡す
	    $this->set(compact('data','fund_data','comment_data','current'));
	}
	//金額の入力画面
	public function enter_amount($id) {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //データを受け取る
        $data = $this->Session->read('data');
        //ビューに情報を渡す
        $this->set(compact('data'));    	
	}
	//DBから検索した画像の処理
    public function image($id) {
        // Sweetモデルから指定されたIDのデータを1件取得
        $data = $this->Campaign->findById($id);
        // ビューを出力しないようにする
        $this->autoRender = false;
        // 出力するデータがHTMLではなくJPEG画像であることをブラウザに伝える
        header('Content-type: image/jpeg');
        //画像データの出力
        echo $data['Campaign']['file'];
    }

	//作成フォーム
	public function create() {
		//レイアウトは使う
		//$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}
	//確認画面
	public function create_confirm() {
		//レイアウトは使う
		//$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
		//データがポストされなかった時の処理
		if(empty($this->request->data)) {
			$this->request->data = $this->Session->read('temp');
			$this->set('data',$this->request->data);
			return;
		}
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //アップロードした画像ファイルの中身を読み込んでFormの入力データに上書き
        $this->request->data['Campaign']['file'] = file_get_contents($this->request->data['Campaign']['file']['tmp_name']);
        //Formの入力データをSessionに保存
        $this->Session->write('temp', $this->request->data);
        //ビューにデータを渡す
        $this->set('data',$this->request->data);
	}

	public function display_image() {
	    // Sessionに保存したデータを取り出す 
	    $image = $this->Session->read('temp');
	    // ビューを出力しないようにする
	    $this->autoRender = false;
	    // 出力するデータがHTMLではなくJPEG画像であることをブラウザに伝える
	    header('Content-type: image/jpeg');
	    //画像データの出力
	    echo $image['Campaign']['file'];
	}

	//プロジェクトが生成された画面
	public function create_live() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //セッションからデータを取り出す
        $data = $this->Session->read('temp');
        //データが格納されていない時は前の画面にリダイレクト
        if(empty($data)) {$this->redirect('/Campaigns/create_confirm');}
        //データを保存する
        $data = $this->Campaign->save($data);
        //ビューにデータを渡す
        $this->set('data',$data);

	}

}