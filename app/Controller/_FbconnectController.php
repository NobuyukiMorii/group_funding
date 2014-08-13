<?php
 
//【1】facebook認証
App::import('Vendor','facebook',array('file' => 'facebook'.DS.'src'.DS.'facebook.php'));
 
class FbconnectController extends AppController {
    public $name = 'Fbconnect';
 
    function index(){
 
    }
 
    //facebookの認証処理部分
    public function facebook(){
        $this->autoRender = false;
        $this->facebook = $this->createFacebook();
        $user = $this->facebook->getUser();       //【4】ユーザ情報取得
        if($user){//認証後
            $me = $this->facebook->api('/me','GET',array('locale'=>'ja_JP'));  //【5】ユーザ情報を日本語で取得
            $this->Session->write('mydata',$me);      //【6】ユーザ情報をセッションに保存
            $this->redirect('showdata');
        }else{//認証前
            $url = $this->facebook->getLoginUrl(array(
            'scope' => 'email,publish_stream','canvas' => 1,'fbconnect' => 0));   //【7】スコープの確認
            $this->redirect($url);
        }
    }
 
    private function createFacebook() {        //【8】appID, secretを記述
        return new Facebook(array(
            'appId' => '828906960467092',
            'secret' => '65b2a9a9645ae2c741678da3bc79246d'
        ));
    }
}