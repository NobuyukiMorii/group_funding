<?php
class CampaignsController extends AppController {

	public function index() {
		//レイアウトは使わない
		$this->autoLayout = false;
		//ビューは表示する
        $this->autoRender = true;

	}

	public function create() {
		//レイアウトは使う
		$this->autoLayout = true;
		//ビューは表示する
        $this->autoRender = true;

	}

	public function project() {
		//レイアウトは使う
		$this->autoLayout = true;
		//ビューは表示する
        $this->autoRender = true;
        //変数が入っていなければ前のページに戻らせる
        if(empty($this->request->data)) {
        	return $this->redirect(array('controller' => 'campaigns', 'action' => 'create'));
        }
        //変数を受け取る
        $data = $this->request->data;
        //データを変数に保存
        $data = $this->request->data;
        //データをデータベースに保存する
        $this->Campaign->saveAll($data);
        //ビューに変数を渡す
        $this->set('data',$data);

	}





}