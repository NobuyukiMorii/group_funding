<?php
class CampaignsController extends AppController {
	//使うコンポーネントを定義
	public $components = array('Common','Image','Session');
	//ヘルパーの定義
	public $helpers = array('Common','Html');

	//ページタイトル
	public function index() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;


	}

	//ログインしていないt時の画面
	public function pre_login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //

	}

	//ホーム画面
	public function home() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //

	}	

	//作成フォーム
	public function create() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}
	//確認画面
	public function create_confirm() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
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
        //ビューにデータを渡す
        $this->set('data',$data);
        //データが格納されていない時は前の画面にリダイレクト
        if(empty($data)) {$this->redirect('/Campaigns/create_confirm');}
        //データを保存する
        $this->Campaign->save($data);

	}

	//キャンペーンの進行状況
	public function check_progress() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
	}

	public function enter_amount() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
	}

}