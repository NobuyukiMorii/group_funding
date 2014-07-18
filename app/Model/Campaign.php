<?php

class Campaign extends AppModel {

    public $name = 'Campaign';

    public $uses  = array('User','Campaign');
    

}
