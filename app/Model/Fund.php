<?php

class Fund extends AppModel {

    public $name = 'Fund';
    //Fundはキャンペーンとユーザーに属する
    public $uses  = array('Fund','Campaign','User');
    //アソシエーションの設定
    public $belongsTo = array(
        'User' => array(
            'className'    => 'User',
            'foreignKey'   => 'user_id'
        ),
        'Campaign' => array(
            'className'    => 'Campaign',
            'foreignKey'   => 'campaign_id',
            'fields' => array('id'),
        )
    );
}
