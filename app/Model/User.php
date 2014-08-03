<?php

class User extends AppModel {

    public $name = 'User';
    //ユーザーは今のところ独立（FundとCampaignに属されている）
    public $uses  = array('User');
    

}
