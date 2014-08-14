<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	//コンポーネントの定義
	public $components = array(
        'DebugKit.Toolbar', //デバッグきっと
        'PageTitle',
        'Session',
        'Auth' => array( //ログイン機能を利用する
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array('username' => 'email','password' => 'password')
                )
            ),
            //ログイン後の移動先
            'loginRedirect' => array('controller' => 'campaigns', 'action' => 'home'),
            //ログアウト後の移動先
            'logoutRedirect' => array('controller' => 'campaigns', 'action' => 'pre_login'),
            //ログインページのパス
            'loginAction' => array('controller' => 'campaigns', 'action' => 'pre_login'),
            //未ログイン時のメッセージ
            'authError' => 'あなたのお名前とパスワードを入力して下さい。',
	    )
	);
	//DB接続前のフィルター
    public function beforeFilter(){//login処理の設定
         $this->Auth->allow('email_signup','login','policy','facebook','createFacebook','logout','index');
         $this->set('user',$this->Auth->user()); // ctpで$userを使えるようにする 。
    }
	//ページタイトルの定義
    public function beforeRender() {
        parent::beforeRender();
        $this->set('title_for_layout', $this->PageTitle->getPageTitle($this));
    }

}
