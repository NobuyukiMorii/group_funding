<?php

class User extends AppModel {

    public $name = 'User';

    public $uses  = array('User','Campaign');
    

}
