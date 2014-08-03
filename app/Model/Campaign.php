<?php

class Campaign extends AppModel {

    public $name = 'Campaign';
    //キャンペーンはユーザーに属する
    public $uses  = array('Campaign','user');
    //アソシエーションの設定
    public $belongsTo = array(
        'User' => array(
            'className'    => 'User',
            'foreignKey'   => 'user_id'
        )
    );

}
