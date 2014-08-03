<?php

class Comment extends AppModel {

    public $name = 'Comment';
    //Commentはキャンペーンとユーザーに属する
    public $uses  = array('Comment','Campaign','User');
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
