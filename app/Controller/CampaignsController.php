<?php
class CampaignsController extends AppController {
	//使うコンポーネントを定義
	public $components = array('Common');

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
        //リクエストデータの読み込み
        $foo = $this->request->data;
        $this->set(compact('foo'));
	}
	//確認画面
	public function create_confirm() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}

	//プロジェクトが生成された画面
	public function create_live() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;

	}

}