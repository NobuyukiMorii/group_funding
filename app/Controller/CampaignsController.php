<?php
class CampaignsController extends AppController {

	//ホーム画面
	public function index() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        //ページタイトルを定義

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