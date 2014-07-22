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

	//ホーム画面
	public function home() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //

	}	

	//キャンペーンの入力画面
	public function create() {
		//レイアウトは使わない
		$this->autoLayout = true;
		//ビューは表示する
        $this->autoRender = true;
        //ページタイトルを定義


	}

	//生成したURLを表示する画面



}