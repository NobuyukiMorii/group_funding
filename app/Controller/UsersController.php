<?php
class UsersController extends AppController {

	public function index() {

	}

	public function email_login() {
		//レイアウトは使う
		$this->layout = 'jquerymobile';
		//ビューは表示する
        $this->autoRender = true;
        
	}

	public function facebook_login() {

	}

}