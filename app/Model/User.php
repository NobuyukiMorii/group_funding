<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $name = 'User';
    //ユーザーは今のところ独立（FundとCampaignに属されている）
    public $uses  = array('User');
    //バリデートの設定
    public $validate = array(
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty','email'),
                'message' => 'メールアドレスは必ず入力して下さい。'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'パスワードは必ず入力して下さい。'
            )
        ),
    );
    //パスワードのハッシュ化
	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $passwordHasher = new SimplePasswordHasher();
	        $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
	    }
	    return true;
	}
}
